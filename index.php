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
                                <div class="slide-div">
                                    <h1 class="slide-h1">Best <span style="color: #0B7FFE;">Virtual Assistant</span> For your Business</h1>
                                    <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua quis ipsum.</p>
                                    <a href="./form"><button class="gradient-button" style="font-size:15px;border-radius:40px"><span> Get Subscription Now <i class="icon feather-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                            <div class="image">
                                <img src="./img/home-two-img3.jpg" alt="People working">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide">
                            <div class="content">
                                <div class="slide-div">
                                    <h1 class="slide-h1">Best <span style="color: #0B7FFE;">Virtual Assistant</span> For your Business</h1>
                                    <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua quis ipsum.</p>
                                    <a href="./form"><button class="gradient-button" style="font-size:15px;border-radius:40px"><span> Get Subscription Now <i class="icon feather-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                            <div class="image">
                                <img src="./img/home-two-img3.jpg" alt="People working">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slide">
                            <div class="content">
                                <div class="slide-div">
                                    <h1 class="slide-h1">Best <span style="color: #0B7FFE;">Virtual Assistant</span> For your Business</h1>
                                    <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua quis ipsum.</p>
                                    <a href="./form"><button class="gradient-button" style="font-size:15px;border-radius:40px"><span> Get Subscription Now <i class="icon feather-arrow-right"></i></span></button></a>
                                </div>
                            </div>
                            <div class="image">
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
                            aria-controls="simple-tabpanel-0" aria-selected="true">Content Writing</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simple-tab-1" data-toggle="tab" href="#simple-tabpanel-1" role="tab"
                            aria-controls="simple-tabpanel-1" aria-selected="false">Project Management</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simple-tab-2" data-toggle="tab" href="#simple-tabpanel-2" role="tab"
                            aria-controls="simple-tabpanel-2" aria-selected="false">Bookkeeping</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="simple-tab-3" data-toggle="tab" href="#simple-tabpanel-3" role="tab"
                            aria-controls="simple-tabpanel-3" aria-selected="false">Social Media Marketing</a>
                    </li>
                </ul>
                <div class="tab-content" id="tab-content">
                    <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/services-large1.jpg" width="100%" class="services">
                            </div>
                            <div class="col-md-6">
                                <h1>Project Management Consulting</h1>
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
                            <div class="col-md-6">
                                <h1>Project Management Consulting</h1>
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
                            <div class="col-md-6">
                                <img src="img/services-large2.jpg" width="100%" class="services">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/services-large3.jpg" width="100%" class="services">
                            </div>
                            <div class="col-md-6">
                                <h1>Project Management Consulting</h1>
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
                            <div class="col-md-6">
                                <h1>Project Management Consulting</h1>
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
                            <div class="col-md-6">
                                <img src="img/services-large2.jpg" width="100%" class="services">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-title2">Pricing Plan</span>
                <h2>Select Pricing Plan To Get More</h2>
            </div>
            <div class="row pt-45 justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-card">
                        <div class="top">
                            <img src="img/shape1-edit.png" alt="Shape 1" class="shape shape1">
                            <img src="img/shape2-edit.png" alt="Shape 2" class="shape shape2">
                        </div>
                        <div class="price-icon">
                            <img src="img/price-icon1.png" alt="Images">
                        </div>
                        <h3>Entrepreneur Plan</h3>
                        <h4>$399 <span>/Weekly</span></h4>
                        <ul>
                            <li><i class="bx bx-check-circle"></i> 12 Hours Per Month</li>
                            <li><i class="bx bx-check-circle"></i> Dedicated Assistant</li>
                            <li><i class="bx bx-check-circle"></i> 1 User Included</li>
                        </ul>
                        <div class="price-btn-area text-center">
                            <a href="form.php" class="price-btn">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-card">
                        <div class="top">
                            <img src="img/shape1-edit.png" alt="Shape 1" class="shape shape1">
                            <img src="img/shape2-edit.png" alt="Shape 2" class="shape shape2">
                        </div>
                        <div class="price-icon">
                            <img src="img/price-icon2.png" alt="Images">
                        </div>
                        <h3>Small Business Plan</h3>
                        <h4>$999 <span>/Monthly</span></h4>
                        <ul>
                            <li><i class="bx bx-check-circle"></i> 18 Hours Per Month</li>
                            <li><i class="bx bx-check-circle"></i> Dedicated Assistant</li>
                            <li><i class="bx bx-check-circle"></i> 2 User Included</li>
                        </ul>
                        <div class="price-btn-area text-center">
                            <a href="form.php" class="price-btn">Subscribe Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-card">
                        <div class="top">
                            <img src="img/shape1-edit.png" alt="Shape 1" class="shape shape1">
                            <img src="img/shape2-edit.png" alt="Shape 2" class="shape shape2">
                        </div>
                        <div class="price-icon">
                            <img src="img/price-icon3.png" alt="Images">
                        </div>
                        <h3>Team Plan</h3>
                        <h4>$1090 <span>/Yearly </span></h4>
                        <ul>
                            <li><i class="bx bx-check-circle"></i> 24 Hours Per Month</li>
                            <li><i class="bx bx-check-circle"></i> Dedicated Assistant</li>
                            <li><i class="bx bx-check-circle"></i> 4 User Included</li>
                        </ul>
                        <div class="price-btn-area text-center">
                            <a href="form.php" class="price-btn">Subscribe Now</a>
                        </div>
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
                            <div class="row">
                                <div class="col-md-4 box-shadow" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                                <div class="col-md-4 box-shadow" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                                <div class="col-md-4 box-shadow" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                    <div class="col-lg-12">
                        <div class="testimonial-style-two">
                            <div class="row">
                                <div class="col-md-4" style="background-color:white;padding:20px">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                                <div class="col-md-4" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                                <div class="col-md-4" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                    <div class="col-lg-12">
                        <div class="testimonial-style-two">
                            <div class="row">
                                <div class="col-md-4" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                                <div class="col-md-4" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
                                <div class="col-md-4" style="background-color:white">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="img/testimonial-profile1.jpg" alt="Testimonials Images" style="border-radius: 50px;">
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Orbindu Jeason<br><span style="font-weight: 400;">Manager</span></h5>
                                        </div>
                                        <div class="col-md-4">
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
        $(document).ready(function() {
            $('#nextBtn').click(function() {
                $('#carouselExampleIndicators').carousel('next');
            });

            $('#prevBtn').click(function() {
                $('#carouselExampleIndicators').carousel('prev');
            });
            $(".testimonial-slider").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 1,
                dots: true,
                navText: [
                    '<i class="flaticon-arrow-pointing-to-left"></i>',
                    '<i class="flaticon-arrow-pointing-to-right"></i>'
                ],
            });
            $(".services-slider").owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                navText: [
                    '<i class="flaticon-arrow-pointing-to-left"></i>',
                    '<i class="flaticon-arrow-pointing-to-right"></i>'
                ],
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
                }
            });
            $(".pricing-slider").owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                navText: [
                    '<i class="bx bx-left-arrow-alt"></i>',
                    '<i class="bx bx-right-arrow-alt"></i>'
                ],
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
                }
            });
        });
    </script>
</body>

</html>