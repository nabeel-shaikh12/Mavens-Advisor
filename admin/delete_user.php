<?php
include '../db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id = $id";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: ./registered_user");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
} else {
    echo "Invalid request.";
}
$conn->close();
