<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-style-mode" content="1">
  <title>Contact - VirSME</title>
  <link rel="shortcut icon" type="image/png" href="img/virstual-expert.png">
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animation.css">
  <link rel="stylesheet" href="assets/css/plugins/feature.css">
  <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
  <main class="page-wrapper">
    <?php include 'components/topbar.php' ?>
    <?php include 'components/header.php' ?>
    <?php include 'components/sidebar.php' ?>
    <div>
      <div class="rainbow-gradient-circle"></div>
      <div class="rainbow-gradient-circle theme-pink"></div>
    </div>
    <div class="main-content">
      <div class="contact-bg d-flex justify-content-center align-items-center">
        <div class="text-center">
          <p class="text-white" style="font-size: 20px;"><a class="text-white" href="./index"> Home</a> / Contact</p>
        </div>
      </div>
      <div class="rainbow-contact-area rainbow-section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mb--40">
              <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <h4 class="subtitle "><span class="theme-gradient">Contact Form</span></h4>
                <h2 class="title w-600 mb--20">Our Contact Address Here.</h2>
              </div>
            </div>
          </div>
          <div class="row row--15">
            <div class="col-lg-12">
              <div class="rainbow-contact-address mt_dec--30">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-12">
                    <div class="rainbow-address">
                      <div class="icon">
                        <i class="feather-headphones"></i>
                      </div>
                      <div class="inner">
                        <h4 class="title">Contact Phone Number</h4>
                        <p><a href="#">+44 7441 441789</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12">
                    <div class="rainbow-address">
                      <div class="icon">
                        <i class="feather-mail"></i>
                      </div>
                      <div class="inner">
                        <h4 class="title">Our Email Address</h4>
                        <p><a href="mailto:admin@gmail.com">info@virSME.com</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12">
                    <div class="rainbow-address">
                      <div class="icon">
                        <i class="feather-map-pin"></i>
                      </div>
                      <div class="inner">
                        <h4 class="title">Our Location</h4>
                        <p>Detroit, Michigan, United States</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt--40 row--15">
            <div class="col-lg-7">
              <form method="POST" action="contactFormProcess.php">
                <div class="form-group">
                  <input type="text" placeholder="Full Name" id="full_name" name="full_name">
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Email" id="email_address" name="email_address">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6Lft5qMpAAAAAKRdw5GXssVzFGo8Nl_kDS0ild-B">
                  </div>
                </div>
                <div class="form-group">
                  <input class="gradient-button mt-3" style="font-size:15px;border-radius:40px" type="submit">
                </div>

                <?php if (isset($_GET['error']) && !empty($_GET['error'])) : ?>
                  <p style="color: red; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $_GET['error']; ?></p>
                <?php endif; ?>
                <?php if (isset($_GET['message']) && !empty($_GET['message'])) : ?>
                  <p style="color: #0b7ffe; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $_GET['message']; ?></p>
                <?php endif; ?>
              </form>
            </div>
            <div class="col-lg-5 mt_md--30 mt_sm--30">
              <div class="google-map-style-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14554259.179133086!2d-105.54385245388013!3d37.49334218664659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1630777307491!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php include 'components/footer.php' ?>
    <?php include 'components/footerBottom.php' ?>
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>