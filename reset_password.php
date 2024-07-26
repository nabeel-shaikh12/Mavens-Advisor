<?php
session_start();
include './db/dbCon.php';
require './vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = sanitizeInput($_POST['token']);
    $new_password = sanitizeInput($_POST['new_password']);
    $confirm_password = sanitizeInput($_POST['confirm_password']);

    if (empty($token) || empty($new_password) || empty($confirm_password)) {
        echo json_encode(array("success" => false, "message" => "All fields are required."));
        exit();
    }

    if ($new_password !== $confirm_password) {
        echo json_encode(array("success" => false, "message" => "Passwords do not match."));
        exit();
    }

    // Validate token and check its expiry
    $sql = "SELECT email_address, token_expiry FROM user WHERE token = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die('Error preparing statement: ' . $conn->error);
    }

    $stmt->bind_param('s', $token);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        echo json_encode(array("success" => false, "message" => "Invalid or expired token."));
        exit();
    }

    $stmt->bind_result($email, $token_expiry);
    $stmt->fetch();

    if (strtotime($token_expiry) < time()) {
        echo json_encode(array("success" => false, "message" => "Token has expired."));
        exit();
    }

    // Update password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $update_sql = "UPDATE user SET password = ?, token = NULL, token_expiry = NULL WHERE email_address = ?";
    $update_stmt = $conn->prepare($update_sql);

    if (!$update_stmt) {
        die('Error preparing update statement: ' . $conn->error);
    }

    $update_stmt->bind_param('ss', $hashed_password, $email);
    
    if ($update_stmt->execute()) {
        header('Location: ./customer/login.php');
        exit();
    } else {
        echo json_encode(array("success" => false, "message" => "Error: " . $update_stmt->error));
    }
    

    $update_stmt->close();
    $stmt->close();
    $conn->close();
    exit();
}

// Function to sanitize input
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

?>

<?php
// session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> 
    <title>Reset || Password</title>
	<link rel="shortcut icon" type="image/png" href="img/virstual-expert.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="page-wrapper">
      <?php include 'components/topbar.php'?>
       <?php include 'components/header.php'?>
       <?php include 'components/sidebar.php'?>
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
<body>
<div style="display: flex; justify-content: center; align-items: center; height: 50vh;">
    <div class="container">
        <form method="post" action="reset_password.php">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
            
            <label for="new_password">New Password:</label>
            <input style="width: 100%; padding:10px;" type="password" name="new_password" id="new_password" required>
            <br>
            
            <label for="confirm_password">Confirm Password:</label>
            <input style="width: 100%; padding:10px;" type="password" name="confirm_password" id="confirm_password" required>
            <br>
            
            <button style="font-size:17px" class="btn btn-danger mt-3" type="submit">Reset Password</button>
        </form>
    </div>
</div>


</body>
</html>
<script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/main.js"></script>