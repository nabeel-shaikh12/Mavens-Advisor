<?php
require_once 'db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch data from POST request
    $business_name = $_POST['business_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $selected_services = isset($_POST['selected_services']) ? json_encode($_POST['selected_services']) : '[]';
    $business_size = $_POST['business_size'] ?? '';
    $total_hours = $_POST['total_hours'] ?? 0;
    $total_cost = $_POST['total_cost'] ?? 0.0;
    $additional_info = $_POST['additional_info'] ?? null;

    // Validate required fields
    if (empty($business_name) || empty($email) || empty($business_size)) {
        echo json_encode(['status' => 'error', 'message' => 'Required fields are missing']);
        exit;
    }

    // Prepare SQL query
    $query = "INSERT INTO user_submissions 
                (business_name, email, selected_services, business_size, total_hours, total_cost, additional_info, created_at)
              VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare statement']);
        exit;
    }

    // Bind parameters
    $stmt->bind_param(
        "ssssids",
        $business_name,
        $email,
        $selected_services,
        $business_size,
        $total_hours,
        $total_cost,
        $additional_info
    );

    // Execute query
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
