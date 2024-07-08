<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> 
    <title>Home - Mavens Advisor</title>
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
    <main class="page-wrapper">
      <?php include 'components/topbar.php'?>
       <?php include 'components/header.php'?>
       <?php include 'components/sidebar.php'?>
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <div class="slider-area slider-style-1 bg-transparent variation-2 height-750">
            <div class="container">
                <div class="row" style="display:flex;justify-content:center;align-items:center">
                    <div class="col-lg-7 order-2 order-lg-1 mt_md--40 mt_sm--40">
                        <div class="inner text-left">
                                <h1 class="display-two mob-1"> Empower Growth with <span style="color:#0b7ffe">Mavens Advisor's</span><br>Virtual CFO Services!</h1>
                            <p class="description text-md" style="font-size:19px">
Elevate your business to new heights with Mavens Advisor's Virtual CFO <br>services. Our seasoned financial experts provide remote guidance and <br>support, leveraging AI for transformative financial management.<br> Access top-tier expertise without the expense of a full-time CFO.<br> Let us enhance your financial management and drive growth together.</p>
                            <div class="button-group">
                                <a class="btn btn-outline-primary p-4" style="font-size:16px;border-radius:15px;font-weight:bold;border-width:2px" href="./form">GET SUBSCRIPTION NOW
                                     <i class="icon feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="thumbnail">
                            <img src="img/bg-4.png" style="border-radius:24px" alt="Banner Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="rainbow-service-area slider-area rainbow-section-gap ">
            <div class="container">
            <div class="row  d-flex flex-column flex-md-row">
                    <div class="col-lg-10">
                        <div class="section-title " data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h2 class="title w-600 mb--20">Our Services.</h2>
                        </div>
                    </div>
                    <div class="col-lg-2" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <a href="./service"><button class="btn-default  " style="font-size:15px;border-radius:10px"> More Services <i class="icon feather-arrow-right"></i></button></a>
                    </div>
                </div>
                <div class="row row--15 service-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                        <div class="service service__style--2 text-center">
                            <div class="inner">
                                <div class="image">
                                    <a href="./form"><img src="img/art-1.png" alt="card Images" class="rounder-lg"></a>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        <a href="./form">Cloud Bookkeeping</a>
                                    </h4>
                                    <p class="description b1 color-gray mb--0">
                                   Keep your financial records accurate and up-to-date with our comprehensive monthly bookkeeping service. We meticulously track all financial transactions, ensuring that your books reflect an accurate and timely record of your business's financial health..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="service service__style--2 text-center">
                            <div class="inner">
                                <div class="image">
                                    <a href="./form"><img src="img/invoicing.png" alt="card Images"></a>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        <a href="./form">Monthly Invoicing Service</a>
                                    </h4>
                                    <p class="description b1 color-gray mb--0">
                                       Streamline your billing process with our monthly invoicing service. We handle the creation and distribution of your invoices, ensuring timely billing and efficient payment collection, which improves your cash flow and financial stability.                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <a href="calculator.php"><div class="service service__style--2 text-center">
                            <div class="inner">
                                <div class="image">
                                    <a href="./form"><img src="img/tax-filing.png" alt="card Images"></a>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        <a href="./form">Tax Filing</a>
                                    </h4>
                                    <p class="description b1 color-gray mb--0">Simplify your tax obligations with our expert tax filing service. We manage the preparation and submission of your tax returns, ensuring accuracy and compliance with all applicable laws and regulations to minimize your tax liabilities.</p>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

              <div class="rainbow-advance-tab-area rainbow-section-gap">
            <div class="container">
                <!-- Start Section Title  -->
                <div class="row mb--40">
                    <div class="col-lg-12">
                        <div class="section-title text-center sal-animate">
                            <h4 class="subtitle "><span class="theme-gradient ">Case Study</span></h4>
                            <h2 class="title w-600">Steps to subscribe to a plan.</h2>
                            <p class="description b1">There are many variations of passages of Lorem Ipsum available,
                                <br> but the majority have suffered alteration.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- End Section Title  -->
                <!-- Start tab  -->
                <div class="advance-tab-four bg-color-blackest theme-shape" data-tabs="true">
                    <div class="row row--30 gy-5">
                        <!-- Start tab Button  -->
                        <div class="col-lg-5 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30 d-flex flex-column justify-content-center order-2 order-lg-1">
                            <div class="advance-tab-top">
                                <h5 class="subtitle"><span class="theme-gradient">Step 01</span></h5>
                                <h3 class="title"> Fill out the form!</h3>
                                <p class="description">Send, receive, and transform raw data or tokens with any
                                    endpoint on the internet using our Reactor and Proxy services.</p>
                            </div>
                            <div class="advance-tab-bottom">
                                <div class="advance-tab-button advance-tab-button-1">
                                </div>
                            </div>
                        </div>
                        <!-- End tab Button  -->

                        <!-- Start tab Content  -->
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12 order-1 order-lg-2">
                            <div class="tab-content">
                                <div class="tab-pane fade show advance-tab-content-1 bg-primary-gradient radius active" id="case" role="tabpanel" aria-labelledby="case-tab">
                                    <div class="thumbnail">
                                        <img class="radius" src="./img/Forms-rafiki.png" alt="advance-tab-image">
                                    </div>
                                </div>
                                <div class="tab-pane fade advance-tab-content-1 bg-primary-gradient radius" id="casetabtwo" role="tabpanel" aria-labelledby="casetabtwo-tab">
                                    <div class="thumbnail">
                                        <img class="radius" src="assets/images/advance-tab/tab-5.png" alt="advance-tab-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End tab Content  -->
                    </div>
                </div>
                <!-- End tab  -->

                <div class="row row--20">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700">
                        <div class="service service__style--1 bg-color-blackest radius mt--40 text-left overflow-hidden">
                            <div class="content">
                                <h6 class="subtitle"><span class="theme-gradient">Step 02</span></h6>
                                <h4 class="title w-600">
                                    <a href="#">Calculate Bookeeping Services</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">There are many variations variations
                                    of passages of Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
                            <center>
                            <div class="service-thumbnail-offset bg-primary-gradient mt--40">
                                <img src="./img/bookkeeping-step.png" alt="image">
                            </div>
			   </center>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-duration="700">
                        <div class="service service__style--1 bg-color-blackest radius mt--40 text-left overflow-hidden">
                            <div class="content">
                                <h6 class="subtitle"><span class="theme-gradient">Step 03</span></h6>
                                <h4 class="title w-600">
                                    <a href="#">Lock the price and let's chat</a>
                                </h4>
                                <p class="description b1 color-gray mb--0">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered.</p>
                            </div>
			  <center>
                            <div class="service-thumbnail-offset bg-primary-gradient mt--40">
                                <img src="./img/chat-interface.png" alt="image">
                            </div>
			</center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <div class="rainbow-split-area" style="margin-top:150px">
            <div class="wrapper">
                <div class="rainbow-splite-style bg-color-blackest" >
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10 align-items-center">
                             <div class="col-lg-12 col-xl-6 col-12">
                                <div class="thumbnail div_img">
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6 col-12">
                                <div class="split-inner">
                                    <h1 class="title heading_2"><span style="color:#0b7ffe">Unique</span> Selling Proposition</h1>
                                   <p class="description">What sets our VCFO services apart is our integration of advanced AI technology. 
					Our AI-driven services leverage algorithms and machine learning to provide unparalleled insights 
					into your financial landscape. By analyzing vast datasets and financial patterns, AI enables:</p>
