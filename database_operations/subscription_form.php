<?php
session_start();
include '../db/dbCon.php';

// Define the fields with their types
$fields = [
    'business_description' => 's',
    'business_subCategory' => 's',
    'other_specify' => 's',
    'business_size' => 's',
    'company_operate_country' => 's',
    'company_revenue' => 's',
    'currency' => 's',
    'yearDropdown' => 's',
    'customer_type' => 's',
    'specifyCustomer' => 's',
    'business_name' => 's',
    'firstname' => 's',
    'email' => 's',
    'phone_no' => 's',
    'whichService' => 's',
    'accounting_software_used' => 's',
    'softwarePreferred' => 's',
    'softwareSpecifies' => 's',
    'numberOfTransaction' => 'i',
    'numberOfInvoiceInput' => 'i',
    'numberOfPayroll' => 'i',
    'noOfExpense' => 'i',
    'numberOfContractualPayment' => 'i',
    'transactionPrice' => 'd',
    'discountTransactionPrice' => 'd',
    'invoicePrice' => 'd',
    'discountInvoicePrice' => 'd',
    'expensePrice' => 'd',
    'discountExpencePrice' => 'd',
    'payrollPrice' => 'd',
    'discountPayrollPrice' => 'd',
    'cashflowPrice' => 'd',
    'discountCashflowPrice' => 'd',
    'budgetPrice' => 'd',
    'discountBudgetPrice' => 'd',
    'setupPrice' => 'd',
    'irsPrice' => 'd',
    'statePrice' => 'd',
    'hmrcPrice' => 'd',
    'companyPrice' => 'd',
    'contractualPaymentPrice' => 'd',
    'vatPrice' => 'd',
    'financialAnalysisPrice' => 'd',
    'profitPrice' => 'd',
    'advisoryPrice' => 'd',
    'totalPrice' => 'd',
    'discountedPrice' => 'd',
    'cfo' => 's',
    'specifyReason' => 's',
    'otherReason' => 's'
];

// Prepare columns, values, and bind types
$columns = [];
$values = [];
$bind_types = '';

foreach ($fields as $field => $type) {
    if (isset($_POST[$field])) {
        $values[] = ($_POST[$field] === '') ? null : $_POST[$field];
        $columns[] = $field;
        $bind_types .= $type;
    }
}

if (count($columns) > 0) {
    $sql = "INSERT INTO subsciption_form (" . implode(", ", $columns) . ") VALUES (" . str_repeat('?, ', count($columns) - 1) . "?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die('Error preparing statement: ' . $conn->error);
    }

    $params = [];
    $params[] = &$bind_types;
    foreach ($values as $key => $value) {
        $params[] = &$values[$key];
    }

    call_user_func_array([$stmt, 'bind_param'], $params);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        die('Error executing statement: ' . $stmt->error);
    }

    $stmt->close();
} else {
    die('No data to insert');
}

$conn->close();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $business_description = $_POST['business_description'];
//     $business_size = $_POST['business_size'];
//     $business_category = $_POST['business_category'];
//     $business_subCategory = $_POST['business_subCategory'];
//     $business_name = $_POST['business_name'];
//     $currency = $_POST['currency'];
//     $foundedYear = $_POST['foundedYear'];
//     $customer_type = $_POST['customer_type'];
//     $firstName = $_POST['firstname'];
//     $lastName = $_POST['lastname'];
//     $email = $_POST['email'];
//     $phone_no = $_POST['phone_no'];
    
//     // Prepare and bind the SQL statement
//     $sql = "INSERT INTO subscription_form (business_description, business_size, business_category, business_subCategory, business_name, currency, foundedYear, customer_type, firstname, lastname, email, phone_no) 
//     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("ssssssssssss", $business_description, $business_size, $business_category, $business_subCategory, $business_name, $currency, $foundedYear, $customer_type, $firstName, $lastName, $email, $phone_no);

//     // Execute the statement and handle success or error
//     if ($stmt->execute()) {
//         $response = array("success" => true, "message" => "Form has been submitted successfully.");
//         echo json_encode($response);
//     } else {
//         $response = array("success" => false, "message" => "Error: " . $stmt->error);
//         echo json_encode($response);
//     }
//     $stmt->close();
// } else {
//     $response = array("success" => false, "message" => "Error: No POST data received.");
//     echo json_encode($response);
// }

// // Close the database connection
// $conn->close();

// // Set session flag and redirect
// $_SESSION['filled_subscription_form'] = true;
// header('Location: ../customer/login.php');
// exit();
?>
