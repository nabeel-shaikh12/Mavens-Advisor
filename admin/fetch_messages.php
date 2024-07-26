<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <style>
        .media {
            margin-top: 10px;
            display: flex;
        }

        .chat-box-area .message-sent p {
            background: #019dff;
            padding: 10px 15px;
            border-radius: 10px 10px 0px 10px;
            color: white !important;
            color: var(--primary);
            border-radius: 15px;
            text-align: right;
            font-size: 13px;
        }

        .justify-content-start {
            justify-content: flex-start;
            text-align: left;
        }

        .justify-content-end {
            justify-content: flex-end;
            text-align: right;
        }

        .align-items-end {
            align-items: flex-end;
        }

        .fs-12 {
            font-size: 12px;
            color: gray;
        }

        .message-sent img,
        .message-sent object {
            max-width: 100%;
            height: auto;
        }

        .message-sent object {
            width: 100%;
            height: 500px;
        }

        .chat-box-area {
            overflow-y: auto;
            /* Enable vertical scrolling */
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include '../db/dbCon.php';

    $admin_email = $_SESSION['email'];
    $user_email = $_GET['email'];
    $sqlMessages = "SELECT * FROM messages WHERE email_address = '$user_email' OR admin_email = '$user_email'";
    $resultMessages = $conn->query($sqlMessages);
    $htmlContent = '<div class="chat-box-area style-2 dz-scroll" id="chatBox">';

    if ($resultMessages->num_rows > 0) {
        echo '<div class="card">';
        echo '    <div class="card-body">';
        echo '        <div class="d-flex align-items-center">';
        echo '            <div class="avatar text-light rounded-circle d-flex align-items-center justify-content-center" style="background-color:#E8EBF0; width: 50px; height: 50px;">';
        echo '                <span style="font-size: 20px;">' . substr($user_email, 0, 1) . '</span>';
        echo '            </div>';
        echo '            <div class="d-flex flex-column ms-2">';
        echo '<h6 class="mb-0 mt-2">' . $user_email . '</h6>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';

        while ($row = $resultMessages->fetch_assoc()) {
            $message = $row['message'];
            $message = preg_replace('/\b(http[s]?:\/\/\S+)/i', '<a href="$1" target="_blank">$1</a>', $message); // Convert URLs to clickable links
            $message = nl2br($message); // Convert newlines to <br> tags for HTML display

            $sender = ($row['admin_email'] == $admin_email) ? 'Admin' : $row['email_address'];
            $alignmentClass = ($row['admin_email'] == $admin_email) ? 'justify-content-end' : 'justify-content-start';
            $messageClass = ($row['admin_email'] == $admin_email) ? 'admin-message' : '';

            if (strpos($message, '||../upload/') === 0) {
                $filePath = substr($message, 2);
                $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif', 'bmp'])) {
                    $messageContent = '<img src="' . $filePath . '" alt="Image" height="380px">';
                } elseif ($fileExtension == 'pdf') {
                    $messageContent = '<object data="' . $filePath . '" type="application/pdf"><p>PDF viewer required.</p></object>';
                    $messageContent .= '<br><a href="' . $filePath . '" target="_blank">Open PDF in new tab</a>';
                } elseif (in_array($fileExtension, ['doc', 'docx'])) {
                    $messageContent = '<object data="' . $filePath . '" type="application/msword"><p>DOC viewer required.</p></object>';
                } elseif ($fileExtension == 'csv') {
                    $messageContent = '<object data="' . $filePath . '" type="text/csv"><p>CSV viewer required.</p></object>';
                } else {
                    $messageContent = '<p>Unsupported file type: ' . $fileExtension . '</p>';
                }
            } else {
                $messageContent = '<p style="font-size:16px;color:black">' . $message . '</p>';
            }

            $htmlContent .= '<div class="media ' . $alignmentClass . ' align-items-end">';
            $htmlContent .= '<div class="message-sent w-auto ' . $messageClass . '">';
            $htmlContent .= $messageContent;
            $htmlContent .= '<span class="fs-12">' . date("h:i A", strtotime($row['timestamp'])) . '</span>';
            $htmlContent .= '</div>';
            $htmlContent .= '</div>';
        }
    } else {
        $htmlContent .= '<p>No messages found for this email address.</p>';
    }

    $htmlContent .= '</div>'; // Close the chat-box-area div
    echo $htmlContent;
    $conn->close();
    ?>
    <script>
        function scrollToBottom() {
            var chatBox = document.getElementById("chatBox");
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function fetchChatDetail(emailAddress) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("chatBox").innerHTML = xhr.responseText;
                    setTimeout(scrollToBottom, 100); // Adjusted timeout to ensure DOM is fully updated
                }
            };
            var encodedEmailAddress = encodeURIComponent(emailAddress);
            xhr.open("GET", "fetch_messages.php?email=" + encodedEmailAddress, true);
            xhr.send();
        }

        function setupSendMessageListener(emailAddress) {
            var sendMessageForm = document.getElementById("messageForm");
            sendMessageForm.onsubmit = function (e) {
                e.preventDefault();
                var message = document.getElementById("message").value;
                var fileInput = document.getElementById("file").files[0];
                var formData = new FormData();
                formData.append('email', emailAddress);
                formData.append('message', message);
                formData.append('file', fileInput);

                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        fetchChatDetail(emailAddress);
                        document.getElementById("message").value = '';
                        document.getElementById("file").value = '';
                        setTimeout(scrollToBottom, 100); // Adjusted timeout to ensure DOM is fully updated
                    }
                };
                xhr.open("POST", "send_message.php", true);
                xhr.send(formData);
            };
        }

        document.addEventListener('DOMContentLoaded', function () {
            scrollToBottom(); // Scroll to bottom on page load
        });
    </script>
</body>

</html>
