<?php
include '../db/dbCon.php';
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}
$user_activity_status = isset($_SESSION['user_activity']) && $_SESSION['user_activity'] ? 'Online' : 'Offline';
if (isset($_POST['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
    exit();
}
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
        ?>
        <p>
        <?php if ($user_activity_status === 'Online'): ?>
         <i class="fas fa-circle text-success"></i> 
        <?php else: ?>
            <i class="fas fa-circle text-secondary"></i> 
        <?php endif; ?>
        <?php echo $user_activity_status; ?>
    </p>    
        <?php
        echo '</div>';
        echo '</div>';
        while ($row = $resultMessages->fetch_assoc()) {
            $message = $row['message'];
            $message = preg_replace('/\b(http[s]?:\/\/\S+)/i', '<a href="$1" target="_blank">$1</a>', $message);
            $htmlContent .= '<div class="media justify-content-' . ($row['email_address'] == $user_email ? 'end' : 'start') . ' align-items-end ms-auto">';
            $htmlContent .= '<div class="message-sent w-auto">';
            $htmlContent .= '<p style="font-size:16px;color:black">' . $message . '</p>';
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