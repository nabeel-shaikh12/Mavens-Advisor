<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> 
    <title>Home || Finance</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/MA Logo circle.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'components/topbar.php'?>
  <header class="navigation bg-tertiary">

    <?php include 'components/header.php'?>
</header>
<div>
      <div class="rainbow-gradient-circle"></div>
      <div class="rainbow-gradient-circle theme-pink"></div>
</div>
<section class="rainbow-section-gap">
<div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!" method="post">
          <div class="row">
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_amount" class="form-label">Amount</label>
                <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_how_long_for" class="form-label">How long for?</label>
                <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
              </div>
            </div>
            <div class="col-lg-12 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_repayment" class="form-label">Repayment</label>
                <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control shadow-none" id="loan_full_name">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_email_address" class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none" id="loan_email_address">
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
          <h1>Frequently Asked Questions</h1>
        </div>
      </div>
    </div>
    <div class="row justify-content-center" style="background-color:transparent">
      <div class="col-lg-9" style="background-color:transparent">
        <div class="accordion accordion-border-bottom" id="accordionFAQ" style="background-color:transparent">
          <div class="accordion-item" style="background-color:transparent">
            <h2 class="accordion-header accordion-button h5 border-0 active display-two"
              id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
              aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Can I apply if my credit isn&rsquo;t
              perfect?
            </h2>
            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
              class="accordion-collapse collapse border-0 show"  style="background-color:transparent"
              aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content">The difference between and premium product consist number of
                components, plugins, page in each. The Free versions contain only a few elements and pages that.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "  style="background-color:transparent"
              id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
              aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">How do I know that I have been approved?
            </h2>
            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content">The difference between and premium product consist number of
                components, plugins, page in each. The Free versions contain only a few elements and pages that.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0"
              id="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" aria-expanded="false"
              aria-controls="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd">Do I need to fax or email any documents?
            </h2>
            <div id="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content">The difference between and premium product consist number of
                components, plugins, page in each. The Free versions contain only a few elements and pages that.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0"
              id="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" aria-expanded="false"
              aria-controls="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3">Do you provide loans to military
              personnel?
            </h2>
            <div id="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content">The difference between and premium product consist number of
                components, plugins, page in each. The Free versions contain only a few elements and pages that.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-0c2f829793a1f0562fea97120357dd2d43319164" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-0c2f829793a1f0562fea97120357dd2d43319164" aria-expanded="false"
              aria-controls="collapse-0c2f829793a1f0562fea97120357dd2d43319164">Can I remove footer credit purchase ?
            </h2>
            <div id="collapse-0c2f829793a1f0562fea97120357dd2d43319164" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-0c2f829793a1f0562fea97120357dd2d43319164" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content">The difference between and premium product consist number of
                components, plugins, page in each. The Free versions contain only a few elements and pages that.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header accordion-button h5 border-0 "
              id="heading-8fe6730e26db16f15763887c30a614caa075f518" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapse-8fe6730e26db16f15763887c30a614caa075f518" aria-expanded="false"
              aria-controls="collapse-8fe6730e26db16f15763887c30a614caa075f518">What is the difference the free
              versions?
            </h2>
            <div id="collapse-8fe6730e26db16f15763887c30a614caa075f518" class="accordion-collapse collapse border-0 "
              aria-labelledby="heading-8fe6730e26db16f15763887c30a614caa075f518" data-bs-parent="#accordionFAQ">
              <div class="accordion-body py-0 content">The difference between and premium product consist number of
                components, plugins, page in each. The Free versions contain only a few elements and pages that.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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