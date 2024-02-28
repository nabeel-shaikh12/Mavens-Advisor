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
        $check_email_sql = "SELECT * FROM user WHERE email_address = '$email_address'";
        $check_email_result = $conn->query($check_email_sql);

        if ($check_email_result->num_rows > 0) {
            $error = "Email address already exists.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (email_address, user_name, password, confirm_password) VALUES (?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $email_address, $user_name, $hashed_password, $confirm_password);
            if ($stmt->execute()) {
                $message = "Registration is complete. When your account is active, We will email you.";
                header('location:index.php');
                exit();
            } else {
                $error = "There is an error in the registration process.";
            }
            $stmt->close();
        }
    }
}
$conn->close();
header("Location: ../customer/login.php?error=$error&message=$message");
exit();
?>
