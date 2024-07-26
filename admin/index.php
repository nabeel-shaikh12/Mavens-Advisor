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

include '../db/dbCon.php';

$sql = "SELECT `count` FROM visit_count";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$visitCount = $row['count'];
} else {
	$visitCount = 0;
}

$sql2 = "SELECT `count` FROM visit_count_subscription";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$result2 = $stmt2->get_result();

if ($result2 && $result2->num_rows > 0) {
	$row2 = $result2->fetch_assoc();
	$visitCountSubscription = $row2['count'];
} else {
	$visitCountSubscription = 0;
}

$sql3 = "SELECT COUNT(*) as total FROM subscription_form";
$stmt3 = $conn->prepare($sql3);
$stmt3->execute();
$result3 = $stmt3->get_result();

if ($result3 && $result3->num_rows > 0) {
	$row3 = $result3->fetch_assoc();
	$formSubmission = $row3['total'];
} else {
	$formSubmission = 0;
}

$sql4 = "SELECT COUNT(DISTINCT email_address) as total FROM messages";
$stmt4 = $conn->prepare($sql4);
$stmt4->execute();
$result4 = $stmt4->get_result();

if ($result4 && $result4->num_rows > 0) {
	$row4 = $result4->fetch_assoc();
	$totalChatsOpen = $row4['total'];
} else {
	$totalChatsOpen = 0;
}
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
	<title>Dashboard - VirSME</title>
	<link rel="shortcut icon" type="image/png" href="../img/virstual-expert.png">
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

