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

// session_start();
// include '../db/dbCon.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if(isset($_POST['message']) && isset($_SESSION['email_address']) && isset($_POST['email'])) {
//         $admin_email = $_SESSION['email_address'];
//         $user_email = $_POST['email']; 
//         $message = mysqli_real_escape_string($conn, $_POST['message']); 
//         $upload_dir = '../upload/';
//         $file_path = '';
//         if (!empty($_FILES['file']['name']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
//             $file_name = basename($_FILES["file"]["name"]);
//             $file_path = $upload_dir . $file_name;
//             if (move_uploaded_file($_FILES["file"]["tmp_name"], $file_path)) {
//                 $message .= "||" . $file_path;
//             } else {
//                 echo "Error uploading file.";
//                 exit;
//             }
//         }
//         $sql = "INSERT INTO messages (email_address, message) VALUES ('$user_email', '$message')";
//         if ($conn->query($sql) === TRUE) {
//             echo "Message sent successfully";
//         } else {
//             echo "Error: " . $conn->error;
//         }
//     } else {
//         echo "Message content not provided, admin email not set in session, or email address not provided.";
//     }
// }
session_start();
include '../db/dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if message content, admin email, and user email are set
    if(isset($_POST['message']) && isset($_SESSION['email_address']) && isset($_POST['email'])) {
        $admin_email = $_SESSION['email_address'];
        $user_email = $_POST['email']; 
        $message = mysqli_real_escape_string($conn, $_POST['message']); 
        $upload_dir = '../upload/';
        $file_path = '';

        if (!empty($_FILES['file']['name']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $file_name = basename($_FILES["file"]["name"]);
            $file_path = $upload_dir . $file_name;

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $file_path)) {
                $message .= "||" . $file_path;
            } else {
                echo "Error uploading file.";
                exit;
            }
        }

        $sql = "INSERT INTO messages (email_address, message) VALUES ('$user_email', '$message')";
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
