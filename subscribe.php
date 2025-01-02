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
    <link rel="stylesheet" href="assets/css/subscription.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/plugins/hover-min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
                <form class="py-3" onsubmit="submitForm(event)">
                    <div id="step-1" class="step-container active">
                        <h1 class="text-center my-5 animate__animated animate__fadeInUp description">Select Services</h1>
                        <div class="row py-5 g-5 w-100 animate__animated animate__fadeInUp" id="renderServices">
                        </div>
                        <div id="services-bag" class="w-25 p-4 rounded">
                            <ul id="bag-items" class="list-unstyled"></ul>
                        </div>
                        <div class="d-flex animate__animated animate__fadeInUp animate__delay-1s">
                            <button type="button" class="btn btn-primary btn-step hvr-icon-wobble-horizontal m-auto mt-4" onclick="goToStep(2, 1)">Next <i class="fa-solid fa-arrow-right-long ms-2 hvr-icon"></i></button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div id="step-2" class="step-container py-3">
                        <h1 class="text-center my-5 animate__animated animate__fadeInUp">Select Business Size</h1>
                        <div class="swiper mySwiper animate__animated animate__fadeInUp">
                            <div class="swiper-wrapper py-5">
                                <div class="swiper-slide slide-item">
                                    <div class="business-card" data-value="5" id="startup">
                                        <h4>Startup</h4>
                                        <p>5 Hours</p>
                                        <div class="selected-services">
                                        </div>
                                        <button type="button" class="btn-select">Select</button>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="business-card" data-value="10" id="small-business">
                                        <h4>Small Business</h4>
                                        <p>10 Hours</p>
                                        <div class="selected-services">
                                            <h5>Selected Services:</h5>
                                        </div>
                                        <button type="button" class="btn-select">Select</button>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item swiper-slide-active">
                                    <div class="business-card" data-value="15" id="medium-business">
                                        <h4>Medium Business</h4>
                                        <p>15 Hours</p>
                                        <div class="selected-services">
                                            <h5>Selected Services:</h5>
                                        </div>
                                        <button type="button" class="btn-select">Select</button>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-item">
                                    <div class="business-card" data-value="20" id="enterprise">
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
                        <div class="custom-dropdown mx-auto mb-5 text-center py-3 w-100 animate__animated animate__fadeInUp animate__delay-1s">
                            <button class="btn dropdown-toggle custom-dropdown-button w-100" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Select Revenue
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">100+</a></li>
                                <li><a class="dropdown-item" href="#">1000+</a></li>
                                <li><a class="dropdown-item" href="#">10,000+</a></li>
                                <li><a class="dropdown-item" href="#">1M+</a></li>
                            </ul>
                        </div>
                        <div class="d-flex my-5 justify-content-between mt-2 animate__animated animate__fadeInUp animate__delay-2s">
                            <button type="button" class="btn btn-secondary btn-step hvr-icon-wobble-horizontal" onclick="goToStep(1, 2)"><i class="fa-solid fa-arrow-left-long hvr-icon me-2"></i> Back</button>
                            <button type="button" class="btn btn-primary btn-step hvr-icon-wobble-horizontal" onclick="goToStep(3, 2)">Next <i class="fa-solid fa-arrow-right-long ms-2 hvr-icon"></i></button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div id="step-3" class="step-container">
                        <h1 class="text-center my-5 animate__animated animate__fadeInUp">Summary</h1>
                        <div class="table-container animate__animated animate__fadeInUp">
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
                        <div class="my-4 inactive animate__animated animate__fadeInUp animate__delay-1s">
                            <h5 class="mb-2">More Services: </h5>
                            <ul class="list-inline horizontal-scroll" id="unselected-services"></ul>
                        </div>
                        <div class="d-flex justify-content-between mt-5 animate__animated animate__fadeInUp animate__delay-1s">
                            <button type="button" class="btn btn-secondary btn-step hvr-icon-wobble-horizontal" onclick="goToStep(2, 3)"> <i class="fa-solid fa-arrow-left-long me-2 hvr-icon"></i> Back</button>
                            <button type="button" class="btn btn-primary btn-step hvr-icon-wobble-horizontal" onclick="goToStep(4, 3)">Next <i class="fa-solid fa-arrow-right-long ms-2 hvr-icon"></i></button>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div id="step-4" class="step-container">
                        <h1 class="text-center my-5 animate__animated animate__fadeInUp">Confirmation & Additional Info</h1>
                        <p class="text-center animate__animated animate__fadeInUp">Review your details and provide any additional information to help us serve you better.</p>
                        <div class="detailsForm animate__animated animate__fadeInUp">
                            <div class="detailFormHead mb-4">
                                <h2>Additional Information</h2>
                            </div>
                            <div class="form-group mb-3">
                                <label for="business-name">Business Name</label>
                                <input type="text" id="business-name" name="business_name" class="form-control" placeholder="Enter your business name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Contact Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your contact email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="additional-info">Additional Information</label>
                                <textarea id="additional-info" name="additional_info" class="form-control" placeholder="Enter additional information"></textarea>
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <button type="button" class="btn btn-secondary btn-step hvr-icon-wobble-horizontal" onclick="goToStep(3, 4)"><i class="fa-solid fa-arrow-left-long me-2 hvr-icon"></i> Back</button>
                                <button type="submit" class="btn btn-submit btn-step hvr-icon-push">Submit <i class="fa-solid fa-check ms-2 hvr-icon"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect/dist/core.js"></script>
    <script src="assets/js/subscription.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            centeredSlides: true,
            initialSlide: 1,
            autoplay: {
                delay: 4000,
                disableOnInteraction: true,
            },
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

        function submitForm(event) {
            event.preventDefault();

            const formData = new FormData();
            formData.append('business_name', document.getElementById('business-name').value.trim());
            formData.append('email', document.getElementById('email').value.trim());
            formData.append('selected_services', JSON.stringify(selectedServices));
            formData.append('business_size', document.querySelector('.business-card.active')?.getAttribute('id') || '');
            formData.append('total_hours', document.getElementById('total-hours').textContent || 0);
            formData.append('total_cost', document.getElementById('total-cost').textContent || 0.0);
            formData.append('additional_info', document.getElementById('additional-info').value.trim());

            fetch('backend.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        Swal.fire({
                            title: 'Success!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonColor: '#3085d6'
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: data.message,
                            icon: 'error',
                            confirmButtonColor: '#3085d6'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while submitting the form.',
                        icon: 'error',
                        confirmButtonColor: '#3085d6'
                    });
                });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>