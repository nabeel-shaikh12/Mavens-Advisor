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
	<title>Registerd User</title>
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
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects task-table">
                <div class="tbl-caption">
                    <h4 class="heading mb-0">Subscription Form Data</h4>
                </div>
                <table id="empoloyeestbl2" class="table">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Business Description</th>
                          <th>Business Size</th>
                          <th>Business Category</th>
                          <th>Business Name</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Updated Date</th>
                          <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                         include '../db/dbCon.php'; 
                         $fetch_subscription_sql = "SELECT * FROM subscription_form";
                         $fetch_subscription_result = $conn->query($fetch_subscription_sql);
                         if ($fetch_subscription_result->num_rows > 0) {
                            while ($subscription_data = $fetch_subscription_result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $subscription_data["id"] . '</td>';
                                echo '<td>' . $subscription_data["business_description"] . '</td>';
                                echo '<td>' . $subscription_data["business_size"] . '</td>';
                                echo '<td>' . $subscription_data["business_category"] . '</td>';
                                echo '<td>' . $subscription_data["business_name"] . '</td>';
                                echo '<td>' . $subscription_data["firstname"] . '</td>';
                                echo '<td>' . $subscription_data["lastname"] . '</td>';
                                echo '<td>' . $subscription_data["email"] . '</td>';
                                echo '<td>' . $subscription_data["phone_no"] . '</td>';
                                echo '<td>' . $subscription_data["updated_date"] . '</td>';
                                echo '<td>';
                                echo '<a class="btn btn-danger" href="form_delete.php?id=' . $subscription_data["id"] . '">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                            else 
                            {
                                echo '<tr><td colspan="10">No subscription data found.</td></tr>';
                            }
                        $conn->close(); 
                        ?>
               </tbody>
              </table>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
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
</html>
