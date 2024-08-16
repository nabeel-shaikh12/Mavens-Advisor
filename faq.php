<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-style-mode" content="1">
  <title>FAQ - VirSME</title>
	<link rel="shortcut icon" type="image/png" href="img/virstual-expert.png">
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
  <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
  <?php include 'components/topbar.php' ?>
  <header class="navigation bg-tertiary">
    <?php include 'components/header.php' ?>
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
    <div class="rainbow-accordion-area rainbow-section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
              <h4 class="subtitle "><span class="theme-gradient">Frequient Questions</span></h4>
              <h2 class="title w-600 mb--20">Frequently Asked Questions</h2>
            </div>
          </div>
        </div>
        <div class="row mt--35 row--20">
          <div class="col-lg-10 offset-lg-1">
            <div class="rainbow-accordion-style  accordion">
              <div class="accordion" id="accordionExamplea">
                <div class="accordion-item card">
                  <h2 class="accordion-header card-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Can I apply if my credit isn&rsquo;t perfect?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExamplea">
                    <div class="accordion-body card-body">
                      The difference between and premium product consist number of
                      components, plugins, page in each. The Free versions contain only a
                      few elements and pages that.
                    </div>
                  </div>
                </div>

                <div class="accordion-item card">
                  <h2 class="accordion-header card-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How do I know that I have been approved?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamplea">
                    <div class="accordion-body card-body">
                      The difference between and premium product consist number of
                      components, plugins, page in each. The Free versions contain only
                      a few elements and pages that.
                    </div>
                  </div>
                </div>

                <div class="accordion-item card">
                  <h2 class="accordion-header card-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Can I get update regularly and For how long do I get updates?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamplea">
                    <div class="accordion-body card-body">
                      The difference between and premium product consist number of
                      components, plugins, page in each. The Free versions contain only
                      a few elements and pages that.
                    </div>
                  </div>
                </div>

                <div class="accordion-item card">
                  <h2 class="accordion-header card-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      How can I run doob html template?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamplea">
                    <div class="accordion-body card-body">
                      You can run doob easily. First You'll need to have node and npm on your
                      machine. So Please open your command prompt then check your node -v and
                      npm -v Version. Goes To Your your command prompt: then First: npm
                      install At Last: npm run start. By the following way you can be run your
                      project easily.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
</body>

</html>