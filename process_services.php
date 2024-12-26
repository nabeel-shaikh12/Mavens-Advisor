<?php
// Database connection
$host = "localhost";
$db_name = "mavens advisor";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $services = $_POST['services'] ?? [];
    $businessSize = $_POST['business_size'] ?? null;
    $revenue = $_POST['revenue'] ?? null;

    foreach ($services as $service) {
        $serviceName = $service['name'];
        $pricePerHour = $service['price'];
        $hours = $service['hours'];

        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO services_selection (service_name, price_per_hour, hours, business_size, revenue) 
                                VALUES (:service_name, :price_per_hour, :hours, :business_size, :revenue)");
        $stmt->execute([
            ':service_name' => $serviceName,
            ':price_per_hour' => $pricePerHour,
            ':hours' => $hours,
            ':business_size' => $businessSize,
            ':revenue' => $revenue
        ]);
    }

    echo json_encode(["status" => "success", "message" => "Services saved successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
