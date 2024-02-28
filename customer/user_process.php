<?php
include '../db/dbCon.php';
$error = "";
$message = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email_address = $_POST["email_address"];
//     $user_name = $_POST["user_name"];
//     $password = $_POST["password"];
//     $confirm_password = $_POST["confirm_password"]; 
    
//     if ($password !== $confirm_password) {
//         $error = "Password and confirm password do not match.";
//     } else {
//         $check_email_sql = "SELECT * FROM user WHERE email_address = '$email_address'";
//         $check_email_result = $conn->query($check_email_sql);

//         if ($check_email_result->num_rows > 0) {
//             $error = "Email address already exists.";
//         } else {
//             $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//             $hashed_confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);


//             $sql = "INSERT INTO user (email_address, user_name, password, confirm_password) VALUES (?, ?, ?, ?)";

//             $stmt = $conn->prepare($sql);
//             $stmt->bind_param("ssss", $email_address, $user_name, $hashed_password, $hashed_confirm_password);
//             if ($stmt->execute()) {
//                 $message = "Registration is complete. When your account is active, We will email you.";
//             } else {
//                 $error = "There is an error in the registration process.";
//             }
//             $stmt->close();
//         }
//     }
// }


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
        $check_email_result = $stmt_check_email->get_result();

        if ($check_email_result->num_rows > 0) {
            $error = "Email address already exists.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (email_address, user_name, password) VALUES (?, ?, ?)";
            $stmt_insert_user = $conn->prepare($sql);
            $stmt_insert_user->bind_param("sss", $email_address, $user_name, $hashed_password);

            if ($stmt_insert_user->execute()) {
                $message = "Registration is complete. When your account is active, We will email you.";

                if (isset($_POST['filled_subscription_form']) && $_POST['filled_subscription_form'] == 'true') {
                    header("Location: ../calculator.php?message=$message");
                    exit();
                } else {
                    header("Location: ./index.php?message=$message");
                    exit();
                }
            } else {
                $error = "There is an error in the registration process.";
            }
            $stmt_insert_user->close();
        }
        $stmt_check_email->close();
    }
}
$conn->close();
header("Location: ../customer/login.php?error=$error&message=$message");
exit();
?>
