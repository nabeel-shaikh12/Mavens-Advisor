<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <style>
        .media {
            margin-top: 10px;
            display: flex;
        }

        .message-sent {
            padding: 10px;
            border-radius: 8px;
            max-width: 70%;
        }

        .justify-content-start {
            justify-content: flex-start;
            text-align: left;
        }

        .justify-content-end {
            justify-content: flex-end;
        }

        .align-items-end {
            align-items: flex-end;
        }

        .fs-12 {
            font-size: 12px;
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
    </style>
</head>
<body>
<?php
session_start();
include '../db/dbCon.php';
$admin_email = $_SESSION['email_address'];
$user_email = $_GET['email'];
$sqlMessages = "SELECT * FROM messages WHERE email_address = '$user_email' OR admin_email = '$user_email'";
$resultMessages = $conn->query($sqlMessages);
$htmlContent = '<div class="chat-box-area style-2 dz-scroll">';

if ($resultMessages->num_rows > 0) {
    echo '<div class="d-flex">';
    echo '<img src="../img/user-image.png" class="avatar avatar-lg rounded-circle" alt="">';
    echo '<div class="ms-2">';
    echo '<h6 class="mb-0 mt-2">admin@gmail.com</h6>';
    echo '</div>';
    echo '</div>';
    while ($row = $resultMessages->fetch_assoc()) {
        $message = $row['message'];
        $message = preg_replace('/\b(http[s]?:\/\/\S+)/i', '<a href="$1" target="_blank">$1</a>', $message);
        $sender = $row['email_address'];
        $messageClass = ($row['email_address'] == $user_email) ? 'justify-content-end' : 'justify-content-start';

        if (strpos($message, '||../upload/') === 0) {
            $filePath = substr($message, 2);
            $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
            if ($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png' || $fileExtension == 'gif' || $fileExtension == 'bmp') {
                $messageContent = '<img src="' . $filePath . '" alt="Image" height="80px">';
            } elseif ($fileExtension == 'pdf') {
                $messageContent = '<object data="' . $filePath . '" type="application/pdf"><p>PDF viewer required.</p></object>';
            } elseif ($fileExtension == 'doc' || $fileExtension == 'docx') {
                $messageContent = '<object data="' . $filePath . '" type="application/msword"><p>DOC viewer required.</p></object>';
            } elseif ($fileExtension == 'csv') {
                $messageContent = '<object data="' . $filePath . '" type="text/csv"><p>CSV viewer required.</p></object>';
            } else {
                $messageContent = '<p>Unsupported file type: ' . $fileExtension . '</p>';
            }
        } else {
            $messageContent = '<p style="font-size:16px;color:black">' . $message . '</p>';
        }
        $htmlContent .= '<div class="media' . ($row['admin_email'] ? ' justify-content-start' : ' justify-content-end') . ' align-items-end">';
        $htmlContent .= '<div class="message-sent w-auto">';
        $htmlContent .= $messageContent;
        $htmlContent .= '<span class="fs-12" style="color:black;">' . ($row['admin_email'] ? 'Admin' : '') . '</span>';
        $htmlContent .= '<span class="fs-12">' . date("h:i A", strtotime($row['timestamp'])) . '</span>';
        $htmlContent .= '</div>';
        $htmlContent .= '</div>';
    }
    $htmlContent .= '<div class="write" style="margin: 10px; display: none;" id="messageContainer">
    <form id="messageForm" method="POST" action="' . $_SERVER['PHP_SELF'] . '?email=' . urlencode($user_email) . '" enctype="multipart/form-data">
        <input type="hidden" name="email" value="' . $user_email . '">
        <div class="input-group">
            <a href="javascript:;" class="write-link attach" onclick="document.getElementById(\'file\').click(); return false;"></a>
            <input type="text" name="message" id="message" class="form-control" placeholder="Type your message here.." />
            <input type="file" name="file" id="file" style="display: none;">
            <button type="submit" class="write-link send border-0" id="sendButton"></button>
        </div>
    </form>
</div>';
} else {
    $htmlContent .= '<p>No messages found.</p>';
}
echo $htmlContent;
$conn->close();
?>
</body>
<script>
	var intervalId; 
	var previousMessages = ''; 
	function fetchChatDetail(emailAddress) {
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4) {
				if (xhr.status == 200) {
					var currentMessages = xhr.responseText;
					if (currentMessages !== previousMessages) { 
						document.getElementById("chat-detail-content").innerHTML = currentMessages;
						setupSendMessageListener(emailAddress);
						previousMessages = currentMessages; 
					}
				} else {
					console.error("Error fetching chat details. Status code: " + xhr.status);
				}
			}
		};
		var encodedEmailAddress = encodeURIComponent(emailAddress);
		xhr.open("GET", "fetch_messages.php?email=" + encodedEmailAddress, true);
		xhr.send();
	}
	function setupSendMessageListener(emailAddress) {
		var sendMessageForm = document.getElementById("messageForm");
		sendMessageForm.onsubmit = function(e) {
			e.preventDefault();
			var message = document.getElementById("message").value;
			var fileInput = document.getElementById("file").files[0];

			var formData = new FormData();
			formData.append('email', emailAddress);
			formData.append('message', message);
			formData.append('file', fileInput);

			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4) {
					if (xhr.status == 200) {
						fetchChatDetail(emailAddress); 
						document.getElementById("message").value = '';
						document.getElementById("file").value = '';
					} else {
						console.error("Error sending message. Status code: " + xhr.status);
					}
				}
			};
			xhr.open("POST", "send_message.php", true);
			xhr.send(formData);
		};
		clearInterval(intervalId);
		intervalId = setInterval(function() {
			fetchChatDetail(emailAddress);
		}, 1000);
	}
</script>
</html>
