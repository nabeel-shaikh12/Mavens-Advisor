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
$error = "";
$message = "";

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

$admin_id = null;
if (!empty($email)) {
    $sql = "SELECT id,profile_image FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $admin_id = $row['id'];
        $profile_image = $row['profile_image'];

    } else {
        $error = "User not found.";
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_profile"])) {
    if ($admin_id) {
        $new_user_name = $_POST["username"];
        $new_email_address = $_POST["email"];
        
        if(isset($_FILES['profile_picture']) && !empty($_FILES['profile_picture']['tmp_name'])) {
            $upload_dir = "profile_pictures/";

            $file_name = uniqid() . '_' . basename($_FILES["profile_picture"]["name"]);
            
            $target_file = $upload_dir . $file_name;
            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                $profile_image = $target_file;
            } else {
                $error = "Error uploading image.";
            }
        }
        $update_query = "UPDATE admin SET username = ?, email = ?, profile_image = ? WHERE id = ?" ;
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("sssi", $new_user_name, $new_email_address, $profile_image, $admin_id);
 
        if ($stmt->execute()) {
            $_SESSION['username'] = $new_user_name;
            $_SESSION['email'] = $new_email_address;
            $message = "Profile updated successfully.";
        } else {
            $error = "Error updating user data: " . $conn->error;
        }
        $stmt->close();
    } else {
        $error = "User ID not found.";
    }
}
$conn->close();
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
	<title>Customer Chat</title>
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
<body>
<?php include 'components/preloader.php'?>
     <div id="main-wrapper">
	  <?php include 'components/navHeader.php'?>
	   <?php include 'components/chatbox.php'?>
	    <?php include 'components/header.php'?>
	     <?php include 'components/sidebar.php'?>
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="clearfix">
							<div class="card card-bx profile-card author-profile m-b30">
								<div class="card-body">
									<div class="p-5">
										<div class="author-profile">
                                        <div class="author-profile">
                                        <div class="author-media">
                                            <?php if (!empty($profile_image)) : ?>
                                                <img src="<?php echo $profile_image; ?>" alt="Profile Picture">
                                            <?php else : ?>
                                                <img src="images/user.jpg" alt="Default Profile Picture">
                                            <?php endif; ?>
                                            <div class="upload-link" title="Update" data-toggle="tooltip" data-placement="right">
											<form method="POST" action="" class="profile-form" enctype="multipart/form-data">
												<div class="upload-link">
                                                <input type="file" name="profile_picture">
                                                <input type="submit" name="update_profile" class="btn btn-primary">
												<i class="fa fa-camera"></i>
												</div>
                                            </div>
                                        </div>
                                        <div class="author-info">
                                            <h6 class="title"><?php echo $email?></h6>
                                            <span>Admin</span>
                                        </div>
                                    </div>
                                </div>
									</div>
									<div class="info-list">
										<ul>
											<li><a href="app-profile.html">Models</a><span>36</span></li>
											<li><a href="uc-lightgallery.html">Gallery</a><span>3</span></li>
											<li><a href="app-profile.html">Lessons</a><span>1</span></li>
										</ul>
									</div>
								</div>
								<div class="card-footer">
									<div class="input-group mb-3">
										<div class="form-control text-center bg-white">Portfolio</div>
									</div>
								</div>
                              </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="card profile-card card-bx m-b30">
                                <div class="card-header">
                                    <h6 class="title">Account setup</h6>
							    </div>
								<div class="card-body">
									<div class="row">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($admin_id); ?>">
                                    <div class="row">
                                        <div class="col-sm-12 m-b30">
                                            <label class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                                        </div>
                                        <div class="col-sm-12 m-b30">
                                            <label class="form-label">Email Address</label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                                        </div>
                                        <div class="col-sm-12 m-b30">
                                            <button class="btn btn-primary" type="submit" name="update_profile">Save Changes</button>
                                            <a href="page-register.html" class="btn-link">Forgot your password?</a>
                                        </div>
                                    </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
        <?php include 'components/footer.php'?>
	</div>
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./js/demo.js"></script>
    <script src="./js/styleSwitcher.js"></script>
</body>
</html>