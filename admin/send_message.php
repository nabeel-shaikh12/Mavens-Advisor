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
    if (!isset($_SESSION['email'])) {
        header('Location: login.php');
        exit();
    }
    $user_email = $_POST['email'];
    $admin_email = $_SESSION['email'];
    $message = isset($_POST['message']) ? trim(mysqli_real_escape_string($conn, $_POST['message'])) : '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['message']) && isset($_SESSION['email']) && isset($_POST['email'])) {
            $admin_email = $_SESSION['email'];
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

            $sql = "INSERT INTO messages (email_address, admin_email, message) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $user_email, $admin_email, $message);
            if ($stmt->execute()) {
                echo "Message sent successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "No message content to send.";
        }
    } else {
        echo "Email address not provided.";
    }
    ?>


</body>

</html>