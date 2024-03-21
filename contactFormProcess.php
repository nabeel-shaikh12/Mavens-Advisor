<?php
include './db/dbCon.php';

$message = $error = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email_address = $_POST['email_address'];
    $message_text = $_POST['message'];

    $sql = "INSERT INTO contact_form (full_name, email_address, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $full_name, $email_address, $message_text);

    if ($stmt->execute()) {
      $message = "Message sent successfully.";
      header('location: contact.php');
      exit();
    } else {
      $error = "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
} else {
    $error = "Error: Form submission method not allowed.";
}
?>
