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
	<title>Contact Form Data</title>
	<link rel="shortcut icon" type="image/png" href="../img/MA Logo circle.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="./vendor/jvmap/jquery-jvectormap.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="./vendor/tagify/dist/tagify.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<style>
  /* .message-column {
        max-width: 300px; /* Adjust the maximum width as needed */
        overflow: hidden;
        word-wrap: break-word; /* Allow the text to wrap within the column */
    } */
</style>
<body>
<div id="main-wrapper">
	<?php include 'components/navHeader.php'?>
	<?php include 'components/header.php'?>
	<?php include 'components/sidebar.php'?>
	<div class="content-body">
    <div class="container-fluid">
        <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects task-table">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Contact Form Data</h4>
									</div>
									<table id="empoloyeestbl2" class="table">
									<thead>
										<tr>
											<th></th>
											<th>Id</th>
											<th>Full Name</th>
											<th>Email</th>
											<th>Message</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
									<?php
									include '../db/dbCon.php';
									$fetch_users_sql = "SELECT * FROM contact_form";
									$fetch_users_result = $conn->query($fetch_users_sql);
									if ($fetch_users_result->num_rows > 0) {
										while ($user = $fetch_users_result->fetch_assoc()) {
											echo '<tr>';
											echo '<td>';
											echo '<div class="form-check custom-checkbox">';
											echo '<input type="checkbox" class="form-check-input" id="customCheckBox' . $user["id"] . '" required>';
											echo '<label class="form-check-label" for="customCheckBox' . $user["id"] . '"></label>';
											echo '</div>';
											echo '</td>';
											echo '<td>' . $user["id"] . '</td>';
											echo '<td>' . $user["full_name"] . '</td>';
											echo '<td>' . $user["email_address"] . '</td>';
											echo '<td style="font-size:2px">' . $user["message"] . '</div>' . '</td>'; // Apply word-wrap property to the message column
											echo '<td> <a class="btn btn-danger" href="delete_contactForm.php?id=' . $user["id"] . '">Delete</a> </td>';
											echo '</tr>';
										}
									} else {
										echo '<tr><td colspan="7">No users found.</td></tr>';
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
	</div>
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
</body>
</html>