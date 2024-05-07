<?php
include './db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculator_submit'])) {
    $transactionPrice = isset($_POST['transactionPrice']) ? $_POST['transactionPrice'] : null;
    $invoicePrice = isset($_POST['invoicePrice']) ? $_POST['invoicePrice'] : null;
    $payrollPrice = isset($_POST['payrollPrice']) ? $_POST['payrollPrice'] : null;
    $cashflowPrice = isset($_POST['cashflowPrice']) ? $_POST['cashflowPrice'] : null;
    $budgetPrice = isset($_POST['budgetPrice']) ? $_POST['budgetPrice'] : null;
    $setupPrice = isset($_POST['setupPrice']) ? $_POST['setupPrice'] : null;
    $totalPrice = isset($_POST['totalPrice']) ? $_POST['totalPrice'] : null;
    $discountPrice = isset($_POST['discountPrice']) ? $_POST['discountPrice'] : null;
    
    $sql = "INSERT INTO calculator (transactionPrice, invoicePrice, payrollPrice, cashflowPrice, budgetPrice, setupPrice, totalPrice, discountPrice) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $transactionPrice, $invoicePrice, $payrollPrice, $cashflowPrice, $budgetPrice, $setupPrice, $totalPrice, $discountPrice);
    
    if ($stmt->execute()) {
        $response = array("success" => true, "message" => "Calculator data saved successfully.");
        echo json_encode($response);
    } else {
        $response = array("success" => false, "message" => "Error: " . $stmt->error);
        echo json_encode($response);
    }
    $stmt->close();
} else {
    $response = array("success" => false, "message" => "Invalid request method.");
    echo json_encode($response);
}

$conn->close();
$_SESSION['filled_subscription_form'] = true;
header('Location: ./chat.php');
exit();
?>
