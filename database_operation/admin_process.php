<?php
include '../db/dbCon.php';

$error = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    if ($password !== $confirm_password) {
        $error = "Password and confirm password do not match.";
    } else {
        $check_email_sql = "SELECT * FROM admin WHERE email = ?";
        $stmt_check_email = $conn->prepare($check_email_sql);
        $stmt_check_email->bind_param("s", $email);
        $stmt_check_email->execute();
        $result_check_email = $stmt_check_email->get_result();

        if ($result_check_email->num_rows > 0) {
            $error = "Email address already exists.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO admin (email, username, password)
                    VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $email, $username, $hashed_password);

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
header("Location: ../admin/login.php?error=$error&message=$message");
exit();
?>

