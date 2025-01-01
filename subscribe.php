<?php
require_once 'db/dbCon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-Step Form with Hours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/plugins/hover-min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        body {
            /* font-family: 'Poppins', sans-serif; */
            margin: 0;
        }

        .step-container h1 {
            font-weight: 900;
            font-size: 45px;
            letter-spacing: 6px;
            font-family: cursive;
        }

        .step-container h1::after {
            content: "";
            display: block;
            width: 25%;
            height: 50px;
            background: url(img/headingline.png) center center no-repeat;
            background-size: cover;
            position: relative;
            left: 35%;
            top: -15px;
        }

        .description {
            min-height: 60px;
            max-height: 220px;
            font-size: 18px;
            text-align: justify;
        }

        @media screen and (max-width: 768px) {
            .step-container h1 {
                font-size: 38px;
            }

            .step-container h1::after {
                width: 40%;
                left: 25%;
                top: -10px;

            }
        }

        @media screen and (max-width: 450px) {
            .step-container h1 {
                font-size: 30px;
            }

            .step-container h1::after {
                width: 60%;
                left: 20%;
                top: -10px;
            }
        }

        .stepsForm .bg-cover {
            position: relative;
            /* background-position: 50%; */
            min-height: 100vh;
            display: flex;
            align-items: center;
            /* background-color: #000000db; */
        }

        .progress {
            background: #000000db !important;
            height: 3px !important;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .progress-bar {
            display: unset !important;
            overflow: unset !important;
            background-color: #6DB2FE !important;
            height: 3px !important;
        }

        .step-container {
            display: none;
        }

        .step-container.active {
            display: block;
        }

        .summary-table input {
            width: 60px;
            text-align: center;
        }

        .story-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            transition: transform 0.8s ease-in-out;
            text-align: center;
        }

        .story-container.inactive {
            transform: translateY(100vh);
        }

        .service-box {
            background: transparent;
            border: 1px solid #706e972e;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            display: inline-block;
            margin: 10px;
            box-shadow: 0 0 8px 0px #d9d9d940;
            width: 100%;
            padding: 35px;
            color: #000;
            font-weight: 500;
        }

        .service-box:hover {
            box-shadow: 0 5px 10px 0px #0961c438;
        }

        .hvr-underline-reveal:before {
            background: #2077d1 !important;
        }

        /* Business Card Styling */
        .business-card {
            border: 2px solid #dbdbdbd6;
            border-radius: 10px;
            padding: 20px 30px;
            text-align: center;
            color: #000;
            transition: all 0.3s ease;
            box-shadow: 0 0 8px rgba(217, 217, 217, 0.4);
            min-height: 300px;

        }

        @media screen and (max-width: 992px) {
            .business-card {
                padding: 20px 2px;
            }
        }


        .business-card.active {
            border-color: #2077d1;
        }

        .business-card p {
            font-size: 14px;
            font-weight: 500;
        }

        .business-card p::after {
            content: "";
            display: block;
            /* Ensures the pseudo-element is displayed */
            width: 75px;
            /* Adjust as needed */
            height: 50px;
            /* Match the GIF dimensions */
            background: url('img/underline.gif') center center no-repeat;
            /* Add your GIF URL */
            background-size: cover;
            /* Ensures the GIF covers the entire area */
            position: relative;
            left: 35%;
            top: -15px;
        }


        .swiper-slide-active .business-card {
            border-color: #0C7FFE;
            transform: scale(1.1);
            background: #1d6bbf;
            box-shadow: 0 0 12px rgba(0, 123, 255, 0.5);
            background-image: url(img/plan-bg.png);
            background-size: cover;
        }

        .swiper-slide-active .business-card h4 {
            font-weight: 700;
            font-size: 23px;
            color: #fbfbfbad;
        }

        .swiper-slide-active .business-card p,
        .swiper-slide-active .business-card h5 {
            color: #fff;
        }

        .selected-services ul {
            width: 100%;
            margin: 0 0 10px 0;
            padding: 0;
            text-align: left;
        }

        .selected-services h5 {
            font-size: 15px;
            margin-bottom: 8px;
        }

        .selected-services ul li {
            color: #eee;
            margin: 0 8px 15px 0;
            display: flex;
            font-size: 14px;
            color: #797979;
            position: relative;
            font-weight: 300;
            line-height: 1.4;
        }

        .selected-services ul li::before {
            content: "";
            display: block;
            width: 20px;
            height: 16px;
            background: url(img/list-check.svg) center center no-repeat;
            background-size: contain;
            position: relative;
            left: 15px;
            top: 0;
        }

        .swiper-slide-active .business-card .selected-services ul li::before {
            background: url(img/list-check-w.svg) center center no-repeat;
            background-size: contain;
        }

        .selected-services ul li i {
            font-size: 15px;
            margin-right: 10px;
            opacity: 0;
        }

        .swiper-slide-active .business-card .selected-services ul li {
            color: #eee;
        }

        .swiper-slide-active .business-card .btn-select {
            border: 1px solid #fff;
            background-color: transparent;
        }

        .business-card .btn-select:hover {
            border: 1px solid #016adb;
            background-color: #016adb;
            box-shadow: 0px 0px 4px 0px #567fab7a;
        }

        .swiper-slide-active:before {
            content: "";
            height: 80px;
            background: url('img/package_dot.png') top center no-repeat;
            position: absolute;
            bottom: -20px;
            left: -30px;
            right: -30px;
            background-size: 100% 100%;
            z-index: -1;
        }

        /* Custom Dropdown Styling */
        .custom-dropdown {
            position: relative;
            width: 250px;
            z-index: 1;
        }

        .custom-dropdown-button {
            /* background: rgba(32, 119, 209, 0.2); */
            border-bottom: 1px solid #494747;
            color: #494747;
            transition: all 0.3s ease;
            border-radius: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-dropdown-button:hover {
            border-bottom: 1px solid #494747;
            /* color: #fff; */
        }

        .custom-dropdown-button.show {
            border-color: unset;
            border: 0;
            border-bottom: 1px solid #fff;
        }

        .custom-dropdown-button:active {
            background: rgba(32, 119, 209, 0.4) !important;
            border: 0;
            color: #000 !important;
            border-radius: 8px;
        }

        .dropdown-menu {
            /* background: #0e335b8f; */

        }

        .dropdown-menu .dropdown-item {
            transition: all 0.3s ease;
            border-bottom: 1px solid #ccc;
        }

        .dropdown-menu .dropdown-item:hover {
            background: rgba(32, 119, 209, 0.4);
            color: #fff;
        }

        /* Container styling */
        .table-container {
            margin: 20px 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Styled table */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            text-align: left;
        }

        .styled-table thead tr {
            background-color: #0C7FFE;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }


        /* Totals container */
        .totals-container {
            margin-top: 20px;
            padding: 10px;
            border-bottom: 1px solid #063A75;
            background: transparent;
            text-align: left;
            font-size: 18px;
        }

        .totals-container p {
            margin: 5px 0;
        }

        .summary-hours-input {
            background-color: unset !important;
            border-color: #717070;
            color: #717070;
        }

        .summary-hours-input:focus {
            color: #000;
        }

        .btn-step {
            display: flex;
            align-items: baseline;
            padding: 15px 35px;
            width: 135px;
        }

        #services-bag {
            position: absolute;
            right: 20px;
            bottom: 20px;
            max-height: 400px;
            overflow-y: auto;
            box-shadow: 0px 4px 10px rgb(0 0 0 / 20%);
            background: rgb(255 255 255 / 47%);
            padding: 20px;
            border-radius: 10px;
            width: 200px;
        }

        .bag-item {
            background: rgba(255, 255, 255, 0.1);
            margin: 10px 0;
            padding: 10px;
            box-shadow: 0px 4px 10px rgb(0 0 0 / 20%);

            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .bag-item:hover {
            background: rgba(255, 255, 255, 0.2);
            cursor: pointer;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            font-size: 18px;
            padding: 20px;
        }

        .swiper-slide-next {
            z-index: -1;
        }

        /* .swiper-pagination-bullet {
            background: var(--swiper-pagination-bullet-inactive-color, #fff);
            opacity: var(--swiper-pagination-bullet-inactive-opacity, .6) !important;
        } */

        .swiper-pagination-bullet-active {
            opacity: var(--swiper-pagination-bullet-opacity, 1) !important;
            background: var(--swiper-pagination-color, var(--swiper-theme-color)) !important;
        }

        .btn-select {
            margin: 13px 0 5px 0;
            padding: 5px 35px;
            display: inline-block;
            color: #fff;
            border: 1px solid #0C7FFE;
            box-shadow: 0px 0px 4px 0px #567fab7a;
            border-radius: 30px;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
            background: #0C7FFE;
            font-size: 14px;
            margin-top: 50%;
        }

        .swiper-pagination {
            position: unset;
        }

        .mySwiper {
            width: 100%;
            /* Default for extra-small and small screens */
        }

        @media screen and (max-width: 768px) {

            /* Medium screens and up (md) */
            .mySwiper {
                width: 75%;
            }

            #services-bag {
                width: 100% !important;
                position: relative;
                right: 0px;

                bottom: 20px;
                margin-bottom: 70px !important;
            }
        }

        @media screen and (min-width: 992px) {

            /* Large screens and up (lg) */
            .mySwiper {
                width: 75%;
            }
        }

        @media screen and (min-width: 1200px) {

            /* Extra-large screens and up (xl) */
            .mySwiper {
                width: 75%;
            }
        }

        .active-button {
            position: relative;
            /* Adjust for the GIF */
        }

        .active-button:before {
            content: "";
            position: absolute;
            left: 5px;
            /* Adjust the position of the GIF */
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            /* Width of the GIF */
            height: 24px;
            /* Height of the GIF */
            background: url('img/checkmark.gif') no-repeat center center;
            background-size: cover;
        }

        .modal-content h5 {
            color: #950000;
            font-size: 15px;
            font-weight: 600;
        }

        .btn-primary {
            background-color: #084A94;
            border-color: #084A94;
        }

        .delete-row {
            background-color: #0960C0;
            margin-left: 10px;
        }

        .delete-row:hover {
            background-color: #064a92;
            border-color: #064a92;
        }

        .btn-submit {
            border-color: #084A94;
            color: #084A94;
        }

        .btn-submit:hover {
            background-color: #084A94;
            color: #fff;
        }

        .inactive ul li .btn {
            background: #a0cdff;
            color: #3f3f3f;
            border-radius: 20px;
            box-shadow: 0 0px 3px 0px #68adf98f
        }

        .inactive ul li .btn:hover {
            box-shadow: 0 0px 5px 0px #2477d3a8;
        }
    </style>
</head>

<body>
    <div>
        <div class="rainbow-gradient-circle"></div>
        <div class="rainbow-gradient-circle theme-pink"></div>
    </div>

    <div class="stepsForm">
        <div class="progress">
            <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuenow="30"
                aria-valuemin="0" aria-valuemax="100" style="width:30%">
            </div>
        </div>
        <div class="bg-cover">
            <div class="container">
                <!-- Step 1 -->
                <div id="step-1" class="step-container active">
                    <h1 class="text-center my-5 animate__animated animate__fadeInUp description">Select Services</h1>
                    <p class="animate__animated animate__fadeInUp">At VirSME, we understand every business has unique needs. Select one or multiple services from our comprehensive offerings to get started. Whether it's Accounting & Finance, IT Support, or Content Creation, our services are designed to elevate your business to the next level. </p>

                    <div class="row py-5 g-5 w-100  animate__animated animate__fadeInUp " id="renderServices">
                    </div>
                    <div id="services-bag" class="w-25  p-4 rounded">
                        <ul id="bag-items" class="list-unstyled"></ul>
                    </div>
                    <div class=" animate__animated animate__fadeInUp animate__delay-1s">
                        <button class="btn btn-primary btn-step hvr-icon-wobble-horizontal m-auto mt-4" onclick="goToStep(2)">Next <i class="fa-solid fa-arrow-right-long ms-2 hvr-icon"></i></button>
                    </div>
                </div>
                <!-- Step 2 -->
                <div id="step-2" class="step-container py-3">
                    <h1 class="text-center my-5 animate__animated animate__fadeInUp">Select Business Size</h1>
                    <p class=" animate__animated animate__fadeInUp description">Select your business size below, and we’ll recommend the ideal number of hours to assist you with the services you’ve chosen. You’ll also have the flexibility to fine-tune your hours in next step because at VirSME, your success is our priority. Let’s match your ambitions with the right level of support!</p>
                    <form class="py-3">
                        <div class="swiper mySwiper animate__animated animate__fadeInUp">
                            <div class="swiper-wrapper py-5">
                                <div class="swiper-slide slide-item">
                                    <div class="business-card  " data-value="5" id="startup">
                                        <h4>Startup</h4>
                                        <p>5 Hours</p>
                                        <div class="selected-services">
                                        </div>
                                        <button type="button" class="btn-select">Select</button>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="business-card  " data-value="10" id="small-business">
                                        <h4>Small Business</h4>
                                        <p>10 Hours</p>
                                        <div class="selected-services">
                                            <h5>Selected Services:</h5>
                                        </div>

                                        <button type="button" class="btn-select">Select</button>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item swiper-slide-active">
                                    <div class="business-card  " data-value="15" id="medium-business">
                                        <h4>Medium Business</h4>
                                        <p>15 Hours</p>
                                        <div class="selected-services">
                                            <h5>Selected Services:</h5>
                                        </div>
                                        <button type="button" class="btn-select">Select</button>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="business-card  " data-value="20" id="enterprise">
                                        <h4>Enterprise</h4>
                                        <p>20 Hours</p>
                                        <div class="selected-services">
                                            <h5>Selected Services:</h5>
                                        </div>
                                        <button type="button" class="btn-select">Select</button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <h2 class="text-center mt-4 animate__animated animate__fadeInUp animate__delay-1s">Annual Revenue</h2>
                        <!-- Styled Dropdown -->
                        <div class="custom-dropdown mx-auto mb-5 text-center py-3 w-100 animate__animated animate__fadeInUp animate__delay-1s">
                            <button
                                class="btn dropdown-toggle custom-dropdown-button w-100"
                                type="button"
                                id="dropdownMenuButton"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Select Revenue
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">100+</a></li>
                                <li><a class="dropdown-item" href="#">1000+</a></li>
                                <li><a class="dropdown-item" href="#">10,000+</a></li>
                                <li><a class="dropdown-item" href="#">1M+</a></li>
                            </ul>
                        </div>
                    </form>
                    <div class="d-flex justify-content-between mt-2 animate__animated animate__fadeInUp animate__delay-2s">
                        <button class="btn btn-secondary btn-step hvr-icon-wobble-horizontal  " onclick="goToStep(1)"><i class="fa-solid fa-arrow-left-long  hvr-icon me-2"></i> Back</button>
                        <button class="btn btn-primary btn-step hvr-icon-wobble-horizontal  " onclick="goToStep(3)">Next <i class="fa-solid fa-arrow-right-long ms-2 hvr-icon"></i></button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div id="step-3" class="step-container">
                    <h1 class="text-center my-5 animate__animated animate__fadeInUp">Summary</h1>
                    <div class="inactive">
                        <h5 class="mb-2">More Services: </h5>
                        <ul class="list-inline" id="unselected-services">
                        </ul>
                    </div>
                    <div class="table-container  animate__animated animate__fadeInUp">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Price per Hour</th>
                                    <th>Hours</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody id="summary-body"></tbody>
                        </table>
                    </div>
                    <div class="totals-container animate__animated animate__fadeInUp animate__delay-1s">
                        <p><strong>Total Hours:</strong> <span id="total-hours"></span></p>
                        <p><strong>Total Cost:</strong> $<span id="total-cost"></span></p>
                    </div>
                    <div class="d-flex justify-content-between mt-5 animate__animated animate__fadeInUp animate__delay-1s">
                        <button class="btn btn-secondary btn-step hvr-icon-wobble-horizontal  " onclick="goToStep(2)"> <i class="fa-solid fa-arrow-left-long me-2 hvr-icon"></i> Back</button>
                        <button class="btn btn-submit btn-step hvr-icon-push  " id="submitForm">Submit</button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="errorMsg" tabindex="-1" aria-labelledby="errorLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body" id="displayError">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect/dist/core.js"></script>
    <script>
        const services = [{
                name: "Accounting & Finance",
                price: 500
            },
            {
                name: "Software Development & Maintenance",
                price: 700
            },
            {
                name: "Human Resource",
                price: 300
            },
            {
                name: "Content Creation & Branding",
                price: 600
            },
            {
                name: "IT Support",
                price: 400
            },
        ];

        let selectedServices = [];

        function renderServices() {
            const serviceContainer = document.getElementById("renderServices");
            serviceContainer.innerHTML = ""; // Clear existing content

            services.forEach((service) => {
                // Create button element for each service
                const serviceButton = document.createElement("button");
                serviceButton.classList.add("service-box", "hvr-underline-reveal");
                serviceButton.setAttribute("data-service", service.name);
                serviceButton.setAttribute("data-price", service.price);
                serviceButton.textContent = service.name;

                // Create wrapper div for layout
                const serviceWrapper = document.createElement("div");
                serviceWrapper.classList.add("col-md-4", "mb-3");
                serviceWrapper.appendChild(serviceButton);

                // Append to container
                serviceContainer.appendChild(serviceWrapper);

                // Add click event to service button
                serviceButton.addEventListener("click", function() {
                    const serviceName = this.getAttribute("data-service");
                    const servicePrice = parseInt(this.getAttribute("data-price"));

                    // Add or remove the service from selectedServices
                    if (selectedServices.some((s) => s.service === serviceName)) {
                        selectedServices = selectedServices.filter(
                            (s) => s.service !== serviceName
                        );
                        this.classList.remove("selected");
                    } else {
                        selectedServices.push({
                            service: serviceName,
                            price: servicePrice,
                            hours: 0,
                        });
                        this.classList.add("selected");
                    }

                    const bag = document.getElementById("services-bag");
                    const bagList = document.getElementById("bag-items");

                    // Prevent duplicates in the bag
                    if (
                        [...bagList.children].some(
                            (item) =>
                            item.getAttribute("data-service") ===
                            this.getAttribute("data-service")
                        )
                    ) {
                        return;
                    }

                    // Clone the service button and animate to the bag
                    const clone = this.cloneNode(true);
                    document.body.appendChild(clone);

                    // Get positions for animation
                    const rect = this.getBoundingClientRect();
                    const bagRect = bag.getBoundingClientRect();

                    // Hide the service button
                    this.style.visibility = "hidden";

                    // Set initial position for the clone
                    gsap.set(clone, {
                        position: "absolute",
                        left: rect.left,
                        top: rect.top,
                        zIndex: 999,
                        width: rect.width,
                        height: rect.height,
                    });

                    // Animate the clone into the bag
                    gsap.to(clone, {
                        duration: 1,
                        x: bagRect.left - rect.left + 20,
                        y: bagRect.top - rect.top + 20,
                        width: 350,
                        height: 50,
                        scale: 0.5,
                        opacity: 0.8,
                        onComplete: () => {
                            clone.remove();

                            // Add the item to the bag
                            const listItem = document.createElement("li");
                            listItem.className = "bag-item";
                            listItem.textContent = service.name;
                            listItem.setAttribute("data-service", service.name); // Add a data attribute for reference
                            bagList.appendChild(listItem);

                            // Animate the list item appearance
                            gsap.fromTo(
                                listItem, {
                                    opacity: 0
                                }, {
                                    duration: 0.5,
                                    opacity: 1
                                }
                            );
                        },
                    });
                });
            });
        }

        function renderUnselectedServices() {
            const unselectedServices = services.filter(service =>
                !selectedServices.some(selected => selected.service === service.name)
            );

            const unselectedList = document.getElementById("unselected-services");
            unselectedList.innerHTML = ""; // Clear existing content

            unselectedServices.forEach(service => {
                const listItem = document.createElement("li");
                const inactiveButton = document.createElement("button");
                inactiveButton.classList.add("btn");
                listItem.classList.add("list-inline-item");
                listItem.appendChild(inactiveButton);
                inactiveButton.textContent = `${service.name}`;
                unselectedList.appendChild(listItem);
            });
        }

        // Remove item from bag with animation and restore service button
        document.getElementById("bag-items").addEventListener("click", function(event) {
            if (event.target.classList.contains("bag-item")) {
                const serviceName = event.target.getAttribute("data-service");

                gsap.to(event.target, {
                    duration: 0.5,
                    opacity: 0,
                    scale: 0.5,
                    onComplete: () => {
                        // Remove the item from the bag
                        event.target.remove();

                        // Restore the visibility of the service button
                        document.querySelectorAll(".service-box").forEach((serviceBox) => {
                            if (serviceBox.getAttribute("data-service") === serviceName) {
                                serviceBox.style.visibility = "visible";
                                serviceBox.classList.remove("selected"); // Remove selected class
                            }
                        });

                        // Remove the service from selectedServices
                        selectedServices = selectedServices.filter(
                            (s) => s.service !== serviceName
                        );
                    },
                });
            }
        });

        // Call renderServices on page load
        document.addEventListener("DOMContentLoaded", () => {
            renderServices();
        });

        function goToStep(step) {
            const totalSteps = 3; // Total steps including Step 0 (future)
            const progressBar = document.getElementById('progress-bar');
            const minWidth = 30; // Initial width for Step 1
            // Validation logic for Step 1
            if (step === 2) {
                if (selectedServices.length === 0) {
                    Swal.fire({
                        title: "Required!",
                        text: "Select at least one service to move forward",
                        icon: "error",
                        confirmButtonColor: "#3085d6"
                    });
                    return; // Stop execution, do not proceed to next step
                }
            }

            // Validation logic for Step 2
            if (step === 3) {
                const businessSize = document.querySelector('.business-card.active');
                const revenueSelected = document.getElementById('dropdownMenuButton').textContent.trim() !== 'Select Revenue';
                let errorModal = new bootstrap.Modal(document.getElementById('errorMsg'));
                if (!businessSize) {
                    Swal.fire({
                        title: "Required!",
                        text: "Business Size is Required.",
                        icon: "error",
                        confirmButtonColor: "#3085d6"
                    });
                    return; // Stop execution, do not proceed to next step
                } else if (!revenueSelected) {
                    Swal.fire({
                        title: "Required!",
                        text: "Revenue is Required.",
                        icon: "error",
                        confirmButtonColor: "#3085d6"
                    });
                    return; // Stop execution, do not proceed to next step
                }
                renderUnselectedServices();
            }

            document.querySelectorAll('.step-container').forEach(container => {
                container.classList.remove('active');
            });
            document.getElementById(`step-${step}`).classList.add('active');

            // Calculate the progress bar width
            let progressPercentage = minWidth + ((step - 1) / (totalSteps - 1)) * (100 - minWidth);

            // Update the progress bar width
            progressBar.style.width = `${progressPercentage}%`;
            progressBar.setAttribute('aria-valuenow', progressPercentage);
            // progressBar.textContent = `Step ${step}`;

            $(document).ready(function() {
                document.querySelectorAll('.btn-select').forEach(button => {
                    button.addEventListener('click', function() {
                        // Clear active class from all cards
                        document.querySelectorAll('.business-card').forEach(card => {
                            card.classList.remove('active');
                            const btn = card.querySelector('.btn-select');
                            btn.innerHTML = 'Select'; // Reset button text
                            btn.classList.remove('active-button'); // Remove custom class
                        });

                        const parentCard = this.closest('.business-card');
                        parentCard.classList.add('active');

                        // Change button text and add pseudo-class styling
                        const $button = $(this);
                        $button.fadeOut(400, function() {
                            this.innerHTML = 'Selected'; // Change to 'Selected'
                            this.classList.add('active-button');
                            // Add active-button class
                            $button.fadeIn(400);
                        });
                    });
                });
            });



            if (step == 2) {
                // Get all the `selected-services` elements in all slides
                const servicesElements = document.querySelectorAll('.selected-services');

                // Loop through each `selected-services` element
                servicesElements.forEach(servicesElement => {
                    // Clear any existing content to avoid duplication
                    servicesElement.innerHTML = '<h5>Selected Services:</h5>';

                    // Create a new list element
                    const servicesList = document.createElement('ul');

                    // Loop through the `selectedServices` array and populate the list
                    selectedServices.forEach(service => {
                        const listItem = document.createElement('li');
                        listItem.innerHTML = `<i class="fa fa-check" aria-hidden="true"></i> ${service.service}`;
                        servicesList.appendChild(listItem);
                    });

                    // Append the populated list to the current `selected-services` element
                    servicesElement.appendChild(servicesList);
                });
            }


            if (step === 3) {
                // Get selected business size hours
                const businessSize = document.querySelector('.business-card.active');
                const hours = businessSize ? parseInt(businessSize.getAttribute('data-value')) : 0;

                // Update hours for all selected services
                selectedServices.forEach(service => {
                    service.hours = hours;
                });

                // Render summary
                renderSummary(hours);
            }
        }

        function renderSummary() {
            const summaryBody = document.getElementById('summary-body');

            if (selectedServices.length === 0) {
                Swal.fire({
                    title: "All services removed!",
                    text: "You will be redirected to Step 1 to select services again.",
                    icon: "info",
                    confirmButtonColor: "#3085d6"
                }).then(() => {
                    goToStep(1); // Redirect to Step 1
                });
                return; // Stop further rendering
            }

            summaryBody.innerHTML = selectedServices
                .map(service => `
            <tr>
                <td>${service.service}</td>
                <td>$${service.price}</td>
                <td>
                    <input type="number" class="form-control summary-hours-input" data-service="${service.service}" value="${service.hours}" min="0">
                </td>
                <td>$${(service.price * service.hours).toFixed(2)}</td>
                <td>
                    <button class="btn btn-sm delete-row" data-service="${service.service}">
                        <i class="fa fa-xmark text-light"></i>
                    </button>
                </td>
               
            </tr>
        `)
                .join('');

            // Update total hours and cost
            updateTotal();

            // Add event listeners for dynamic input changes
            document.querySelectorAll('.summary-hours-input').forEach(input => {
                input.addEventListener('input', function() {
                    const service = this.getAttribute('data-service');
                    const newHours = Math.max(0, parseInt(this.value) || 0); // Handle invalid input
                    const index = selectedServices.findIndex(s => s.service === service);

                    if (index !== -1) {
                        selectedServices[index].hours = newHours;
                        updateTotal();
                    }
                });
            });
            document.querySelectorAll('.delete-row').forEach(button => {
                button.addEventListener('click', function() {
                    const service = this.getAttribute('data-service');
                    deleteServiceRow(service);
                });
            });
        }

        function deleteServiceRow(serviceName) {
            Swal.fire({
                title: "Are you sure?",
                text: "You can add this service again from step 1!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Find the service in the selectedServices array
                    const index = selectedServices.findIndex(s => s.service === serviceName);
                    if (index !== -1) {
                        selectedServices.splice(index, 1); // Remove the service
                        const bagItems = document.querySelectorAll('#bag-items .bag-item');
                        bagItems.forEach(item => {
                            if (item.getAttribute('data-service') === serviceName) {
                                item.remove(); // Remove from the service bag
                            }
                        });
                        const serviceBoxes = document.querySelectorAll('.service-box');
                        serviceBoxes.forEach(box => {
                            if (box.getAttribute('data-service') === serviceName) {
                                box.style.visibility = 'visible'; // Make the service box visible
                                box.classList.remove('selected'); // Remove the selected state
                            }
                        });

                        Swal.fire({
                            title: "Deleted!",
                            text: "The service has been removed.",
                            icon: "success",
                            confirmButtonColor: "#3085d6"
                        });
                    }

                    renderSummary();

                }
            });

            // const index = selectedServices.findIndex(s => s.service === serviceName);
            // if (index !== -1) {
            //     selectedServices.splice(index, 1); // Remove the service
            // }

            // renderSummary();
        }

        function updateTotal() {
            const totalHours = selectedServices.reduce((sum, service) => sum + service.hours, 0);
            const totalCost = selectedServices.reduce((sum, service) => sum + service.price * service.hours, 0);
            document.getElementById('total-hours').innerText = totalHours;
            document.getElementById('total-cost').innerText = totalCost.toFixed(2);
        }

        const dropdownButton = document.getElementById('dropdownMenuButton');
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        // Add click event listener to each dropdown item
        dropdownItems.forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default anchor behavior
                const selectedText = this.textContent; // Get the text of the clicked item
                dropdownButton.textContent = selectedText; // Update the button text
                // dropdownButton.style.color = '#fff';
                // dropdownButton.style.borderBottom = '1px solid #fff';
            });
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            centeredSlides: true,
            initialSlide: 1,
            // autoplay: {
            //     delay: 4000,
            //     disableOnInteraction: true,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {

                240: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                545: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },

                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },

            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>