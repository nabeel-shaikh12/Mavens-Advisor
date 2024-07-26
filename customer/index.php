<?php
session_start();
include 'config.php';
if (!isset($_SESSION['email_address'])) {
	if (isset($_GET['code'])) {
		$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
		if (isset($token['access_token'])) {
			$google_client->setAccessToken($token["access_token"]);
			$googleService = new Google_Service_Oauth2($google_client);
			$data = $googleService->userinfo->get();

			$_SESSION['email_address'] = $data['email'];
			$_SESSION['login'] = true;
			$_SESSION['userimage'] = $data['picture'];


			if (isset($_SESSION['filled_subscription_form'])) {
				unset($_SESSION['filled_subscription_form']);
				$_SESSION['login_message'] = "Login to Continue";
				header('Location: ../chat.php');
				exit();
			} else {
				header('Location: ../customer/index.php');
				exit();
			}
		} else {
			echo "Error fetching access token.";
			exit();
		}
	}
	header('Location: login.php');
	exit();
}
if (isset($_POST['logout'])) {
	$_SESSION = array();
	session_destroy();
	$google_client->revokeToken();
	header("Location: login.php");
	exit();
}
$user_email = $_SESSION['email_address'];
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
	<title>Chat</title>
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
	<script src="chat.js"></script>
	<style>
		.file-input-container {
			position: relative;
			display: inline-block;
			vertical-align: middle;
			width: 100%;
		}

		.file-label {
			display: inline-block;
			padding: 10px;
			background-color: #007bff;
			color: #fff;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="file"] {
			display: none;
			margin-top: 10px;
		}

		.col-md-3,
		.col-md-2 {
			margin-top: 10px;
		}

		.write {
			bottom: 29px;
			left: 30px;
			height: 50px;
			padding-left: 8px;
			border: 1px solid var(--light);
			background-color: #eceff1;
			display: flex;
			width: calc(100% - 58px);
			border-radius: 5px;
		}

		.write .input-group {
			display: flex;
			align-items: center;
			width: 100%;
		}

		.write input[type="text"] {
			flex-grow: 1;
			font-size: 16px;
			height: 40px;
			padding: 0 30px;
			color: var(--dark);
			border: 0;
			outline: none;
			background-color: #eceff1;
		}

		.write input[type="file"] {
			display: none;
		}

		.write .write-link {
			float: left;
			height: 42px;
		}

		.write .write-link.attach:before {
			content: '';
			display: inline-block;
			width: 20px;
			height: 42px;
			background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/attachment.png');
			background-repeat: no-repeat;
			background-position: center;
		}

		.write .write-link.send:before {
			content: '';
			display: inline-block;
			width: 20px;
			height: 42px;
			margin-left: 11px;
			background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/send.png');
			background-repeat: no-repeat;
			margin-right: 20px;
			background-position: center;
		}

		.style-1.active {
			background-color: #019dff;
			color: white;
			padding: 20px;
			border-radius: 20px;
		}
	</style>
</head>

