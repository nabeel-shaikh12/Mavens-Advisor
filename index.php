<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <title>Home - VirSME</title>
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
    <style>
        .overlapping-image {
            width: 500% !important;
            height: 400px !important;
            object-fit: auto !important;
            margin-left: -10%;
        }

        @media (max-width: 768px) {
            .overlapping-image {
                width: 100%;
                height: 200px !important;
                margin-left: 0;
                background-position: center;
            }
        }
    </style>
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
        <div class="slider-style-1 bg-transparent variation-2 height-750 particles_css rainbow-section-gap">
            <div class="container">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="500">
                        <br>
                        <br>
                        <h1 class="display-two mob-1" style="font-size:40px; font-weight:900;">
                            Empower Growth with <span style="color:#0b7ffe">Virsme's</span> Virtual CFO Services!
                        </h1>
                        <p class="description text-md" style="font-size:12px; color:black;">
                            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.
                        </p>
                        <a href="./form"><button class="gradient-button" style="font-size:15px;border-radius:40px"><span> Get Subscription Now <i class="icon feather-arrow-right"></i></span></button></a>
                    </div>
                    <div class="col-md-8" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="500">
                        <img src="./img/midground.png" alt="Image description" class="overlapping-image">
                    </div>

                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="rainbow-service-area slider-area rainbow-section-gap">
            <div class="container">
                <div class="row  d-flex flex-column flex-md-row" style="justify-content: start !important;">
                    <div class="col-lg-3">
                        <div class="section-title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
                            <h2 class="title w-600 mb--20" style="font-size:35px; font-weight:bolder !important;margin-top:-23px">We're Motivated By The Desire To Achieve.</h2>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.</p>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
                                <div class="service service__style--2" style="border-radius:25px">
                                    <div class="inner">
                                        <div class="image">
                                            <a href="./form"><img src="./img/img1.PNG" alt="card Images" class="rounder-lg"></a>
                                        </div>
                                        <div class="content">
                                            <h4 class="title text-center">
                                                <a href="./form" style="font-size:18px">Cloud Bookeeping</a>
                                            </h4>
                                            <p class="description b1 mb--0" style="font-size:13px;color:black">
                                                But I must explain to you how all this mistaken idea of pleasure.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
                                <div class="service service__style--2" style="border-radius:25px">
                                    <div class="inner">
                                        <div class="image">
                                            <a href="./form"><img src="./img/img2.PNG" alt="card Images"></a>
                                        </div>
                                        <div class="content">
                                            <h4 class="title text-center">
                                                <a href="./form" style="font-size:18px">Monthly Invoicing</a>
                                            </h4>
                                            <p class="description b1 mb--0" style="font-size:13px;color:black">
                                                But I must explain to you how all this mistaken idea of pleasure.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
                                <div class="service service__style--2" style="border-radius:25px">
                                    <div class="inner">
                                        <div class="image">
                                            <a href="./form"><img src="./img/img-2.PNG" alt="card Images"></a>
                                        </div>
                                        <div class="content">
                                            <h4 class="title text-center">
                                                <a href="./form" style="font-size:18px">Tax Filing</a>
                                            </h4>
                                            <p class="description b1 mb--0" style="font-size:13px;color:black">
                                                But I must explain to you how all this mistaken idea of pleasure..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rainbow-advance-tab-area rainbow-section-gap">
            <div class="container">
                <div class="row row--40 align-items-center">
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="500">
                        <div class="video-btn">
                            <div class="video-popup icon-center">
                                <div class="overlay-content">
                                    <div class="thumbnail"><img class="radius-small" src="img/about-img.png" alt="Corporate Image"></div>
                                    <div class="video-icon">
                                        <a class="" href="https://www.youtube.com/watch?v=tj9-MGHCs38">
                                            <span><i class="feather-play"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="video-lightbox-wrapper"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt_md--40 mt_sm--40" style="display: flex;justify-content:center;align-items:center" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="500">
                        <div class="content">
                            <div class="inner">
                                <h3 class="title"><span style="color:#0b7ffe">Unique</span> Selling Proposition</strong>
                                </h3>
                                <p class="description" style="color:black;font-size:13px">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally
                                    <br>
                                    <br>
                                    <b>idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the or.</b>
                                </p>
                                <a href="./service"><button class="gradient-button" style="font-size:15px;border-radius:40px"><span> More Services <i class="icon feather-arrow-right"></i></span></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rainbow-advance-tab-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
                                <div class="service service__style--2" style="border-radius:25px; height:250px">
                                    <a href="./form"><img src="./img/img5.PNG" alt="card Images" class="rounder-lg" style="margin-left: -80px;"></a>
                                    <div class="content" style="text-align: left;">
                                        <div class="count-number"><span class="counter title" style="font-family:roboto;font-size:45px;font-weight:bolder">199</span></div>
                                        <h5 style="font-weight:300;font-size:13px">Happy Clients.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
                                <div class="service service__style--2" style="border-radius:25px; height:250px">
                                    <a href="./form"><img src="./img/img6.PNG" alt="card Images" style="margin-left: -80px;"></a>
                                    <div class="content" style="text-align: left;">
                                        <div style="font-size: 45px;" class="count-number"><span class="counter title" style="font-family:roboto;font-size:45px;font-weight:bolder"><b>575</b></span></div>
                                        <h5 style="font-weight:300;font-size:13px">Happy Clients.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500">
                                <div class="service service__style--2" style="border-radius:25px; height:250px">
                                    <a href="./form"><img src="./img/img7.PNG" alt="card Images" style="margin-left: -80px;"></a>
                                    <div class="content" style="text-align: left;">
                                        <div class="count-number"><span class="counter title" style="font-family:roboto;font-size:45px;font-weight:bolder">69</span></div>
                                        <h5 style="font-weight:300;font-size:13px">Happy Clients.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <div class="section-title justify-content-start" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h2 class="title w-600" style="font-size:30px; margin-top:-20px; font-weight:bolder !important;">We Completed 1500+ Projects Yearly Successfully & Counting</h2>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.</p>
                            <!-- <a href="./service"><button class="gradient-button" style="font-size:15px;border-radius:40px"> More Services <i class="icon feather-arrow-right"></i></button></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rainbow-testimonial-area rainbow-section-gap">
            <div class="container">
                <div class="row mb--20">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">Client Feedback</span></h4>
                            <h2 class="title w-600 mb--20" style="font-weight: bolder;">What Customer Say.</h2>
                        </div>
                    </div>
                </div>
                <div class="row rainbow-slick-dot rainbow-slick-arrow testimonial-activation">
                    <div class="col-lg-12">
                        <div class="testimonial-style-two">
                            <div class="row align-items-center row--20">
                                <div class="col-lg-12">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div class="mb-4">
                                            <img class="w-100" src="img/checking.PNG" alt="Corporate Template" style="max-width: 200px;">
                                        </div>
                                        <div class="contents w-25">
                                            <span class="form">USA</span>
                                            <p class="description" style="font-size:13px;color:black;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                                What I am primarily looking for with new projects is a fit on both a visual and aesthetic level as well as on a personal level with the client.
                                            </p>
                                            <!-- <div class="client-info">
                                                <h4 class="title">Darun Due</h4>
                                                <h6 class="subtitle">Web Developer</h6>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-style-two">
                            <div class="row align-items-center row--20">
                                <div class="col-lg-12">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div class="mb-4">
                                            <img class="w-100" src="img/checking2.PNG" alt="Corporate Template" style="max-width: 200px;">
                                        </div>
                                        <div class="contents w-25">
                                            <span class="form">USA</span>
                                            <p class="description" style="font-size:13px;color:black;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                                What I am primarily looking for with new projects is a fit on both a visual and aesthetic level as well as on a personal level with the client.
                                            </p>
                                            <!-- <div class="client-info">
                                                <h4 class="title">Darun Due</h4>
                                                <h6 class="subtitle">Web Developer</h6>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-style-two">
                            <div class="row align-items-center row--20">
                                <div class="col-lg-12">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div class="mb-4">
                                            <img class="w-100" src="img/checking3.PNG" alt="Corporate Template" style="max-width: 200px;">
                                        </div>
                                        <div class="contents w-25">
                                            <span class="form">USA</span>
                                            <p class="description" style="font-size:13px;color:black;font-family:Verdana, Geneva, Tahoma, sans-serif">
                                                What I am primarily looking for with new projects is a fit on both a visual and aesthetic level as well as on a personal level with the client.
                                            </p>
                                            <!-- <div class="client-info">
                                                <h4 class="title">Darun Due</h4>
                                                <h6 class="subtitle">Web Developer</h6>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
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