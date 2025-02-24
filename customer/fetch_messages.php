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

<?php
session_start();
include '../db/dbCon.php';
$admin_email = $_SESSION['email_address'];
$user_email = $_GET['email'];
$sqlMessages = "SELECT * FROM messages WHERE email_address = '$user_email' OR admin_email = '$user_email'";
$resultMessages = $conn->query($sqlMessages);
$htmlContent = '<div class="chat-box-area style-2 dz-scroll">';

if ($resultMessages->num_rows > 0) {
    echo '<div class="card">';
    echo '    <div class="card-body">';
    echo '        <div class="d-flex align-items-center">';
    echo '            <div class="avatar text-light rounded-circle d-flex align-items-center justify-content-center" style="background-color:#E8EBF0; width: 50px; height: 50px;">';
    echo '                <span style="font-size: 20px;">' . substr($user_email, 0, 1) . '</span>';
    echo '            </div>';
    echo '            <div class="d-flex flex-column ms-2">';
    echo '                <h6 class="mb-0 mt-2">info@mavensadvisor.com</h6>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';

    $messageCounter = 0; // Counter to track the message number

    while ($row = $resultMessages->fetch_assoc()) {
        $messageCounter++; // Increment the counter
        $message = $row['message'];

        if ($messageCounter == 1) {
            $message = "Chat initiate to Virtual Cfo";
        } else {
            $message = preg_replace('/\b(http[s]?:\/\/\S+)/i', '<a href="$1" target="_blank">$1</a>', $message);
            $message = nl2br($message);
        }

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
} else {
    $htmlContent .= '<p>No messages found.</p>';
}
$htmlContent .= '</div>';
echo $htmlContent;
$conn->close();
?>