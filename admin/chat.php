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
	<title>Admin Chat</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link href="./vendor/tagify/dist/tagify.css" rel="stylesheet">
	<script src="chat.js"></script>
    <link href="./css/style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div id="main-wrapper">
	<?php include 'components/navHeader.php'?>
	  <?php include 'components/header.php'?>
		  <?php include 'components/sidebar.php'?>
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
										<h6 class="mb-0 mt-2">Admin</h6>
											<span></span>	
										</div>	
									  </div>
								    </div>
								  </div> 
								  <?php
								include '../db/dbCon.php';
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
								$sql = "SELECT * FROM messages WHERE email_address != 'admin@gmail.com' GROUP BY email_address ORDER BY timestamp Desc";
								$result = $conn->query($sql);
								?>
								<div class="row gx-0">
									<div class="col-xl-6 col-lg-6 col-sm-5 chat-border mobile-chat ">
										<div class="people-list dz-scroll" >
											<?php
											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													echo '<hr>';
													echo '<div class="chat-p style-1" data-email="' . $row['email_address'] . '" onclick="fetchChatDetail(\'' . $row['email_address'] . '\')">';
													echo '<div class="d-flex" onclick="toggleMessageSend()">';
													echo '<a href="#" class="delete-btn" data-email="' . $row['email_address'] . '"><i class="delete-btn fas fa-trash-alt mt-2" style="color:red;margin-right:20px"></i></a>';
													echo '<div class="ms-2">';
													echo '<h6 class="mb-0">' . $row['email_address'] . '</h6>';
													echo '<span class="unread-indicator"></span>';
													echo '<span style="font-size:14px"><strong>New Message:</strong> ' . $row['message'] . '<br>' . '</span>';
													echo '</div>';
													echo '</div>';
													echo '<span>' . $row['timestamp'] . '</span>';
													echo '</div>';
													echo '<hr>';
												}
											} else {
												echo "No chats Available";
											}
											$conn->close();
											?>
										</div>
									</div>
									<script>
									$(document).ready(function() {
										$('.delete-btn').click(function() {
											var email = $(this).data('email');
											if (confirm("Are you sure you want to delete all messages for " + email + "?")) {
												$.ajax({
													url: 'delete_chat.php',
													method: 'POST',
													data: { email: email },
													success: function(response) {
														alert(response);
														location.reload();
													},
													error: function(xhr, status, error) {
														console.error(xhr.responseText);
													}
												});
											}
										});
									});
									</script>
							<div class="col-xl-6 col-lg-6 col-sm-7 chat-border" id="chat-detail" > 
								<div id="chat-detail-content">
								</div>
								<div class="message-send style-2" id="messageContainer" style="display:none">
								  <div class="type-massage style-1">
									<form id="messageForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '?email=' . urlencode($user_email); ?>" enctype="multipart/form-data">
							<input type="hidden" name="email" value="<?php echo $user_email; ?>">
							<div class="row">
								<div class="col-md-6 col-xl-6 col-sm-6 col-lg-6 w-100">
									<input type="text" name="message" id="message" class="form-control" placeholder="Type your message here..">
								</div>
								<div class="col-md-4 col-xl-4 col-sm-4 col-lg-4">
									<input type="file" name="file" id="file" class="form-control">
								</div>
								<div class="col-md-2 col-xl-2 col-sm-2 col-lg-2">
									<button type="submit" class="btn btn-primary p-2" id="sendButton" style="margin-top:-40px;">Send
										<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
											<path d="M10.555 5.44976L6.73936 9.30612L2.39962 6.59178C1.77783 6.20276 1.90718 5.25829 2.61048 5.05262L12.9142 2.03518C13.5582 1.84642 14.155 2.44855 13.9637 3.09466L10.9154 13.3912C10.7066 14.0955 9.76747 14.2213 9.38214 13.5968L6.73734 9.3068" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</button>
								</div>
							   </div>
						      </form>
							</div>
					      </div>
						</div>
						<script>
							function toggleMessageSend() {
								var messageSendDiv = document.getElementById("messageContainer");
								messageSendDiv.style.display = "block";
							}
					</script>
					</div>
				  </div>
			<?php include 'components/footer.php'?>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script src="./vendor/global/global.min.js"></script>
			<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
			<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
			<script src="./vendor/apexchart/apexchart.js"></script>
			<script src="./js/custom.js"></script>
			<script src="./js/deznav-init.js"></script>
			<script src="./js/demo.js"></script>
			<script src="./js/styleSwitcher.js"></script>
		<script>
	var intervalId; 
	var previousMessages = '';

	function fetchChatDetail(emailAddress) {
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4) {
				if (xhr.status == 200) {
					var currentMessages = xhr.responseText;
					if (currentMessages !== previousMessages) { 
						document.getElementById("chat-detail-content").innerHTML = currentMessages;
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

			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4) {
					if (xhr.status == 200) {
						fetchChatDetail(emailAddress); 
						document.getElementById("message").value = '';
						document.getElementById("file").value = '';
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
		}, 10000);
	}
function checkForNewMessages() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            if (response.trim() !== "") {
                document.getElementById("popup-dot").style.display = "block";
            }
        }
    };
    xhttp.open("GET", "fetch_messages.php", true);
    xhttp.send();
}

function handleDotClick() {
    document.getElementById("popup-dot").style.display = "none";
}

checkForNewMessages();
setInterval(checkForNewMessages, 5000);
document.getElementById("popup-dot").addEventListener("click", handleDotClick);
</script>
</body>
</html>