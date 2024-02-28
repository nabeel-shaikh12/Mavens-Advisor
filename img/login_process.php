<?php
session_start();
include '../db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['subscribe'])) {
        header('Location: ../calculator');
        exit();
    } elseif (isset($_POST['login'])) {
        $email_address = $_POST['email_address'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE email_address = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email_address);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['email_address'] = $email_address;
                header('Location: ../customer/index');
                exit();
            } else {
                $_SESSION['error_message'] = "Incorrect password";
                header('Location: ../customer/login');
                exit();
            }
        } else {
            $_SESSION['error_message'] = "User not found";
            header('Location: ../customer/login');
            exit();
        }
    } else {
        echo "Invalid request.";
    }
}
?>
