<?php
include '../db/dbCon.php';

$error = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_address = $_POST["email_address"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm_password) {
        $error = "Password and confirm password do not match.";
    } else {
        $check_email_sql = "SELECT * FROM user WHERE email_address = ?";
        $stmt_check_email = $conn->prepare($check_email_sql);
        $stmt_check_email->bind_param("s", $email_address);
        $stmt_check_email->execute();
        $result_check_email = $stmt_check_email->get_result();

        if ($result_check_email->num_rows > 0) {
            $error = "Email address already exists.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (email_address, user_name, password)
                    VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $email_address, $user_name, $hashed_password);

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

$conn->close();
header("Location: ../customer/login.php?error=$error&message=$message");
exit();
?>
