<?php
include '../db/dbCon.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_SESSION['email'])) {
        $admin_email = $_SESSION['email']; 
        $user_email = $_POST['email']; 
        $message = $_POST['message'];

        $sqlInsert = "INSERT INTO messages (email_address, admin_email, message) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sqlInsert);
        $stmt->bind_param('sss', $user_email, $admin_email, $message);

        if ($stmt->execute()) {
            header("Location: chat.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Admin email not set in session.";
    }
}
$user_email = $_GET['email'];
$sqlMessages = "SELECT * FROM messages WHERE email_address = '$user_email' OR admin_email = '$user_email'";
$resultMessages = $conn->query($sqlMessages);
$htmlContent = '<div class="chat-box-area style-2 dz-scroll">';

if ($resultMessages->num_rows > 0) {
    echo '<div class="d-flex">';
    echo '<img src="images/contacts/d1.jpg" class="avatar avatar-lg rounded-circle" alt="">';
    echo '<div class="ms-2">';
    echo '<h6 class="mb-0">admin@gmail.com</h6>';
    echo '</div>';
    echo '</div>';
    while ($row = $resultMessages->fetch_assoc()) {
        $htmlContent .= '<div class="media justify-content-' . ($row['email_address'] == $user_email ? 'end' : 'start') . ' align-items-end ms-auto">';
        $htmlContent .= '<div class="message-sent w-auto">';
        $htmlContent .= '<p style="font-size:16px;color:black">'.$row['message'] . '</p>';
        $htmlContent .= '<span class="fs-12">' . date("h:i A", strtotime($row['timestamp'])) . '</span>';
        $htmlContent .= '</div>';
        $htmlContent .= '</div>';
    }
    } else {
        $htmlContent .= '<p>No messages found for this email address.</p>';
    }
$htmlContent .= '</div>';
$htmlContent .= '<div class="message-send style-2">';
$htmlContent .= '<div class="type-massage style-1">';
$htmlContent .= '<form method="POST" action="' . $_SERVER['PHP_SELF'] . '?email=' . urlencode($user_email) . '">'; 
$htmlContent .= '<input type="hidden" name="email" value="' . $user_email . '">';
$htmlContent .= '<div class="input-group">';
$htmlContent .= '<input type="text" name="message" id="message" class="form-control" placeholder="Type your message here..">';
$htmlContent .= '</div>';
$htmlContent .= '</div>';
$htmlContent .= '<button type="submit" class="btn btn-primary p-2" id="sendButton" name="send_message">Send';
$htmlContent .= '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">';
$htmlContent .= '<path d="M10.555 5.44976L6.73936 9.30612L2.39962 6.59178C1.77783 6.20276 1.90718 5.25829 2.61048 5.05262L12.9142 2.03518C13.5582 1.84642 14.155 2.44855 13.9637 3.09466L10.9154 13.3912C10.7066 14.0955 9.76747 14.2213 9.38214 13.5968L6.73734 9.3068" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>';
$htmlContent .= '</svg>';
$htmlContent .= '</button>';
$htmlContent .= '</div>';
$htmlContent .= '</form>';
$htmlContent .= '</div>';
$htmlContent .= '</div>';
echo $htmlContent;
$conn->close();

?>
