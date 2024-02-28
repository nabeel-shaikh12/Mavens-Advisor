<?php
session_start();
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">	
	<title>Edit Subscription</title>
	<link rel="shortcut icon" type="image/png" href="../img/MA Logo circle.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="./vendor/jvmap/jquery-jvectormap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="./vendor/tagify/dist/tagify.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">
<?php include 'components/navHeader.php'?>
	<?php include 'components/header.php'?>
	<?php include 'components/sidebar.php'?>
	<div class="content-body">
	<div class="container-fluid">
<div class="col-xl-12">
    <?php
    include '../db/dbCon.php';
    if(isset($_GET['id'])) {
        $subscription_id = $_GET['id'];
        $fetch_subscription_sql = "SELECT * FROM subscription_form WHERE id = $subscription_id";
        $fetch_subscription_result = $conn->query($fetch_subscription_sql);

        if ($fetch_subscription_result->num_rows > 0) {
            $subscription_data = $fetch_subscription_result->fetch_assoc();
            $business_description = $subscription_data["business_description"];
            $business_size = $subscription_data["business_size"];
            $business_category = $subscription_data["business_category"];
        } else {
            echo 'Subscription not found.';
            exit;
        }
    } else {
        echo 'Subscription ID not provided.';
        exit;
    }
    $conn->close();
    ?>
    <form action="update_subscription.php" method="POST">
        <label for="business_description">Business Description:</label>
        <input type="text" id="business_description" name="business_description" value="<?php echo $business_description; ?>">
        <label for="business_description">Business Size:</label>
        <input type="text" id="business_size" name="business_size" value="<?php echo $business_size; ?>">
        <label for="business_description">Business Name:</label>
        <input type="text" id="business_name" name="business_name" value="<?php echo $business_name; ?>">
        <label for="business_description">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $firstname;?>">
        <label for="business_description">Last Name:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $lastname;?>">
        <label for="business_description">phone_no:</label>
        <input type="text" id="phone_no" name="phone_no" value="<?php echo $phone_no;?>">
        <label for="business_description">updated_date:</label>
        <input type="text" id="updated_date" name="updated_date" value="<?php echo $updated_date;?>">
        <input type="submit" value="Update">
    </form>
    <?php include 'components/footer.php'?>
</body>
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/tagify/dist/tagify.js"></script>
	<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="./vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="./vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="./vendor/datatables/js/jszip.min.js"></script>
	<script src="./js/plugins-init/datatables.init.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./js/demo.js"></script>
    <script src="./js/styleSwitcher.js"></script>