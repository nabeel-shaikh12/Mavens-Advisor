<?php
include '../db/dbCon.php';

$sql = "SELECT s.*, a.username, a.email FROM subscription_form s 
        INNER JOIN admin a ON s.email = a.email";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Description</th><th>Size</th><th>Category</th><th>Name</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Username</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["business_description"] . "</td>";
        echo "<td>" . $row["business_size"] . "</td>";
        echo "<td>" . $row["business_category"] . "</td>";
        echo "<td>" . $row["business_name"] . "</td>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone_no"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
