<?php
session_start();
include '../db/dbCon.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $business_description = $_POST['business_description'];
    $business_size = $_POST['business_size'];
    $business_category = $_POST['business_category'];
    $business_name = $_POST['business_name'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    
    $sql = "INSERT INTO subscription_form (business_description, business_size, business_category, business_name, firstname, lastname, email, phone_no) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $business_description, $business_size, $business_category, $business_name, $firstName, $lastName, $email, $phone_no);

    if ($stmt->execute()) {
        $response = array("success" => true, "message" => "Form has been submitted successfully.");
        echo json_encode($response);
    } else {
        $response = array("success" => false, "message" => "Error: " . $stmt->error);
        echo json_encode($response);
    }
    $stmt->close();
} else {
    $response = array("success" => false, "message" => "Error: No POST data received.");
    echo json_encode($response);
}

$conn->close();

$_SESSION['filled_subscription_form'] = true;
header('Location: ../customer/login.php');
exit();
?>
