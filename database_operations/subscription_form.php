<?php
// session_start();
// include '../db/dbCon.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $fields = [
//         'business_description' => 's',
//         'business_subCategory' => 's',
//         'other_specify' => 's',
//         'business_size' => 's',
//         'company_operate_country' => 's',
//         'company_revenue' => 's',
//         'currency' => 's',
//         'yearDropdown' => 's',
//         'customer_type' => 's',
//         'specifyCustomer' => 's',
//         'business_name' => 's',
//         'firstnames' => 's',
//         'email' => 's',
//         'phone_no' => 's',
//         'whichService' => 's',
//         'accounting_software_used' => 's',
//         'softwarePreferred' => 's',
//         'softwareSpecifies' => 's',
//         'numberOfTransaction' => 'i',
//         'numberOfInvoiceInput' => 'i',
//         'numberOfPayroll' => 'i',
//         'noOfExpense' => 'i',
//         'numberOfContractualPayment' => 'i',
//         'transactionPrice' => 'd',
//         'discountTransactionPrice' => 'd',
//         'invoicePrice' => 'd',
//         'discountInvoicePrice' => 'd',
//         'expensePrice' => 'd',
//         'discountExpencePrice' => 'd',
//         'payrollPrice' => 'd',
//         'discountPayrollPrice' => 'd',
//         'cashflowPrice' => 'd',
//         'discountCashflowPrice' => 'd',
//         'budgetPrice' => 'd',
//         'discountBudgetPrice' => 'd',
//         'setupPrice' => 'd',
//         'irsPrice' => 'd',
//         'statePrice' => 'd',
//         'hmrcPrice' => 'd',
//         'companyPrice' => 'd',
//         'contractualPaymentPrice' => 'd',
//         'vatPrice' => 'd',
//         'financialAnalysisPrice' => 'd',
//         'profitPrice' => 'd',
//         'advisoryPrice' => 'd',
//         'totalPrice' => 'd',
//         'discountedPrice' => 'd',
//         'cfo' => 's',
//         'specifyReason' => 's',
//         'otherReason' => 's'
//     ];

//     $columns = [];
//     $values = [];
//     $bind_types = '';

//     foreach ($fields as $field => $type) {
//         if (isset($_POST[$field])) {
//             $values[] = ($_POST[$field] === '') ? null : $_POST[$field];
//             $columns[] = $field;
//             $bind_types .= $type;
//         }
//     }

//     if (count($columns) > 0) {
//         $sql = "INSERT INTO subscription_form (" . implode(", ", $columns) . ") VALUES (" . str_repeat('?, ', count($columns) - 1) . "?)";
//         $stmt = $conn->prepare($sql);

//         if (!$stmt) {
//             die('Error preparing statement: ' . $conn->error);
//         }

//         $params = [];
//         $params[] = &$bind_types;
//         foreach ($values as $key => $value) {
//             $params[] = &$values[$key];
//         }

//         call_user_func_array([$stmt, 'bind_param'], $params);

//         if ($stmt->execute()) {
//             $email = $_POST['email'] ?? '';
//             $firstnames = $_POST['firstnames'] ?? '';

//             // Generate random password
//             function generateRandomPassword($length = 12) {
//                 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//                 $charactersLength = strlen($characters);
//                 $randomPassword = '';
//                 for ($i = 0; $i < $length; $i++) {
//                     $randomPassword .= $characters[rand(0, $charactersLength - 1)];
//                 }
//                 return $randomPassword;
//             }

//             $randomPassword = generateRandomPassword();
//             $hashedPassword = password_hash($randomPassword, PASSWORD_DEFAULT);

//             // Insert into user table with email, username, and password
//             $user_sql = "INSERT INTO user (email_address, user_name, password, confirm_password) VALUES (?, ?, ?, ?)";
//             $user_stmt = $conn->prepare($user_sql);

//             if (!$user_stmt) {
//                 die('Error preparing user statement: ' . $conn->error);
//             }

//             $user_stmt->bind_param('ssss', $email, $firstnames, $hashedPassword, $hashedPassword);

//             if ($user_stmt->execute()) {
//                 $response = array("success" => true, "message" => "Form has been submitted successfully.");
//                 echo json_encode($response);
//             } else {
//                 $response = array("success" => false, "message" => "Error: " . $user_stmt->error);
//                 echo json_encode($response);
//             }

//             $user_stmt->close();
//         } else {
//             $response = array("success" => false, "message" => "Error: " . $stmt->error);
//             echo json_encode($response);
//         }

//         $stmt->close();
//     } else {
//         $response = array("success" => false, "message" => "Error: No POST data received.");
//         echo json_encode($response);
//     }
//     $conn->close();
//     $_SESSION['filled_subscription_form'] = true;
//     header('Location: ../index.php');
//     exit();
// }

session_start();
include '../db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        'firstnames' => 's',
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
        $sql = "INSERT INTO subscription_form (" . implode(", ", $columns) . ") VALUES (" . str_repeat('?, ', count($columns) - 1) . "?)";
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
            $email = $_POST['email'] ?? '';
            $firstnames = $_POST['firstnames'] ?? '';

            // Generate token for password reset
            $token = bin2hex(random_bytes(16));
            $token_expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

            // Insert into user table with email, username, and token
            $user_sql = "INSERT INTO user (email_address, user_name, token, token_expiry) VALUES (?, ?, ?, ?)";
            $user_stmt = $conn->prepare($user_sql);

            if (!$user_stmt) {
                die('Error preparing user statement: ' . $conn->error);
            }

            $user_stmt->bind_param('ssss', $email, $firstnames, $token, $token_expiry);

            if ($user_stmt->execute()) {
                // Send email with reset link
                $reset_link = "http://localhost/mavens%20advisor/.com/reset_password.php?token=" . $token;
                $subject = "Password Reset";
                $message = "Click the link to reset your password: " . $reset_link;
                $headers = "From: no-reply@yourwebsite.com";

                if (mail($email, $subject, $message, $headers)) {
                    $response = array("success" => true, "message" => "Form has been submitted successfully. A reset link has been sent to your email.");
                } else {
                    $response = array("success" => false, "message" => "Error: Unable to send email.");
                }

                echo json_encode($response);
            } else {
                $response = array("success" => false, "message" => "Error: " . $user_stmt->error);
                echo json_encode($response);
            }

            $user_stmt->close();
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
    header('Location: ../index.php');
    exit();
}

?>
