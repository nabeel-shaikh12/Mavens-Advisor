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
      $email_address = $_POST["email_address"];
      $user_name = $_POST["user_name"];
      $password = $_POST["password"];
      $confirm_password = $_POST["confirm_password"]; 

      if ($password !== $confirm_password) {
        $error = "Password and confirm password do not match.";
      } 
      else {
        $check_email_sql = "SELECT * FROM user WHERE email_address = ?";
        $stmt_check_email = $conn->prepare($check_email_sql);
        $stmt_check_email->bind_param("s", $email_address);
        $stmt_check_email->execute();
        $check_email_result = $stmt_check_email->get_result();

        if ($check_email_result->num_rows > 0) {
            $error = "Email address already exists.";
        }
        else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (email_address, user_name, password) VALUES (?, ?, ?)";
            $stmt_insert_user = $conn->prepare($sql);
            $stmt_insert_user->bind_param("sss", $email_address, $user_name, $hashed_password);

              if ($stmt_insert_user->execute()) {
                $message = "Registration is complete. We will email you when your account is active.";

                if (isset($_POST['filled_subscription_form']) && $_POST['filled_subscription_form'] == 'true') {
                    header("Location: ../chat.php?message=$message");
                    exit();
                }
                else {
                    header("Location: ./login.php?message=$message");
                    exit();
                }
                } 
                else {
                  $error = "There was an error in the registration process.";
                }
                    $stmt_insert_user->close();
                }
                $stmt_check_email->close();
            }
        } else {
            $error = "reCAPTCHA verification failed.";
        }
    } else {
        $error = "Please complete the reCAPTCHA.";
    }
}

$conn->close();
header("Location: ../customer/login.php?error=$error&message=$message");
exit();
?>
