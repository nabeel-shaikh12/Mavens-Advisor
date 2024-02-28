<?php
include('database_connection.php');
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
?>
<html>  
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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="./vendor/tagify/dist/tagify.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
		<link href="./css/style.css" rel="stylesheet">
    </head>  
    <body>  
	<?php include 'components/navHeader.php'?>
	  <?php include 'components/header.php'?>
		  <?php include 'components/sidebar.php'?>
		  <div class="content-body">
        <div class="container">
			<br />
			<h3 align="center">Chat Application</h3><br />
			<br />
			<?php
			include '../db/dbCon.php';
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT * FROM chat_message  WHERE from_user_email != 'admin@gmail.com' GROUP BY from_user_email ORDER BY timestamp DESC";
			$result = $conn->query($sql);
			?>
			<div class="row gx-0">
				<div class="col-xl-6 col-lg-6 col-sm-5 chat-border mobile-chat chat-left-area">
					<div class="people-list dz-scroll">
						<?php
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								echo '<div class="chat-p style-1" data-email="' . $row['from_user_email'] . '" onclick="fetchChatDetail(\'' . $row['to_user_email'] . '\')">';
								echo '<div class="d-flex">';
								echo '<img src="../img/user-image.png" class="avatar avatar-lg rounded-circle" alt="">';
								echo '<div class="ms-2">';
								echo '<h6 class="mb-0">' . $row['from_user_email'] . '</h6>';
								echo '<span class="unread-indicator"></span>';
								echo '<span style="font-size:14px"><strong>New Message:</strong> ' . $row['chat_message'] . '<br>' . '</span>';
								echo '</div>';
								echo '</div>';
								echo '<span>' . $row['timestamp'] . '</span>';
								echo '</div>';
							}
						} else {
							echo "No chats Available";
						}
						$conn->close();
						?>
					</div>
				</div>
			</div>
			<br />
			<br />
			
		</div>
		  </div>
		
    </body>  
</html>
<style>
    .container {
        padding: 20px;
    }
    .chat-box {
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }
    .chat-message {
        width: 100%;
        height: 80px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        resize: none; 
    }
    .send-button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    .send-button:hover {
        background-color: #0056b3;
    }
</style>


<?php

$email = $_SESSION['email'];
?>
<div id="group_chat_dialog" title="<?php echo $email?>">
	<div id="group_chat_history" style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;">

	</div>
	<div class="form-group">
		<!--<textarea name="group_chat_message" id="group_chat_message" class="form-control"></textarea>!-->
		<div class="chat_message_area">
			<div id="group_chat_message" contenteditable class="form-control">

			</div>
			<div class="image_upload">
				<form id="uploadImage" method="post" action="upload.php">
					<label for="uploadFile"><img src="upload.png" /></label>
					<input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
				</form>
			</div>
		</div>
	</div>
	<div class="form-group" align="right">
		<button type="button" name="send_group_chat" id="send_group_chat" class="btn btn-info">Send</button>
	</div>
