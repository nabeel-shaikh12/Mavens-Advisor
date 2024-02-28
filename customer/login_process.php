<?php
session_start();
include '../db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
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
            if (isset($_SESSION['filled_subscription_form'])) {
                unset($_SESSION['filled_subscription_form']);
                header('Location: ../calculator.php');
                exit();
            } else {
                header('Location: ./index.php');
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Incorrect password";
            header('Location: ../customer/login.php');
            exit();
        }
    } else {
        $_SESSION['error_message'] = "User not found";
        header('Location: ../customer/login.php');
        exit();
    }
} else {
    echo "Invalid request.";
}


?>
