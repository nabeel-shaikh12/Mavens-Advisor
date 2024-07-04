<?php
include '../db/dbCon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($new_password === $confirm_password) {
        $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

        $sql = "UPDATE user SET password = ?, confirm_password = ? WHERE token = ? AND token_expiry > NOW()";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die('Error preparing statement: ' . $conn->error);
        }

        $stmt->bind_param('sss', $hashedPassword, $hashedPassword, $token);

        if ($stmt->execute()) {
            echo "Password has been updated successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Passwords do not match.";
    }

    $conn->close();
} else {
    $token = $_GET['token'] ?? '';

    if ($token) {
        echo '
        <form action="reset_password.php" method="post">
            <input type="hidden" name="token" value="' . htmlspecialchars($token) . '">
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" required>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required>
            <button type="submit">Reset Password</button>
        </form>';
    } else {
        echo "Invalid token.";
    }
}
?>
