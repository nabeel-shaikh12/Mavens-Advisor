<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="chat.js"></script>
</head>
<body>

<?php
session_start();
include '../db/dbCon.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['message']) && isset($_SESSION['email']) && isset($_POST['email'])) {
        $admin_email = $_SESSION['email']; 
        $user_email = $_POST['email']; 
        $message = mysqli_real_escape_string($conn, $_POST['message']); 
        $sql = "INSERT INTO messages (email_address, admin_email, message) VALUES ('$user_email', '$admin_email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "Message sent successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Message content not provided, admin email not set in session, or email address not provided.";
    }
}
?>
</body>
</html>
