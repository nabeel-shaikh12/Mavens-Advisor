<?php
session_start();
include 'config.php';
include '../db/dbCon.php';
if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
if (isset($_GET['code'])) {
    $token = $google->fetchAccessTokenWithAuthCode($_GET["code"]);
    if (isset($token['access_token'])) {
        $google_client->setAccessToken($token["access_token"]);
        $googleService = new Google_Service_Oauth2($google_client);
        $data = $googleService->userinfo->get();
        
        $_SESSION['email_address'] = $data['email'];
        $_SESSION['login'] = true;
        
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
        echo "Error fetching access token.";
        exit();
    }
}
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
    }elseif (isset($_POST['username']) && isset($_POST['password'])) {
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
} else {
    echo "Invalid request.";
}
?>
