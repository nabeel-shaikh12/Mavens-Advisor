<?php
session_start();
include 'config.php';
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $response = $_POST['g-recaptcha-response'];
        $captcha_success = verifyRecaptcha($response);

        if ($captcha_success) {
            if (isset($_POST['login'])) {
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
                            $_SESSION['login_message'] = "Login to Continue";
                            header('Location: ../calculator.php');
                            exit();
                        } else {
                            header('Location: ../customer/index.php');
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
            } elseif (isset($_POST['username']) && isset($_POST['password'])) {
                $con = mysqli_connect("localhost", "root", "", "youtube");
                if ($con) {
                    $query = 'SELECT * FROM login WHERE mailid="' . mysqli_real_escape_string($con, $_POST['username']) . '" AND password="' . mysqli_real_escape_string($con, md5($_POST['password'])) . '";';
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $_SESSION['login'] = true;
                        $_SESSION['username'] = $row['firstname'];
                        header('Location: index.php');
                        exit();
                    } else {
                        $_SESSION['login'] = false;
                        echo "Invalid Login";
                    }
                }
            }
        } else {
            $_SESSION['error_message'] = "reCAPTCHA verification failed";
            header('Location: ../customer/login.php');
            exit();
        }
    } else {
        $_SESSION['error_message'] = "Please complete the reCAPTCHA";
        header('Location: ../customer/login.php');
        exit();
    }
} else {
    echo "Invalid request.";
}
?>
