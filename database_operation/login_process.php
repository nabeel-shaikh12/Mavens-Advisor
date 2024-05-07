<?php
session_start();
include '../db/dbCon.php';

function verifyRecaptcha($response) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6Lft5qMpAAAAALwk93B8vvPCrbkhdS2kx3NwrSYg',
        'response' => $response
    );

    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    return $captcha_success->success;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $recaptcha_response = $_POST['g-recaptcha-response'];
    if (!verifyRecaptcha($recaptcha_response)) {
        $_SESSION['error_message'] = "Please verify reCAPTCHA";
        header('Location: ../admin/login.php');
        exit();
    }

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