<ul class="feature-list">
  <li style="font-size:16px">Enhanced Financial Understanding: AI helps clients understand their current financial needs and forecast future requirements with precision.</li>
  <li style="font-size:16px">Personalized Recommendations: Clients receive tailored advice and insights, empowering them to make informed decisions.</li>
  <li style="font-size:16px">Strategic Guidance: Navigate complex financial scenarios with confidence and optimize resource allocation.</li>
  <li style="font-size:16px">Streamlined Processes: AI automates routine tasks, improving efficiency and reducing the risk of human error.</li>
</ul>                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-6 col-12">     
                                            <div class="count-box counter-style-4 text-start">
                                                <div>
                                                    <div class="count-number"><span class="counter title" style="font-family:roboto;font-size:58px">199</span></div>
                                                </div>
                                                <h5 class="counter-title">Happy Clients.</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="count-box counter-style-4 text-start">
                                                <div>
                                                    <div class="count-number"><span class="counter title" style="font-family:roboto;font-size:58px">575</span></div>
                                                </div>
                                                <h5 class="counter-title">Employees</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="count-box counter-style-4 text-start">
                                                <div>
                                                    <div class="count-number"><span class="counter title" style="font-family:roboto;font-size:58px">69</span></div>
                                                </div>
                                                <h5 class="counter-title">Useful Programs</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="count-box counter-style-4 text-start">
                                                <div>
                                                    <div class="count-number"><span class="counter title" style="font-family:roboto;font-size:58px">500</span></div>
                                                </div>
                                                <h5 class="counter-title">Useful Programs</h5>
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
        <div class="rainbow-testimonial-area rainbow-section-gap">
                <div class="container">
                    <div class="row mb--20">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h4 class="subtitle "><span class="theme-gradient">Client Feedback</span></h4>
                                <h2 class="title w-600 mb--20">Testimonial.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row rainbow-slick-dot rainbow-slick-arrow testimonial-activation">
                        <div class="col-lg-12">
                            <div class="testimonial-style-two">
                                <div class="row align-items-center row--20">
                                    <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                                        <div class="content mt_sm--40"><span class="form">USA</span>
                                            <p class="description">What I am primarily looking for with
                                                new projects is a fit on both a visual and aesthetic
                                                level as well as on a personal level with the client.
                                            </p>
                                            <div class="client-info">
                                                <h4 class="title">Darun Due</h4>
                                                <h6 class="subtitle">Web Developer</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-1 order-md-2 col-lg-4 col-md-4">
                                        <div class="thumbnail"><img class="w-100" src="img/testimonial-dark-01.jpg" alt="Corporate Template"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="call-lg-12">
                            <div class="testimonial-style-two">
                                <div class="row align-items-center row--20">
                                    <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                                        <div class="content mt_sm--40"><span class="form">INDIA</span>
                                            <p class="description">What I am primarily looking for with
                                                new projects is a fit on both a visual and aesthetic
                                                level as well as on a personal level with the client.
                                            </p>
                                            <div class="client-info">
                                                <h4 class="title">Mohima Ale</h4>
                                                <h6 class="subtitle">App Developer</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-1 order-md-2 col-lg-4 col-md-4">
                                        <div class="thumbnail"><img class="w-100" src="img/testimonial-dark-02.jpg" alt="Corporate Template"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="coll-lg-12">
                            <div class="testimonial-style-two">
                                <div class="row align-items-center row--20">
                                    <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                                        <div class="content mt_sm--40"><span class="form">Bangladesh</span>
                                            <p class="description">What I am primarily looking for with
                                                new projects is a fit on both a visual and aesthetic
                                                level as well as on a personal level with the client.
                                            </p>
                                            <div class="client-info">
                                                <h4 class="title">John Roni</h4>
                                                <h6 class="subtitle">App Developer</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-1 order-md-2 col-lg-4 col-md-4">
                                        <div class="thumbnail"><img class="w-100" src="img/testimonial-dark-02.jpg" alt="Corporate Template"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rainbow-callto-action-area rainbow-section-gapBottom">
                <div class="wrapper">
                    <div class="rainbow-callto-action clltoaction-style-default style-3 bg-image bg-image3 bg_image_fixed">
                        <div class="container">
                            <div class="row row--0 align-items-center content-wrapper">
                                <div class="col-lg-8">
                                    <div class="inner">
                                        <div class="content text-left">
                                            <h2 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Ready to get a Virtual CFO Asssistant?</h2>
                                            <h6 class="subtitle" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Finest choice for your home &amp; office</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-to-btn text-start text-lg-end" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400"><a class="btn-default" href="./form">Get Your Subscription
                                            </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
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