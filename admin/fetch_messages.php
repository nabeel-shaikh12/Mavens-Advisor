<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
$htmlContent = '<div class="chat-box-area style-2 dz-scroll">';
    if ($resultMessages->num_rows > 0) {
        echo '<div class="d-flex">';
        echo '<img src="../img/user-image.png" class="avatar avatar-lg rounded-circle" alt="">';
        echo '<div class="ms-2">';
        echo '<h6 class="mb-0 mt-2">' . $user_email . '</h6>';
        echo '</div>';
        echo '</div>';
        while ($row = $resultMessages->fetch_assoc()) {
            $message = $row['message'];
            $message = preg_replace('/\b(http[s]?:\/\/\S+)/i', '<a href="$1" target="_blank">$1</a>', $message);
              if ($row['admin_email'] == $admin_email) {
                $sender = 'Admin';
                $alignmentClass = 'justify-content-end'; 
               } else {
                $sender = $row['email_address']; 
                $alignmentClass = 'justify-content-start';
               }
               if (strpos($message, '||../upload/') === 0) {
                $filePath = substr($message, 2);
                $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                   if ($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'png' || $fileExtension == 'gif' || $fileExtension == 'bmp') {
                     $messageContent = '<img src="' . $filePath . '" alt="Image" height="380px">';
                    } elseif ($fileExtension == 'pdf') {
                        $messageContent = '<object data="' . $filePath . '" type="application/pdf"><p>PDF viewer required.</p></object>';
                        $openInNewTabLink = '<a href="' . $filePath . '" target="_blank">Open PDF in new tab</a>';
                        $messageContent .= '<br>' . $openInNewTabLink;
                    } elseif ($fileExtension == 'doc' || $fileExtension == 'docx') {
                        $messageContent = '<object data="' . $filePath . '" type="application/msword"><p>DOC viewer required.</p></object>';
                    } elseif ($fileExtension == 'csv') {
                        $messageContent = '<object data="' . $filePath . '" type="text/csv"><p>CSV viewer required.</p></object>';
                    } 
                    else {
                        $messageContent = '<p>Unsupported file type: ' . $fileExtension . '</p>';
                    }
                } else {
                    $messageContent = '<p style="font-size:16px;color:black">' . $message . '</p>';
                }
                 $htmlContent .= '<div class="media ' . $alignmentClass . ' align-items-end">';
                 $htmlContent .= '<div class="message-sent w-auto' . ($row['admin_email'] == $admin_email ? ' admin-message' : '') . '">';
                 $htmlContent .= $messageContent;
                 $htmlContent .= '<span class="fs-12">' . date("h:i A", strtotime($row['timestamp'])) . '</span>';
                 $htmlContent .= '</div>';
                 $htmlContent .= '</div>';
              }
            } 
            else {
                $htmlContent .= '<p>No messages found for this email address.</p>';
            }
    $htmlContent .= '</div>';
    echo $htmlContent;
    $conn->close();
    ?>
    </body>
    <script src="chat.js"></script>
    </html>