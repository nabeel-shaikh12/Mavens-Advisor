<?php
include '../db/dbCon.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sqlDelete = "DELETE FROM messages WHERE id = ?";
    $stmt = $conn->prepare($sqlDelete);
    $stmt->bind_param('i', $id); 
    
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
        exit(header("Location: chat.php"));   
    } 
    else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete chat']);
    }
} else {
     echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
$conn->close();
?>