<body>
	<div id="main-wrapper">
		<?php include 'components/navHeader.php' ?>
		<?php include 'components/header.php' ?>
		<?php include 'components/sidebar.php' ?>
		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="icon-box icon-box-lg bg-success-light rounded-circle">
										<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9715 29.3168C15.7197 29.3168 9.52686 30.4132 9.52686 34.8043C9.52686 39.1953 15.6804 40.331 22.9715 40.331C30.2233 40.331 36.4144 39.2328 36.4144 34.8435C36.4144 30.4543 30.2626 29.3168 22.9715 29.3168Z" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9714 23.0537C27.7304 23.0537 31.5875 19.1948 31.5875 14.4359C31.5875 9.67694 27.7304 5.81979 22.9714 5.81979C18.2125 5.81979 14.3536 9.67694 14.3536 14.4359C14.3375 19.1787 18.1696 23.0377 22.9107 23.0537H22.9714Z" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="total-projects ms-3">
										<?php
										echo '<h3 class="text-success count">' . $visitCount . '</h3>';
										?>
										<span class="text-success count">Calculator Visit</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="icon-box icon-box-lg bg-primary-light rounded-circle">
										<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M32.8961 26.5849C34.1612 26.5849 35.223 27.629 35.0296 28.8783C33.8947 36.2283 27.6026 41.6855 20.0138 41.6855C11.6178 41.6855 4.8125 34.8803 4.8125 26.4862C4.8125 19.5704 10.0664 13.1283 15.9816 11.6717C17.2526 11.3579 18.5553 12.252 18.5553 13.5605C18.5553 22.4263 18.8533 24.7197 20.5368 25.9671C22.2204 27.2145 24.2 26.5849 32.8961 26.5849Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M41.1733 19.2019C41.2739 13.5059 34.2772 4.32428 25.7509 4.48217C25.0877 4.49402 24.5568 5.04665 24.5272 5.70783C24.3121 10.3914 24.6022 16.4605 24.764 19.2118C24.8134 20.0684 25.4864 20.7414 26.341 20.7907C29.1693 20.9526 35.4594 21.1736 40.0759 20.4749C40.7035 20.3802 41.1634 19.8355 41.1733 19.2019Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>

									</div>
									<div class="total-projects ms-3">
										<?php echo '<h3 class="text-primary count">' . $visitCountSubscription . '</h3>' ?>
										<span class="text-primary count">Subscription form Visit</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="icon-box icon-box-lg bg-purple-light rounded-circle">
										<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9717 41.0539C22.9717 41.0539 37.3567 36.6983 37.3567 24.6908C37.3567 12.6814 37.878 11.7439 36.723 10.5889C35.5699 9.43391 24.858 5.69891 22.9717 5.69891C21.0855 5.69891 10.3736 9.43391 9.21863 10.5889C8.0655 11.7439 8.58675 12.6814 8.58675 24.6908C8.58675 36.6983 22.9717 41.0539 22.9717 41.0539Z" stroke="#BB6BD9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M26.4945 26.4642L19.4482 19.4179" stroke="#BB6BD9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M19.4487 26.4642L26.495 19.4179" stroke="#BB6BD9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="total-projects ms-3">
										<?php
										echo '<h3 class="text-purple count">' . $formSubmission . '</h3>';
										?>
										<span>People Who Submit the form</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="icon-box icon-box-lg bg-danger-light rounded-circle">
										<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M34.0396 20.974C36.6552 20.6065 38.6689 18.364 38.6746 15.6471C38.6746 12.9696 36.7227 10.7496 34.1633 10.3296" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M37.4912 27.262C40.0243 27.6407 41.7925 28.5276 41.7925 30.3557C41.7925 31.6139 40.96 32.4314 39.6137 32.9451" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.7879 28.0373C16.7616 28.0373 11.6147 28.9504 11.6147 32.5973C11.6147 36.2423 16.7297 37.1817 22.7879 37.1817C28.8141 37.1817 33.9591 36.2779 33.9591 32.6292C33.9591 28.9804 28.846 28.0373 22.7879 28.0373Z" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M22.7876 22.8325C26.742 22.8325 29.9483 19.6281 29.9483 15.6719C29.9483 11.7175 26.742 8.51123 22.7876 8.51123C18.8333 8.51123 15.627 11.7175 15.627 15.6719C15.612 19.6131 18.7939 22.8194 22.7351 22.8325H22.7876Z" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M11.5344 20.974C8.91691 20.6065 6.90504 18.364 6.89941 15.6471C6.89941 12.9696 8.85129 10.7496 11.4107 10.3296" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M8.0825 27.262C5.54937 27.6407 3.78125 28.5276 3.78125 30.3557C3.78125 31.6139 4.61375 32.4314 5.96 32.9451" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="total-projects ms-3">
										<!-- <h3 class="text-danger count">5,855k</h3>  -->
										<?php
										echo '<h3 class="text-danger count">' . $totalChatsOpen . '</h3>';
										?>

										<span>Total Chats Open</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects task-table">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Registered Customer</h4>
									</div>
									<table id="empoloyeestbl2" class="table">
										<thead>
											<tr>
												<th></th>
												<th>Id</th>
												<th>Name</th>
												<th>Email</th>
												<th>Password</th>
												<th>Confirm Password</th>
											</tr>
										</thead>
										<tbody>
											<?php
											include '../db/dbCon.php';
											$fetch_users_sql = "SELECT * FROM user";
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
													echo '<td>' . $user["user_name"] . '</td>';
													echo '<td>' . $user["email_address"] . '</td>';
													echo '<td>' . $user["password"] . '</td>';
													echo '<td>' . $user["confirm_password"] . '</td>';
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
					<div class="col-xl-6">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects task-table">
									<div class="tbl-caption  ">
										<div class="row">
											<div class="col-md-9">
												<h4 class="heading mb-0">Subscription Form Data</h4>
											</div>
											<div class="col-md-3 " style="margin-top:-4px;">
												<a href="./subscriptionForm"><button class="btn btn-primary">More Info</button></a>
											</div>
										</div>
										<br>
										<table id="empoloyeestbl2" class="table">
											<thead>
												<tr>
													<th>ID</th>
													<th>Business Description</th>
													<th>Business Sub Category</th>
													<th>Other Specify</th>
													<th>Business Size</th>
													<th>Company Operate Country</th>
													<th>Company Revenue</th>
													<th>Currency</th>
													<th>Founded Year</th>
													<th>Business Name</th>
													<th>Customer Type</th>
													<th>First Name</th>
													<th>Email</th>
													<th>Phone Number</th>
													<th>Service Selected</th>
													<th>Accounting Software Used</th>
													<th>Preferred Software</th>
												</tr>
											</thead>
											<tbody>
												<?php
												include '../db/dbCon.php';
												$fetch_subscription_sql = "SELECT * FROM subscription_form LIMIT 4";
												$fetch_subscription_result = $conn->query($fetch_subscription_sql);
												if ($fetch_subscription_result->num_rows > 0) {
													while ($subscription_data = $fetch_subscription_result->fetch_assoc()) {
														echo '<tr>';
														echo '<td>' . $subscription_data["id"] . '</td>';
														echo '<td>' . $subscription_data["business_description"] . '</td>';
														echo '<td>' . $subscription_data["business_subCategory"] . '</td>';
														echo '<td>' . $subscription_data["other_specify"] . '</td>';
														echo '<td>' . $subscription_data["business_size"] . '</td>';
														echo '<td>' . $subscription_data["company_operate_country"] . '</td>';
														echo '<td>' . $subscription_data["company_revenue"] . '</td>';
														echo '<td>' . $subscription_data["currency"] . '</td>';
														echo '<td>' . $subscription_data["yearDropdown"] . '</td>';
														echo '<td>' . $subscription_data["business_name"] . '</td>';
														echo '<td>' . $subscription_data["customer_type"] . '</td>';
														echo '<td>' . $subscription_data["firstnames"] . '</td>';
														echo '<td>' . $subscription_data["email"] . '</td>';
														echo '<td>' . $subscription_data["phone_no"] . '</td>';
														echo '<td>' . $subscription_data["whichService"] . '</td>';
														echo '<td>' . $subscription_data["accounting_software_used"] . '</td>';
														echo '<td>' . $subscription_data["softwarePreferred"] . '</td>';
														echo '</tr>';
													}
												} else {
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
					<div style="margin-top:800px">
						<?php include 'components/footer.php' ?>
					</div>
					<script src="./vendor/global/global.min.js"></script>
					<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
					<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
					<script src="./vendor/apexchart/apexchart.js"></script>
					<script src="./js/dashboard/dashboard-1.js"></script>
					<script src="./vendor/draggable/draggable.js"></script>
					<script src="./vendor/swiper/js/swiper-bundle.min.js"></script>
					<script src="./vendor/tagify/dist/tagify.js"></script>
					<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
					<script src="./vendor/datatables/js/dataTables.buttons.min.js"></script>
					<script src="./vendor/datatables/js/buttons.html5.min.js"></script>
					<script src="./vendor/datatables/js/jszip.min.js"></script>
					<script src="./js/plugins-init/datatables.init.js"></script>
					<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
					<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
					<script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
					<script src="./vendor/jqvmap/js/jquery.vmap.world.js"></script>
					<script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
					<script src="./js/custom.js"></script>
					<script src="./js/deznav-init.js"></script>
					<script src="./js/demo.js"></script>
					<script src="./js/styleSwitcher.js"></script>



</body>

</html>