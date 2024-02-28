
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
    <style>
        @media only screen and (max-width: 767px){
        a.btn-default.btn-large, button.btn-default.btn-large, div.btn-default.btn-large {
            margin-top:5px;
        }
    }
    </style>
</head>
<body>
    <main class="page-wrapper">
      <?php include 'components/topbar.php'?>
      <?php include 'components/header.php'?>
      <?php include 'components/sidebar.php'?>
        <div class="rainbow-prfile-area rainbow-section-gap">
            <div class="container ">
                <div class="row gy-5 row--30">
                    <div class="col-lg-12 ">
                        <div class="edu-contact-form contact-form-style-1 w-100">
                            <div class="section-title">
                                <h2 class="title w-600 mb--40">Login</h2>
                            </div>
                            <form id="contact-form" class="w-100" method="POST" action="./database_operations/login_process.php">
                            <div class="form-group position-relative">
                                <label>Username or email *</label>
                                <input name="email_address" type="text">
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group position-relative">
                                <label>Password *</label>
                                <input name="password" type="password" required placeholder="Password">
                                <span class="focus-border"></span>
                            </div>

                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="edu-checkbox">
                                        <input type="checkbox" id="rememberme" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="edu-lost-password text-end">
                                        <a class="btn-read-more" href="#"><span>Lost your password?</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-submit-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn-default btn-large w-100" name="login">Sign in <i class="feather-arrow-right"></i></button>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn-default btn-large w-100" href="register.php">Sign up <i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                                <?php if(isset($_SESSION['error_message'])): ?>
                                <p style="color: red;"><?php echo $_SESSION['error_message']; ?></p>
                                <?php unset($_SESSION['error_message']); ?> <!-- Clear the error message after displaying -->
                            <?php endif; ?>
                            </div>
                        </form>

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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('click', function () {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePassword.classList.toggle('fa-eye-slash');
            });
        });
    </script>
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