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
    <!-- <?php include 'components/topbar.php' ?> -->
    <?php include 'components/header.php' ?>
    <?php include 'components/sidebar.php' ?>
    <div>
      <div class="rainbow-gradient-circle"></div>
      <div class="rainbow-gradient-circle theme-pink"></div>
    </div>
    <div class="main-content">
      <div class="slider-area slider-style-1 bg-transparent variation-2 height-750">
        <div class="container particles_css mt-5 mb-5">
          <div class="row" style="display:flex;justify-content:center;align-items:center">
            <div class="col-lg-7"  data-sal="slide-right" data-sal-duration="1000" data-sal-delay="500">
              <div class="bgContact">
                <img src="img/man.png" class="bgImgContact" style="border-radius:15px" alt="Banner Images">
              </div>
            </div>
            <div class="col-lg-5"  data-sal="slide-left" data-sal-duration="1000" data-sal-delay="500">
              <div class="inner text-left ">
                <h1 class="display-two mob-1" style="font-size:35px; font-weight:900; font-family:sans-serif;font-weight:bold">
                  <b>CONTACT <span style="color:#0b7ffe">US</span></b>
                </h1>
                <div class="row">
                  <div class="col-md-6">
                    <h5 class="contactTitle">ADDRESS <br></h5>
                    <p style="color: black; margin-top:-10px; font-size:13px">Detroit, Michigan, United States</p>
                  </div>
                  <div class="col-md-6">
                    <div class="inner">
                      <h5 class="contactTitle">PHONE <br></h5>
                      <p style="color: black; margin-top:-10px; font-size:13px">+1 619 612 8944</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="inner">
                      <h5 class="contactTitle">EMAIL <br></h5>
                      <p style="color: black; margin-top:-10px; font-size:13px">info@virsme.com</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h5 class="contactTitle">WORK HOURS <br></h5>
                    <p style="color: black; margin-top:-10px; font-size:13px;">Weekdays: 9:00 - 17:00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="rainbow-contact-area rainbow-section-gap">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
              <h2 class="display-two mob-1" style="font-size:32px; font-weight:bolder !important;margin-top:-23px">
                <span style="font-weight: 200; font-size:12px;color:black">GET IN TOUCH</span><br>Explain To You How All This Mistaken Idea
              </h2>
              <p style="font-size: 12px;color:black">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one , but because those who do not know how to pursue.
                <br>idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the or desires to.
              </p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188705.91888215818!2d-83.41066912377171!3d42.352543296629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824ca0110cb1d75%3A0x5776864e35b9c4d2!2sDetroit%2C%20MI%2C%20USA!5e0!3m2!1sen!2s!4v1705939842784!5m2!1sen!2s" width="600" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="500">
              <div class="contact_div">
                <div class="form-div">
                  <form method="POST" action="contactFormProcess.php">
                    <div class="form-group mb-4 pb-2">
                      <input type="text" class="form-control" style="border-radius:30px;border-color:#DEDEDE; color:white !important; border-width:1px;" placeholder="Full Name" id="full_name" name="full_name">
                    </div>
                    <div class="form-group mb-4 pb-2">
                      <input type="email" class="form-control" style="border-radius:30px;border-color:#DEDEDE; color:white !important; border-width:1px;" placeholder="Email" id="email_address" name="email_address">
                    </div>
                    <div class="form-group mb-4 pb-2">
                      <textarea class="form-control" placeholder="Message" id="message" name="message" class="display-two" style="border-radius:30px;border-width:1px;background:transparent;border-color:white; border-color:#DEDEDE; color:white !important;opacity:1" rows="3"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-md-7 mt-4 col-sm-7 col-xl-7 col-lg-7 g-recaptcha" data-sitekey="6Lft5qMpAAAAAKRdw5GXssVzFGo8Nl_kDS0ild-B">

                      </div>
                      <div class="col-md-2 col-lg-2 col-sm-2 col-xl-2"></div>
                      <div class="col-md-3 col-sm-3 col-xl-3 col-lg-5">
                        <input class="btn btn-primary w-100" style="border-radius:30px;font-size:12px;" type="submit">

                      </div>
                    </div>
                    <?php if (isset($_GET['error']) && !empty($_GET['error'])) : ?>
                      <p style="color: red; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $_GET['error']; ?></p>
                    <?php endif; ?>
                    <?php if (isset($_GET['message']) && !empty($_GET['message'])) : ?>
                      <p style="color: #0b7ffe; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $_GET['message']; ?></p>
                    <?php endif; ?>
                    <br>
                    </div>
                  </form>
                </div>
              </div>
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
  <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
  <script src="assets/js/vendor/jquery.style.swicher.js"></script>
  <script src="assets/js/vendor/js.cookie.js"></script>
  <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>