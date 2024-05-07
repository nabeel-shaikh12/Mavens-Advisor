<?php
include './db/dbCon.php';

$message = $error = '';

function verifyRecaptcha($response)
{
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6Lft5qMpAAAAALwk93B8vvPCrbkhdS2kx3NwrSYg',
        'response' => $response
    );

    $options = array(
        'http' => array(
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
            $full_name = $_POST['full_name'];
            $email_address = $_POST['email_address'];
            $message_text = $_POST['message'];

            $sql = "INSERT INTO contact_form (full_name, email_address, message) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('sss', $full_name, $email_address, $message_text);

            if ($stmt->execute()) {
                $message = "Message sent successfully.";
                header('location: contact.php?message=' . urlencode($message));
                $message = "Form Submitted Successfully";
                exit();
            } else {
                $error = "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $error = "reCAPTCHA verification failed.";
        }
    } else {
        $error = "Please complete the reCAPTCHA.";
    }
} else {
    $error = "Error: Form submission method not allowed.";
}

$conn->close();
header('location: contact.php?error=' . urlencode($error));
exit();
