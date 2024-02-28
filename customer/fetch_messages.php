<?php
    include '../db/dbCon.php';
    session_start();
    if (!isset($_SESSION['email_address'])) {
        header('Location: login.php');
        exit();
    }
    if (isset($_POST['logout'])) {
        $_SESSION = array();
        session_destroy();
        header("Location: login.php");
        exit;
    }
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
            $sender_email = $row['email_address'];
            $htmlContent .= '<div class="media justify-content-' .($row['email_address'] == $user_email ? 'end' : 'start') . ' align-items-end ms-auto">';
            $htmlContent .= '<div class="message-sent w-auto">';
            $htmlContent .= '<span class="fs-12">' . ($sender_email == $user_email ? $user_email : $row['admin_email']) . '</span>';
            $htmlContent .= '<p style="font-size:16px;color:black">'.$row['message'] . '</p>';
            $htmlContent .= '<span class="fs-12">' . date("h:i A", strtotime($row['timestamp'])) . '</span>';
            $htmlContent .= '</div>';
            $htmlContent .= '</div>';
        }
    } 
    else {
        $htmlContent .= '<p>No messages found for this email address.</p>';
    }
// $htmlContent .= '</div>';
// $htmlContent .= '<div class="message-send style-2">';
// $htmlContent .= '<div class="type-massage style-1">';
// $htmlContent .= '<form id="messageForm" method="POST" action="' . $_SERVER['PHP_SELF'] . '?email=' . urlencode($user_email) . '">'; 
// $htmlContent .= '<input type="hidden" name="email" value="' . $user_email . '">';
// $htmlContent .= '<div class="row">';
// $htmlContent .= '<div class="col-md-6 col-xl-6 col-sm-6 col-lg-6 w-100">';
// $htmlContent .= '<input type="text" name="message" id="message" class="form-control" placeholder="Type your message here..">';
// $htmlContent .= '</div>';
// $htmlContent .= '<div class="col-md-6 col-xl-6 col-sm-6 col-lg-6">';
// $htmlContent .= '<button type="submit" class="btn btn-primary p-2" id="sendButton" style="margin-top:-40px" id="sendButton">Send';
// $htmlContent .= '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">';
// $htmlContent .= '<path d="M10.555 5.44976L6.73936 9.30612L2.39962 6.59178C1.77783 6.20276 1.90718 5.25829 2.61048 5.05262L12.9142 2.03518C13.5582 1.84642 14.155 2.44855 13.9637 3.09466L10.9154 13.3912C10.7066 14.0955 9.76747 14.2213 9.38214 13.5968L6.73734 9.3068" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>';
// $htmlContent .= '</svg>';
// $htmlContent .= '</button>';
// $htmlContent .= '</div>';
// $htmlContent .= '</div>';
// $htmlContent .= '</div>';
// $htmlContent .= '</form>';
// $htmlContent .= '</div>';
// $htmlContent .= '</div>';
echo $htmlContent;
$conn->close();
?>
</body>
<script src="chat.js"></script>
</html>