<?php
session_start();
include './db/dbCon.php';

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
            header('Location: ./calculator');
            exit();
        } else {
            $_SESSION['error_message'] = "Incorrect password";
            header('Location: ./customer/login');
            exit();
        }
    } else {
        $_SESSION['error_message'] = "User not found";
        header('Location: ./customer/login');
        exit();
    }
} else {
    echo "Invalid request.";
}
?>
<?php
// session_start();
// include './db/dbCon.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email_address = $_POST['email_address'];
//     $password = $_POST['password'];
    
//     // Validate and sanitize user inputs if necessary

//     $sql = "SELECT * FROM user WHERE email_address = ? LIMIT 1";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("s", $email_address);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows == 1) {
//         $user = $result->fetch_assoc();
//         if (password_verify($password, $user['password'])) {
//             if (isset($_POST['subscribe'])) {
//                 // Retrieve form data from $_POST
//                 $business_description = $_POST['business_description'];
//                 $business_size = $_POST['business_size'];
//                 $business_category = $_POST['business_category'];
//                 $business_name = $_POST['business_name'];
//                 $firstName = $_POST['firstname'];
//                 $lastName = $_POST['lastname'];
//                 $email = $_POST['email'];
//                 $phone_no = $_POST['phone_no'];

//                 $sql_insert = "INSERT INTO subscription_form (business_description, business_size, business_category, business_name, firstname, lastname, email, phone_no) 
//                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//                 $stmt_insert = $conn->prepare($sql_insert);
//                 $stmt_insert->bind_param("ssssssss", $business_description, $business_size, $business_category, $business_name, $firstName, $lastName, $email, $phone_no);
//                 $stmt_insert->execute();
//                 header('Location: ./calculator.php');
//                 exit();
//             }
//             else{
//                 header('location: ./customer');
//             }
            
//         } else {
//             $_SESSION['error_message'] = "Incorrect password";
//             header('Location: ../customer/login.php');
//             exit();
//         }
//     } else {
//         $_SESSION['error_message'] = "User not found";
//         header('Location: ../customer/login.php');
//         exit();
//     }
// } else {
//     header('Location: ../customer/index.php');
//     exit();
// }
?>

