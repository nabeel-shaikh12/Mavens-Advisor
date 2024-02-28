<?php
include '../db/dbCon.php';

$message = $_POST['message'];

$sql = "INSERT INTO messages (message) VALUES ('$message')";
$result = $conn->query($sql);

if ($result) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
