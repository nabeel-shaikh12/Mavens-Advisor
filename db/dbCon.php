<?php
$servername = "localhost";
$username = "u402019268_dbroot";
$password = "3JKu=Ku$oB";
$dbname = "u402019268_advisor";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
