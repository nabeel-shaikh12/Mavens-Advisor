<?php
include '../db/dbCon.php';
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Validate email format
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Sanitize inputs to prevent XSS
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

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
    $message = '';

    foreach ($fields as $field => $type) {
        if (isset($_POST[$field])) {
            $value = sanitizeInput($_POST[$field]);
            $value = ($value === '') ? null : $value;
            if ($value !== null) { 
                $values[] = $value;
                $columns[] = $field;
                $bind_types .= $type;
                $message .= ucfirst(str_replace('_', ' ', $field)) . ": " . ($value ?? 'N/A') . "\n";
            }
        }
    }

    $email = $_POST['email'] ?? '';
    if (!validateEmail($email)) {
        echo json_encode(["success" => false, "message" => "Invalid email address."]);
        exit();
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
            $firstnames = $_POST['firstnames'] ?? '';
            $token = bin2hex(random_bytes(16));
            $token_expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

            $user_sql = "INSERT INTO user (email_address, user_name, token, token_expiry) VALUES (?, ?, ?, ?)";
            $user_stmt = $conn->prepare($user_sql);

            if (!$user_stmt) {
                die('Error preparing user statement: ' . $conn->error);
            }

            $user_stmt->bind_param('ssss', $email, $firstnames, $token, $token_expiry);

            if ($user_stmt->execute()) {
                $reset_link = "http://localhost/mavens%20advisor/reset_password.php?token=" . $token;
                $subject = "Password Reset";
                $email_message = "Click the link to reset your password: " . $reset_link;

                $mail = new PHPMailer(true);

                try {
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'qaziabdurrahman12@gmail.com';
                    $mail->Password   = 'gzlg vgjt uadi avoq';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    $mail->setFrom('no-reply@mavensadvisor.com', 'Mavens Advisor');
                    $mail->addAddress($email);     
                    $mail->isHTML(true);
                    $mail->Subject = $subject;
                    $mail->Body    = $email_message;

                    if ($mail->send()) {
                        $response = ["success" => true, "message" => "Form has been submitted successfully. A reset link has been sent to your email."];
                    } else {
                        $response = ["success" => false, "message" => "Error: Unable to send email."];
                    }
                } catch (Exception $e) {
                    $response = ["success" => false, "message" => "Mailer Error: {$mail->ErrorInfo}"];
                }

                echo json_encode($response);
            } else {
                $response = ["success" => false, "message" => "Error: " . $user_stmt->error];
                echo json_encode($response);
            }

            $user_stmt->close();
        } else {
            $response = ["success" => false, "message" => "Error: " . $stmt->error];
            echo json_encode($response);
        }

        $stmt->close();
    } else {
        $response = ["success" => false, "message" => "Error: No POST data received."];
        echo json_encode($response);
    }

    if (!empty(trim($message))) { 
        $admin_email = null;
        $msg_sql = "INSERT INTO messages (email_address, admin_email, message) VALUES (?, ?, ?)";
        $msg_stmt = $conn->prepare($msg_sql);

        if (!$msg_stmt) {
            die('Error preparing messages statement: ' . $conn->error);
        }

        $msg_stmt->bind_param('sss', $email, $admin_email, $message);

        if ($msg_stmt->execute()) {
            $msg_response = ["success" => true, "message" => "Message has been stored successfully."];
        } else {
            $msg_response = ["success" => false, "message" => "Error: " . $msg_stmt->error];
        }

        echo json_encode($msg_response);
        $msg_stmt->close();
    }

    $conn->close();
    header('Location: ../index.php');
    exit();
}
?>
