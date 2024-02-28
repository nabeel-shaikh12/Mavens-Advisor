<?php
// session_start();
// if (!isset($_SESSION['email'])) {
//     header('Location: login.php');
//     exit();
// } 
// if (isset($_POST['logout'])) {
//     $_SESSION = array();
//     session_destroy();
//     header("Location: login.php");
//     exit; 
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="Yeshadmin:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="https://yeshadmin.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<title>Edit User</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="./vendor/tagify/dist/tagify.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<?php
session_start();
include '../db/dbCon.php';

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
} 
if (isset($_POST['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
    exit; 
}

$error = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $user_name = $_POST["user_name"];
    $email_address = $_POST["email_address"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (!empty($user_name) || !empty($email_address) || !empty($password)) {
        $update_query = "UPDATE user SET ";
        $update_fields = array();
        $bind_types = "";
        $bind_params = array();

        if (!empty($user_name)) {
            $update_fields[] = "user_name = ?";
            $bind_types .= "s";
            $bind_params[] = $user_name;
        }
        if (!empty($email_address)) {
            $update_fields[] = "email_address = ?";
            $bind_types .= "s";
            $bind_params[] = $email_address;
        }
        if (!empty($password) && $password === $confirm_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $update_fields[] = "password = ?";
            $bind_types .= "s";
            $bind_params[] = $hashed_password;
        }

        $update_query .= implode(", ", $update_fields);
        $update_query .= " WHERE id = ?";
        $bind_types .= "i";
        $bind_params[] = $id;

        $stmt = $conn->prepare($update_query);
        $stmt->bind_param($bind_types, ...$bind_params);

        if ($stmt->execute()) {
            $message = "User data updated successfully.";
            header("Location: registered_user.php");
            exit();
        } else {
            $error = "Error updating user data: " . $conn->error;
        }
    } else {
        $error = "No fields provided for update.";
    }
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $user_name = $row['user_name'];
        $email_address = $row['email_address'];
    } else {
        $error = "User not found. Please provide a valid user ID.";
    }
    $stmt->close();
} else {
    $error = "Invalid request. Please provide a valid user ID.";
}
$conn->close();
?>
  <body>
  <div id="main-wrapper">
	<?php include 'components/navHeader.php'?>
	  <?php include 'components/header.php'?>
		  <?php include 'components/sidebar.php'?>
			<div class="content-body">
			  <div class="container-fluid">
                <h1>Edit User</h1>
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">User Name:</label>
                        <input type="text" id="user_name" name="user_name" class="form-control" value="<?php echo $user_name; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_address" class="form-label">Email Address:</label>
                        <input type="email" id="email_address" class="form-control" name="email_address" value="<?php echo $email_address; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" class="form-control" name="password" value="<?php echo $hashed_password; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password:</label>
                        <input type="password" id="confirm_password" class="form-control" name="confirm_password" value="<?php echo $hashed_confirm_password; ?>">
                    </div>
                    <input type="submit" value="Save Changes" class="btn btn-primary">
                </form>
                <?php
                if (!empty($error)) {
                    echo '<p>Error: ' . $error . '</p>';
                } elseif (!empty($message)) {
                    echo '<p>' . $message . '</p>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	</div>
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/apexchart/apexchart.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./js/demo.js"></script>
    <script src="./js/styleSwitcher.js"></script>