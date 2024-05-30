<?php
session_start();
include '../db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $business_description = $_POST['business_description'];
    $business_size = $_POST['business_size'];
    $business_category = $_POST['business_category'];
    $business_subCategory = $_POST['business_subCategory'];
    $business_name = $_POST['business_name'];
    $currency = $_POST['currency'];
    $foundedYear = $_POST['foundedYear'];
    $customer_type = $_POST['customer_type'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    
    // Prepare and bind the SQL statement
    $sql = "INSERT INTO subscription_form (business_description, business_size, business_category, business_subCategory, business_name, currency, foundedYear, customer_type, firstname, lastname, email, phone_no) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $business_description, $business_size, $business_category, $business_subCategory, $business_name, $currency, $foundedYear, $customer_type, $firstName, $lastName, $email, $phone_no);

    // Execute the statement and handle success or error
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

// Close the database connection
$conn->close();

// Set session flag and redirect
$_SESSION['filled_subscription_form'] = true;
header('Location: ../customer/login.php');
exit();
?>
