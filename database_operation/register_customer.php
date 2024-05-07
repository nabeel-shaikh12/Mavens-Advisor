<?php
include '../db/dbCon.php';

$fetch_users_sql = "SELECT * FROM user"; // 
$fetch_users_result = $conn->query($fetch_users_sql);

if ($fetch_users_result->num_rows > 0) {
    while ($user = $fetch_users_result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>';
        echo '<div class="form-check custom-checkbox">';
        echo '<input type="checkbox" class="form-check-input" id="customCheckBox' . $user["user_id"] . '" required>';
        echo '<label class="form-check-label" for="customCheckBox' . $user["user_id"] . '"></label>';
        echo '</div>';
        echo '</td>';
        echo '<td><span>' . $user["user_id"] . '</span></td>';
        echo '<td>';
        echo '<div class="products">';
        echo '<div>';
        echo '<h6>' . $user["user_name"] . '</h6>';
        echo '<span>' . $user["email_address"] . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="3">No users found.</td></tr>';
}

$conn->close();
