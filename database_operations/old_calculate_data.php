<?php
session_start();

$transactionPrice = $_POST['transactionPrice'] ?? '';
$invoicePrice = $_POST['invoicePrice'] ?? '';
$payrollPrice = $_POST['payrollPrice'] ?? '';
$cashflowPrice = $_POST['cashflowPrice'] ?? '';
$budgetPrice = $_POST['budgetPrice'] ?? '';
$setupPrice = $_POST['setupPrice'] ?? '';
$totalPrice = $_POST['totalPrice'] ?? '';

$message = "Transaction Price: $transactionPrice, Invoice Price: $invoicePrice, Payroll Price: $payrollPrice, Cashflow Price: $cashflowPrice, Budget Price: $budgetPrice, Setup Price: $setupPrice, Total Price: $totalPrice";

$email = $_SESSION['email_address'] ?? '';

include '../db/dbCon.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO messages (email_address, message) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $message);

if ($stmt->execute()) {
    $successMessage = "Your message has been sent to the admin team. A member will contact you soon.";
} else {
    $errorMessage = "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

if (isset($successMessage)) {
    $_SESSION['successMessage'] = $successMessage;
    header("Location: ../chat.php");
    exit();
} else {
    $_SESSION['errorMessage'] = $errorMessage;
    header("Location: ../chat.php");
    exit();
}
?>
