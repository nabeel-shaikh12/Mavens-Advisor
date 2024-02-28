<?php
include '../db/dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $subscription_id = $_GET["id"];

    $delete_sql = "DELETE FROM subscription_form WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $subscription_id);

    if ($stmt->execute()) {
        header("Location: subscriptionForm.php");
        exit();
    } else {
        echo "Error deleting subscription entry: " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
