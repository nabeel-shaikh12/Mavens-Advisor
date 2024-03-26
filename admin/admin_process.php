<?php
include '../db/dbCon.php';

$error = "";
$message = "";

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $response = $_POST['g-recaptcha-response'];
        $captcha_success = verifyRecaptcha($response);

        if ($captcha_success) {
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmpassword = $_POST["confirmpassword"]; 
            
            if ($password !== $confirmpassword) {
                $error = "Password and confirm password do not match.";
            } else {
                $check_email_sql = "SELECT * FROM admin WHERE email = ?";
                $stmt_check_email = $conn->prepare($check_email_sql);
                $stmt_check_email->bind_param("s", $email_address);
                $stmt_check_email->execute();
                $check_email_result = $stmt_check_email->get_result();

                if ($check_email_result->num_rows > 0) {
                    $error = "Email address already exists.";
                } else {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO admin (email, username, password) VALUES (?, ?, ?)";
                    $stmt_insert_user = $conn->prepare($sql);
                    $stmt_insert_user->bind_param("sss", $email, $username, $hashed_password);

            if ($stmt->execute()) {
                $message = "Registration is complete. When your account is active, We will email you.";
            } else {
                $error = "There is an error in the registration process: " . $conn->error;
            }
            $stmt->close();
        }
        $stmt_check_email->close();
       }
     }
   }
}

$conn->close();
header("Location: ../admin/login.php?error=$error&message=$message");
exit();
?>
