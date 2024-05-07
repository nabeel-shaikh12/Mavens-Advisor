<?php
include '../db/dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        $sql = "DELETE FROM messages WHERE email_address = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo "All messages for $email deleted successfully.";
            exit(); // No need for redirection here
        } else {
            echo "Error deleting messages: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Email parameter is not set.";
    }
}

$conn->close();
