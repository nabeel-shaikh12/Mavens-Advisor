<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> 
    <title>Login || Finance</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/MA Logo circle.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="page-wrapper">
      <?php include 'components/topbar.php'?>
      <?php include 'components/header.php'?>
      <?php include 'components/sidebar.php'?>
       <div class="rainbow-prfile-area rainbow-section-gap">
        <div class="container">
         <div class="row gy-5 row--30">
          <div class="col-lg-12">
            <div class="edu-contact-form contact-form-style-1 w-100">
              <div class="section-title">
                <h2 class="title w-600 mb--40">Register</h2>
              </div>
            <form id="contact-form" class="w-100" action="./database_operations/user_process.php" method="POST">
             <div class="form-group position-relative">
               <label>Email address *</label>
                <input name="email_address" type="email" required placeholder="Enter Email address">
                <span class="focus-border"></span>
             </div>
            <div class="form-group position-relative">
                <label>Username *</label>
                <input name="user_name" type="text" required placeholder="User name">
                <span class="focus-border"></span>
            </div>
            <div class="form-group position-relative">
                <label>Password *</label>
                <input name="password" type="password" required placeholder="password">
                <span class="focus-border"></span>
            </div>
            <div class="form-group position-relative">
                <label>Confirm Password *</label>
                <input name="confirm_password" type="password" required placeholder="password">
                <span class="focus-border"></span>
            </div>
            <div class="form-submit-group">
             <div class="row">
              <div class="col-md-6">
                <button type="submit" class="btn-default btn-large w-100">Sign Up <i class="feather-arrow-right"></i></button>
              </div>
             <div class="col-md-6">
                <a class="btn-default btn-large w-100" href="login.php">Sign in 
                 <i class="feather-arrow-right"></i>
                </a>
                 </div>
                </div>
                <br>
                <?php if(isset($error)): ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                    <p style="color: red;"><?php echo $message; ?></p>
                <?php endif; ?>
                </div>
                </form>
               </div>
              </div>
             </div>
            </div>
           </div>
        </div>
        <?php include 'components/footer.php'?>
        <?php include 'components/footerBottom.php'?>
    </main>
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>