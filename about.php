<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <title>About - VirSME</title>
    <link rel="shortcut icon" type="image/png" href="img/virstual-expert.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
        <div class="about-bg d-flex justify-content-center align-items-center">
            <div class="text-center">
                <p class="text-white" style="font-size: 20px;"><a class="text-white" href="./index"> Home</a> / About</p>
            </div>
        </div>
        <div class="container rainbow-section-gap">
            <div class="row">
                <div class="col-md-6">
                    <img src="./img/about-edit.png">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div>
                        <h3 style="margin-left:20px;font-weight:500">Our Business is Your life Making Easier & Comfortable</h3>
                        <p style="margin-left:20px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo maecenas accumsan lacus vel facilisis.
                        </p>
                        <ul style="list-style: none;">
                            <li style="font-weight:bold" class="zoom-hover"><i class="fa fa-arrow-right" style="color:#0b7ffe;font-weight:bold"></i> Innovative Working Activities</li>
                            <li style="font-weight:bold" class="zoom-hover"><i class="fa fa-arrow-right" style="color:#0b7ffe;font-weight:bold !Important"></i> 100% Guarantee Issued for Client</li>
                            <li style="font-weight:bold" class="zoom-hover"><i class="fa fa-arrow-right" style="color:#0b7ffe;font-weight:bold !Important"></i> Dedicated Team Member</li>
                            <li style="font-weight:bold" class="zoom-hover"><i class="fa fa-arrow-right" style="color:#0b7ffe;font-weight:bold !Important"></i> Safe & Secure Environment</li>
                        </ul>
                        <button class="gradient-button ml-3" style="font-size:15px;border-radius:40px;margin-left:20px">More About Us</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container rainbow-section-gap">
            <div class="section-title text-center">
                <span class="sp-title" style="color: #0b7ffe;">Project</span>
                <h2>Our Team</h2>
            </div>
            <div class="project-slider owl-carousel owl-theme pt-45">
                <div class="project-item">
                        <img src="./img/project-img1.jpg" alt="Project Images">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="content" style="width: 90%;margin-top:-30px">
                            <h4 style="font-weight:500;font-size:20px">Project Management</h4>
                            <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="project-item w-100">
                            <img src="./img/project-img1.jpg" alt="Project Images">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="content" style="width: 90%;margin-top:-30px">
                                <h4 style="font-weight:500;font-size:20px">Project Management</h4>
                                <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-item">
                        <img src="./img/project-img1.jpg" alt="Project Images">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="content" style="width: 90%;margin-top:-30px">
                            <h4 style="font-weight:500;font-size:20px">Project Management</h4>
                            <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed</p>
                        </div>
                    </div>
                </div>
                <div class="project-item">
                        <img src="./img/project-img1.jpg" alt="Project Images">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="content" style="width: 90%;margin-top:-30px">
                            <h4 style="font-weight:500;font-size:20px">Project Management</h4>
                            <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed</p>
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
    <script>
        document.getElementById("showMoreAdeel").onclick = function() {
            var moreContent = document.getElementById("moreContentAdeel");
            if (moreContent.style.display === "none") {
                moreContent.style.display = "inline";
                this.textContent = "Show less";
            } else {
                moreContent.style.display = "none";
                this.textContent = "Show more";
            }
        };

        document.getElementById("showMoreNabeel").onclick = function() {
            var moreContent = document.getElementById("moreContentNabeel");
            if (moreContent.style.display === "none") {
                moreContent.style.display = "inline";
                this.textContent = "Show less";
            } else {
                moreContent.style.display = "none";
                this.textContent = "Show more";
            }
        };
    </script>
</body>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".project-slider").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            },
            navText: ["<i class='flaticon-arrow-pointing-to-left'></i>", "<i class='flaticon-arrow-pointing-to-right'></i>"]
        });
    });
</script>
</html>