</div>
<script>  
$(document).ready(function(){

// Fetching user details and updating chat history every 5 seconds
fetch_user();
setInterval(function(){
	update_last_activity();
	fetch_user();
	update_chat_history_data();
	fetch_group_chat_history();
}, 5000);

// Function to fetch user details
function fetch_user() {
	$.ajax({
		url:"fetch_user.php",
		method:"POST",
		success:function(data){
			$('#user_details').html(data);
		}
	})
}

// Function to update last activity
function update_last_activity() {
	$.ajax({
		url:"update_last_activity.php",
		success:function() {

		}
	})
}
// Function to make chat dialog box
function make_chat_dialog_box(to_user_id, email) {
    // Chat dialog content
    var modal_content = '<div style="margin-top:-100px" id="user_dialog_'+to_user_id+'" class="user_dialog" title="Chat with '+email+'">';
    modal_content += '<div data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
    modal_content += fetch_user_chat_history(to_user_id); // Fetch chat history for the selected user
    modal_content += '</div>';
    modal_content += '<div class="form-group">';
    modal_content += '<textarea name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control chat_message"></textarea>';
    modal_content += '</div><div class="form-group" align="right">';
    modal_content += '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
    $('#user_model_details').html(modal_content); // Set the chat dialog content in the modal
}

// Function to open the chat model when a user clicks on an email
function openChatModel(email) {
    $.ajax({
        url: 'fetch_messages.php', // Update with your endpoint to fetch messages
        method: 'POST',
        data: { email: email },
        success: function(response) {
            $('#chatModelContent').html(response); // Update chat model content with fetched messages
            $('#chatModel').modal('show'); // Show the chat model
        },
        error: function(xhr, status, error) {
            console.error('Error fetching messages:', error);
        }
    });
}

// Open the chat dialog when the document is ready
$('#group_chat_dialog').dialog({
	autoOpen:true, // Open the dialog by default
	width:400
});

	function fetch_user_chat_history(to_user_id)
	{
		$.ajax({
			url:"fetch_user_chat_history.php",
			method:"POST",
			data:{to_user_id:to_user_id},
			success:function(data){
				$('#chat_history_'+to_user_id).html(data);
			}
		})
	}

	function update_chat_history_data()
	{
		$('.chat_history').each(function(){
			var to_user_id = $(this).data('touserid');
			fetch_user_chat_history(to_user_id);
		});
	}

	$(document).on('click', '.ui-button-icon', function(){
		$('.user_dialog').dialog('destroy').remove();
		$('#is_active_group_chat_window').val('no');
	});

	$(document).on('focus', '.chat_message', function(){
		var is_type = 'yes';
		$.ajax({
			url:"update_is_type_status.php",
			method:"POST",
			data:{is_type:is_type},
			success:function()
			{

			}
		})
	});
	$(document).on('blur', '.chat_message', function(){
		var is_type = 'no';
		$.ajax({
			url:"update_is_type_status.php",
			method:"POST",
			data:{is_type:is_type},
			success:function()
			{
				
			}
		})
	});

	$('#group_chat_dialog').dialog({
		autoOpen:false,
		width:400
	});

	$('#group_chat').click(function(){
		$('#group_chat_dialog').dialog('open');
		$('#is_active_group_chat_window').val('yes');
		fetch_group_chat_history();
	});

	$('#send_group_chat').click(function(){
		var chat_message = $.trim($('#group_chat_message').html());
		var action = 'insert_data';
		if(chat_message != '')
		{
			$.ajax({
				url:"group_chat.php",
				method:"POST",
				data:{chat_message:chat_message, action:action},
				success:function(data){
					$('#group_chat_message').html('');
					$('#group_chat_history').html(data);
				}
			})
		}
		else
		{
			alert('Type something');
		}
	});

	function fetch_group_chat_history()
	{
		var group_chat_dialog_active = $('#is_active_group_chat_window').val();
		var action = "fetch_data";
		if(group_chat_dialog_active == 'yes')
		{
			$.ajax({
				url:"group_chat.php",
				method:"POST",
				data:{action:action},
				success:function(data)
				{
					$('#group_chat_history').html(data);
				}
			})
		}
	}

	$('#uploadFile').on('change', function(){
		$('#uploadImage').ajaxSubmit({
			target: "#group_chat_message",
			resetForm: true
		});
	});

	$(document).on('click', '.remove_chat', function(){
		var chat_message_id = $(this).attr('id');
		if(confirm("Are you sure you want to remove this chat?"))
		{
			$.ajax({
				url:"remove_chat.php",
				method:"POST",
				data:{chat_message_id:chat_message_id},
				success:function(data)
				{
					update_chat_history_data();
				}
			})
		}
	});
	
});  
</script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/apexchart/apexchart.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
    <script src="./js/styleSwitcher.js"></script> -->
	<script src="./js/demo.js"></script>
    <script src="./js/deznav-init.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/apexchart/apexchart.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
    <script src="./js/styleSwitcher.js"></script> 