<body>
	<?php include 'components/preloader.php' ?>
	<div id="main-wrapper">
		<?php include 'components/navHeader.php' ?>
		<?php include 'components/chatbox.php' ?>
		<?php include 'components/header.php' ?>
		<?php include 'components/sidebar.php' ?>
		<div class="content-body">
			<div class="container-fluid">
				<div class="row gx-0">
					<div class="col-xl-12">
						<div class="card overflow-hidden">
							<div class="card-body p-0">
								<div class="chat-p shaprate">
									<div class="d-flex">
										<img src="../img/user-2-image.png" class="avatar avatar-lg  rounded-circle" alt="">
										<div class="ms-2">
											<?php
											echo '<h6 class="mb-0 mt-2">' . $user_email . '</h6>';
											?>
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<?php
							include '../db/dbCon.php';
							if (!isset($_SESSION['email_address'])) {
								header('Location: login.php');
								exit();
							}
							$user_email = $_SESSION['email_address'];
							$sql = "SELECT id, admin_email, email_address, message, timestamp FROM messages 
							WHERE email_address = '$user_email' ORDER BY timestamp DESC LIMIT 1;";
							$result = $conn->query($sql);
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
							?>
							<div class="row gx-0">
								<div class="col-xl-5 col-lg-5 col-sm-5 chat-border mobile-chat ">
									<div class="people-list dz-scroll">
										<?php
										        if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc()) {
														echo '<div onclick="toggleMessageSend()">';
														echo '<div class="chat-p style-1" data-email="' . $row['email_address'] . '" onclick="fetchChatDetail(\'' . $row['email_address'] . '\')" >';
														echo '<div class="d-flex" onclick="toggleMessageSend()">';
														echo '<div class="avatar text-light rounded-circle d-flex align-items-center justify-content-center" style="background-color:#E8EBF0">';
														echo '<i class="fas fa-user"></i>';
														echo '</div>';
														echo '<div class="ms-2">';
														
														// Check if the message is sent to admin
														if ($row['admin_email'] == $user_email) {
															echo '<h6 class="mb-0">Message sent to Admin</h6>';
														} else {
															echo '<h6 class="mb-0">' . $row['email_address'] . '</h6>';
														}
														
														echo '<span style="font-size:14px"><strong>New Message:</strong> ' . $row['message'] . '<br>' . '</span>';
														echo '</div>';
														echo '</div>';
														echo '<span>' . $row['timestamp'] . '</span>';
														echo '</div>';
														echo '</div>';
													}
												} else {
													// Display a button to send new message if no chats available
													echo '<button type="button" class="btn-send-message" data-bs-toggle="modal" data-bs-target="#newMessageModal">';
													echo '<i class="fas fa-pencil-alt"></i> Send New Message';
													echo '</button>';
												}
												$conn->close();
										// if ($result->num_rows > 0) {
										// 	while ($row = $result->fetch_assoc()) {
										// 		echo '<div onclick="toggleMessageSend()">';
										// 		echo '<div class="chat-p style-1" data-email="' . $row['email_address'] . '" onclick="fetchChatDetail(\'' . $row['email_address'] . '\')" >';
										// 		echo '<div class="d-flex" onclick="toggleMessageSend()">';
										// 		echo '<div class="avatar text-light rounded-circle d-flex align-items-center justify-content-center" style="background-color:#E8EBF0">';
										// 		echo '<i class="fas fa-user"></i>';
										// 		echo '</div>';
										// 		echo '<div class="ms-2">';
										// 		echo '<h6 class="mb-0">info@mavensadvisor.com</h6>';
										// 		echo '<span style="font-size:14px"><strong>New Message:</strong> ' . $row['message'] . '<br>' . '</span>';
										// 		echo '</div>';
										// 		echo '</div>';
										// 		echo '<span>' . $row['timestamp'] . '</span>';
										// 		echo '</div>';
										// 		echo '</div>';
										// 	}
										// } else if ($result->num_rows == 0) {
										// 	echo '<button type="button" class="btn-send-message" data-bs-toggle="modal" data-bs-target="#newMessageModal">';
										// 	echo '<i class="fas fa-pencil-alt"></i> Send New Message';
										// 	echo '</button>';
										// } else {
										// 	echo "No chats Available";
										// }
										// $conn->close();
										?>
									</div>
								</div>
								<div class="modal fade" id="newMessageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">New Message</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<form action="send_message.php" method="POST" id="newMessageForm">
												<div class="modal-body">
													<input type="hidden" name="email" value="<?php echo $user_email; ?>">
													<div class="mb-3">
														<label for="message" class="form-label">Message</label>
														<textarea class="form-control" name="message" required></textarea>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Send Message</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 chat-border" id="chat-detail">
									<div id="chat-detail-content">
									</div>
									<div class="write" style="margin: 10px; display: none;" id="messageContainer">
										<form id="messageForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '?email=' . urlencode($user_email); ?>" enctype="multipart/form-data">
											<input type="hidden" name="email" value="<?php echo $user_email; ?>">
											<div class="input-group">
												<a href="javascript:;" class="write-link attach" onclick="document.getElementById('file').click(); return false;"></a>
												<input type="text" name="message" id="message" class="form-control" placeholder="Type your message here.." />
												<input type="file" name="file" id="file" style="display: none;">
												<button type="submit" class="write-link send border-0" id="sendButton"></button>
											</div>
											<!-- <div id="imagePreviewContainer"></div>  -->
										</form>
									</div>
								</div>
							</div>
							<script>
								function toggleMessageSend() {
									var messageSendDiv = document.getElementById("messageContainer");
									if (messageSendDiv.style.display === "none") {
										messageSendDiv.style.display = "block";
									} else {
										messageSendDiv.style.display = "none";
										messageSendDiv.style.display = "block";
									}
								}
							</script>
							<script>
								var intervalId;
								var previousMessages = '';

								function fetchChatDetail(emailAddress) {
									var chatDetailContent = document.getElementById("chat-detail-content");
									var previousScrollHeight = chatDetailContent.scrollHeight;

									var xhr = new XMLHttpRequest();
									xhr.onreadystatechange = function() {
										if (xhr.readyState == 4) {
											if (xhr.status == 200) {
												var currentMessages = xhr.responseText;
												if (currentMessages !== previousMessages) {
													chatDetailContent.innerHTML = currentMessages;
													var scrollHeightDifference = chatDetailContent.scrollHeight - previousScrollHeight;

													if (scrollHeightDifference > 0) {
														chatDetailContent.scrollTop += scrollHeightDifference;
													}

													setupSendMessageListener(emailAddress);
													previousMessages = currentMessages;
												}
											} else {
												console.error("Error fetching chat details. Status code: " + xhr.status);
											}
										}
									};
									var encodedEmailAddress = encodeURIComponent(emailAddress);
									xhr.open("GET", "fetch_messages.php?email=" + encodedEmailAddress, true);
									xhr.send();
								}
								function setupSendMessageListener(emailAddress) {
									var sendMessageForm = document.getElementById("messageForm");
									sendMessageForm.onsubmit = function(e) {
										e.preventDefault();
										var message = document.getElementById("message").value;
										var fileInput = document.getElementById("file").files[0];

										var formData = new FormData();
										formData.append('email', emailAddress);
										formData.append('message', message);
										formData.append('file', fileInput);

										var chatDetailContent = document.getElementById("chat-detail-content");
										var scrollPos = chatDetailContent.scrollHeight - chatDetailContent.clientHeight;

										var xhr = new XMLHttpRequest();
										xhr.onreadystatechange = function() {
											if (xhr.readyState == 4) {
												if (xhr.status == 200) {
													fetchChatDetail(emailAddress);
													document.getElementById("message").value = '';
													document.getElementById("file").value = '';
													chatDetailContent.scrollTop = scrollPos;
												} else {
													console.error("Error sending message. Status code: " + xhr.status);
												}
											}
										};
										xhr.open("POST", "send_message.php", true);
										xhr.send(formData);
									};
									clearInterval(intervalId);
									intervalId = setInterval(function() {
										fetchChatDetail(emailAddress);
									}, 1000);
								}
							</script>
							<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
							<script src="./vendor/global/global.min.js"></script>
							<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
							<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
							<script src="./vendor/apexchart/apexchart.js"></script>
							<script src="./js/custom.js"></script>
							<script src="./js/deznav-init.js"></script>
							<script src="./js/demo.js"></script>
							<script src="./js/styleSwitcher.js"></script>
						</html>