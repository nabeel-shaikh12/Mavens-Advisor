<?php
session_start();

$transactionPrice = $_POST['transactionPrice'] ?? '';
$invoicePrice = $_POST['invoicePrice'] ?? '';
$payrollPrice = $_POST['payrollPrice'] ?? '';
$cashflowPrice = $_POST['cashflowPrice'] ?? '';
$budgetPrice = $_POST['budgetPrice'] ?? '';
$setupPrice = $_POST['setupPrice'] ?? '';
$totalPrice = $_POST['totalPrice'] ?? '';

$_SESSION['calculatorPrices'] = compact('transactionPrice', 'invoicePrice', 'payrollPrice', 'cashflowPrice', 'budgetPrice', 'setupPrice', 'totalPrice');

$email = $_SESSION['email_address'] ?? '';

include '../db/dbCon.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO messages (email_address, message) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $message);

$message = '';
if (!empty($transactionPrice)) {
    $message .= "Transaction Price: $transactionPrice, ";
}
if (!empty($invoicePrice)) {
    $message .= "Invoice Price: $invoicePrice, ";
}
if (!empty($payrollPrice)) {
    $message .= "Payroll Price: $payrollPrice, ";
}
if (!empty($cashflowPrice)) {
    $message .= "Cashflow Price: $cashflowPrice, ";
}
if (!empty($budgetPrice)) {
    $message .= "Budget Price: $budgetPrice, ";
}
if (!empty($setupPrice)) {
    $message .= "Setup Price: $setupPrice";
}
if (!empty($totalPrice)) {
    // Add "Total Price" only if it's not already included in the message
    if (!strpos($message, "")) {
        $message .= "Total Price: $totalPrice";
    } else {
        $message .= ", $totalPrice";
    }
}
$message = rtrim($message, ", ");

if ($stmt->execute()) {
    $successMessage = "Message sent successfully.";
    $_SESSION['successMessage'] = $successMessage;
    header("Location: ../customer/index.php");
    exit();
} else {
    $errorMessage = "Error: " . $stmt->error;
    $_SESSION['errorMessage'] = $errorMessage;
    header("Location: ../chat.php");
    exit();
}

$stmt->close();
$conn->close();
?>
