
<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
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
	<title>Register</title>
	<link rel="shortcut icon" type="image/png" href="../img/MA Logo circle.png">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body class="vh-100" style="background-image:url('images/bg.png'); background-position:center;"">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="./database_operations/user_process.php" method="POST">
                                    <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email_address" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="user_name" class="form-control" placeholder="username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                        <?php if(isset($error)): ?>
                                        <p style="color: red;"><?php echo $error; ?></p>
                                        <p style="color: red;"><?php echo $message; ?></p>

                                    <?php endif; ?>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="page-login.html">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="./vendor/global/global.min.js"></script>
<script src="./js/custom.js"></script>
<script src="./js/deznav-init.js"></script>
</body>
</html>