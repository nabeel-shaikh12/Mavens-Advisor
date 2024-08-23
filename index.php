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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
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
        <?php include 'components/topbar.php' ?>
        <?php include 'components/header.php' ?>
        <?php include 'components/sidebar.php' ?>
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slide">
                            <div class="content">
                                <div class="slide-div" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                                    <h1 class="slide-h1">Best <span style="color: #0B7FFE;">Virtual Assistant</span> For your Business</h1>
                                    <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua quis ipsum.</p>
                                    <a href="./form"><button class="gradient-button mt-3" style="font-size:15px;border-radius:40px"><span> Get Subscription Now <i class="icon feather-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                            <div class="image" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                <img src="./img/home-two-img3.jpg" alt="People working">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide">
                            <div class="content">
                                <div class="slide-div" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                                    <h1 class="slide-h1">Best <span style="color: #0B7FFE;">Virtual Assistant</span> For your Business</h1>
                                    <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua quis ipsum.</p>
                                    <a href="./form"><button class="gradient-button mt-3 mr-2" style="font-size:15px;border-radius:40px"><span> Get Subscription Now <i class="icon feather-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                            <div class="image" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                <img src="./img/home-two-img3.jpg" alt="People working">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide">
                            <div class="content">
                                <div class="slide-div" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                                    <h1 class="slide-h1">Best <span style="color: #0B7FFE;">Virtual Assistant</span> For your Business</h1>
                                    <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua quis ipsum.</p>
                                    <a href="./form"><button class="gradient-button mt-3 mr-2" style="font-size:15px;border-radius:40px"><span> Get Subscription Now <i class="icon feather-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                            <div class="image" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                <img src="./img/home-two-img3.jpg" alt="People working">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button class="custom-nav-btn prev-btn mt-5" id="prevBtn"><i class="fas fa-arrow-left"></i></button>
                <button class="custom-nav-btn next-btn" id="nextBtn"><i class="fas fa-arrow-right"></i></button>

            </div>
        </div>
        <br>
        <br>
        <div class="rainbow-service-area slider-area">
            <div class="container" style="margin-top:150px;padding-bottom: 150px;">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="simple-tab-0" data-toggle="tab" href="#simple-tabpanel-0" role="tab"
                            aria-controls="simple-tabpanel-0" aria-selected="true">Information & Technology</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simple-tab-1" data-toggle="tab" href="#simple-tabpanel-1" role="tab"
                            aria-controls="simple-tabpanel-1" aria-selected="false">Financial Services</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simple-tab-2" data-toggle="tab" href="#simple-tabpanel-2" role="tab"
                            aria-controls="simple-tabpanel-2" aria-selected="false">Human Resource</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simple-tab-3" data-toggle="tab" href="#simple-tabpanel-3" role="tab"
                            aria-controls="simple-tabpanel-3" aria-selected="false">Marketing & Analysis</a>
                    </li>
                </ul>
                <div class="tab-content" id="tab-content">
                    <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
                        <div class="row">
                            <div class="col-md-6" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                                <img src="img/services-large1.jpg" width="100%" class="services">
                            </div>
                            <div class="col-md-6 mtt" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                <h4 style="font-size: 30px; font-weight:500">Project Management Consulting</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="icon-text">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Innovative Working Activities</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>100% Guarantee Issued for Client</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Turnaround Situation</p>
                                </div>
                                <button class="btn-2 mt-3">More About Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                        <div class="row">
                            <div class="col-md-6" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                                <h4 style="font-size: 30px; font-weight:500">Project Management Consulting</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="icon-text">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Innovative Working Activities</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>100% Guarantee Issued for Client</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Turnaround Situation</p>
                                </div>
                                <button class="btn-2 mt-3">More About Us</button>
                            </div>
                            <div class="col-md-6 mtt" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                <img src="img/services-large2.jpg" width="100%" class="services">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
                        <div class="row">
                            <div class="col-md-6" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                                <img src="img/services-large3.jpg" width="100%" class="services">
                            </div>
                            <div class="col-md-6 mtt" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                <h4 style="font-size: 30px; font-weight:500">Project Management Consulting</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="icon-text">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Innovative Working Activities</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>100% Guarantee Issued for Client</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Turnaround Situation</p>
                                </div>
                                <button class="btn-2 mt-3">More About Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="simple-tabpanel-3" role="tabpanel" aria-labelledby="simple-tab-3">
                        <div class="row">
                            <div class="col-md-6" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                                <h4 style="font-size: 30px; font-weight:500">Project Management Consulting</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ulabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="icon-text">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Innovative Working Activities</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>100% Guarantee Issued for Client</p>
                                </div>
                                <div class="icon-text mt-2">
                                    <i class="fa-solid fa-arrow-right fa-1x"></i>
                                    <p>Turnaround Situation</p>
                                </div>
                                <button class="btn-2 mt-3">More About Us</button>
                            </div>
                            <div class="col-md-6 mtt" data-sal="slide-left" data-sal-duration="700" data-sal-delay="100">
                                <img src="img/services-large2.jpg" width="100%" class="services">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rainbow-section-gap" style="background-color:#FBFBFB">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title2">Pricing Plan</span>
                    <h2>Select Pricing Plan To Get More</h2>
                </div>
                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-4 col-sm-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="pricing-card">
                            <div class="top">
                                <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                <div class="price-icon">
                                    <img src="img/price-icon1.png" alt="Images">
                                </div>
                                <h3>Entrepreneur Plan</h3>
                                <h4>$399 <span>/Weekly</span></h4>
                                <ul>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> 24 Hours Per Month</li>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> Dedicated Assistant</li>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> 4 User Included</li>
                                </ul>
                                <div class="price-btn-area text-center">
                                    <a href="form.php" class="price-btn">Subscribe Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="pricing-card">
                            <div class="top">
                                <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                <div class="price-icon">
                                    <img src="img/price-icon2.png" style="margin-top:20px !important" alt="Images">
                                </div>
                                <h3>Small Business Plan</h3>
                                <h4>$999 <span>/Monthly</span></h4>
                                <ul>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> 24 Hours Per Month</li>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> Dedicated Assistant</li>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> 4 User Included</li>
                                </ul>
                                <div class="price-btn-area text-center">
                                    <a href="form.php" class="price-btn">Subscribe Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="pricing-card">
                            <div class="top">
                                <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                <div class="price-icon">
                                    <img src="img/price-icon3.png" alt="Images">
                                </div>
                                <h3>Team Plan</h3>
                                <h4>$1090 <span>/Yearly </span></h4>
                                <ul>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> 24 Hours Per Month</li>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> Dedicated Assistant</li>
                                    <li class="zoom-hover"><i class="fa-solid fa-circle-check"></i> 4 User Included</li>
                                </ul>
                                <div class="price-btn-area text-center">
                                    <a href="form.php" class="price-btn">Subscribe Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container rainbow-section-gap">
            <div class="section-title text-center">
                <span class="sp-title2">Project</span>
                <h2>Our Recent Project Case</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-7">
                    <div class="project-slider-two owl-carousel owl-theme" data-slider-id="1">
                        <div class="project-slider-img">
                            <img src="./img/project-style1.jpg" alt="Project 1">
                        </div>
                        <div class="project-slider-img">
                            <img src="./img/project-style2.jpg" alt="Project 2">
                        </div>
                        <div class="project-slider-img">
                            <img src="./img/project-style3.jpg" alt="Project 3">
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="thumbs-wrap">
                        <div class="owl-thumbs project-area-thumb" data-slider-id="1">
                            <div class="owl-thumb-item" style="border-radius:0px;">
                                <div class="content">
                                    <h3>Customer Service</h3>
                                    <p style="font-size: 17px !important;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <div class="content">
                                    <h3>Design Service</h3>
                                    <p style="font-size: 17px !important;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <div class="content">
                                    <h3>Executive Admin</h3>
                                    <p style="font-size: 17px !important;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rainbow-section-gap image-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col">
                    </div>
                    <div class="col-md-4 text-center" style="margin-top:-30px">
                        <span class="sp-title2" style="color: #0B7FFE;">Services</span>
                        <h3>Our Services</h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xl-4 col-lg-4 text-right">
                        <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left" style="color: #0B7FFE;"></i>
                        </a>
                        <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right" style="color: #0B7FFE;"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner mobile-carousels">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-laptop-file fa-3x mb-5"></i>
                                                    <h3>project Management</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-drafting-compass fa-3x mb-5"></i>
                                                    <h3>Social Media Marketing</h3>
                                                    <p>Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-laptop-file fa-3x mb-5"></i>
                                                    <h3>project Management</h3>
                                                    <p>Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-laptop-file fa-3x mb-5"></i>
                                                    <h3 class="mt-3">project Management</h3>
                                                    <p>Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-drafting-compass fa-3x mb-5"></i>
                                                    <h3>project Management</h3>
                                                    <p>Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-laptop-file fa-3x mb-5"></i>
                                                    <h3>project Management</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-laptop-file fa-3x mb-5"></i>
                                                    <h3>project Management</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-drafting-compass fa-3x mb-5"></i>
                                                    <h3>project Management</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="assistant-card">
                                                <div class="top">
                                                    <img src="img/services-top.png" alt="Shape 1" class="shape shape1">
                                                    <img src="img/services-top2.png" alt="Shape 2" class="shape shape2">
                                                    <i class="fa-solid fa-laptop-file fa-3x mb-5"></i>
                                                    <h3>project Management</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consecteturadipig elit, sed do eiusmod tempor incididunt utlit
                                                        abore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.lacus
                                                    </p>
                                                    <button class="btn btn-primary" style="background-color: #EFEEEE;color:#0B7FFE">Read More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container rainbow-section-gap">
            <div class="row">
                <div class="col-md-5" data-sal="slide-right" data-sal-duration="700" data-sal-delay="100">
                    <img src="img/choose-img-edit.png">
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <div class="curved-div">
                                <div class="curved-content text-center">
                                    <div class="icon-container">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <h5>Top Customer Service</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <div class="curved-div">
                                <div class="curved-content text-center">
                                    <div class="icon-container">
                                        <i class="fas fa-user-cog"></i>
                                    </div>
                                    <h5>Highly Personalized</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <div class="curved-div">
                                <div class="curved-content text-center">
                                    <div class="icon-container">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5>Passionate Talent</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <div class="curved-div">
                                <div class="curved-content text-center">
                                    <div class="icon-container">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <h5>Quick Response Team</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rainbow-section-gap image-backgrounds">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4">
                    </div>
                    <div class="col-md-4 text-center" style="margin-top:-30px">
                        <span class="sp-title2" style="color: #0B7FFE;">Reviews</span>
                        <h3>What Client Say About Us!</h3>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4 text-right">
                        <a class="arrow-btn btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="arrow-btn btn btn-primary mb-3 arrow-btn" href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner mobile-carousels">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card" style="border: none;">
                                                <div class="testimonial-item text-center">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="img/inverted.PNG">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                                                        <div class="rating">
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star icon8"></i>
                                                            <i class="fas fa-star-half icon8"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentIndex = 0;
            const tabs = document.querySelectorAll('.nav-link');
            const tabContents = document.querySelectorAll('.tab-pane');
            let interval;
            let autoChangeTimeout;

            function activateTab(index) {
                tabs.forEach((tab, i) => {
                    tab.classList.remove('active');
                    tabContents[i].classList.remove('active');
                });

                tabs[index].classList.add('active');
                tabContents[index].classList.add('active');
            }

            function changeTab(manual = false) {
                if (manual) {
                    clearInterval(interval);
                    clearTimeout(autoChangeTimeout);
                    autoChangeTimeout = setTimeout(() => {
                        interval = setInterval(changeTab, 5000);
                    }, 10000);
                }

                currentIndex = (currentIndex + 1) % tabs.length;
                activateTab(currentIndex);
            }
            tabs.forEach((tab, index) => {
                tab.addEventListener('click', function() {
                    if (currentIndex !== index) {
                        currentIndex = index;
                        activateTab(currentIndex);
                        changeTab(true);
                    }
                });
            });
            interval = setInterval(changeTab, 4000);
        });
        $(document).ready(function() {
            var owl = $('.project-slider-two');
            owl.owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                items: 1,
                navText: [
                    '<i class="flaticon-arrow-pointing-to-left"></i>',
                    '<i class="flaticon-arrow-pointing-to-right"></i>'
                ]
            });
            var thumbs = $('.project-area-thumb');
            thumbs.on('click', '.owl-thumb-item', function(e) {
                var index = $(this).index();
                owl.trigger('to.owl.carousel', [index, 300]);
                thumbs.find('.owl-thumb-item').removeClass('active');
                $(this).addClass('active');
            });
            owl.on('changed.owl.carousel', function(event) {
                var index = event.item.index - event.relatedTarget._clones.length / 2;
                index = index % event.item.count;
                thumbs.find('.owl-thumb-item').removeClass('active').eq(index).addClass('active');
            });

            // Set the first thumbnail as active on page load
            thumbs.find('.owl-thumb-item').eq(0).addClass('active');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>