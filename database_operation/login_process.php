<?php
session_start();
include '../db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $admin['username']; 
            header('Location: ../admin/index.php');
            exit();
        } else {
            $_SESSION['error_message'] = "Incorrect password";
            header('Location: ../admin/login.php');
            exit();
        }
    } else {
        $_SESSION['error_message'] = "User not found";
        header('Location: ../admin/login.php');
        exit();
    }
} else {
    echo "Invalid request.";
}
?>
