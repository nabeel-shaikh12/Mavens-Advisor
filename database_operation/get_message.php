<?php
include '../db/dbCon.php';

$sql = "SELECT * FROM messages ORDER BY timestamp DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['message'] . "</p>";
    }
} else {
    echo "No messages found";
}
$conn->close();
