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
<link rel="stylesheet" href="assets/css/plugins/hover-min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    
    <style>
        body {
            background: linear-gradient(120deg, #1e293b, #0f172a);
            font-family: 'Poppins', sans-serif;
            color: white;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
            background: rgba(255, 255, 255, 0.1);
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
            color: #fff;
        }


        .hvr-underline-reveal:before{
            background: #2077d1 !important;
        }
        /* Business Card Styling */
        .business-card {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid transparent;
        border-radius: 10px;
        padding: 20px 30px;
        text-align: center;
        cursor: pointer;
        color: #fff;
        transition: all 0.3s ease;
        box-shadow: 0 0 8px rgba(217, 217, 217, 0.4);
        min-height: 300px;
        
    }

    .business-card:hover {
        border-color: #2077d1;
        transform: translateY(-5px);
        background: rgba(32, 119, 209, 0.2);
    }


    .business-card.active {
        border-color: #2077d1;
        background: rgba(32, 119, 209, 0.4);
    }
    .business-card p{
        font-size: 14px;
        font-weight: 600;
    }
    .swiper-slide-active .business-card {
    border-color: #007bff;
    transform: scale(1.1);
    background: #014083;
    box-shadow: 0 0 12px rgba(0, 123, 255, 0.5);
    background-image: url(img/plan-bg.png);
    background-size: cover;
}
    .swiper-slide-active .business-card h4{
        font-weight: 600;
    font-size: 23px;
    color: #bdbdbdad;
}
.selected-services ul{
    width: 100%;
    margin: 0 0 10px 0;
    padding: 0;
    text-align: center;
}
.selected-services h5{
    font-size: 15px;
    font-weight: 600;
}
.selected-services ul li{
    color: #eee;
    margin: 0 8px 15px 0;
    display: block;
    font-size: 14px;
    color: #797979;
    position: relative;
    font-weight: 300;
}
.selected-services ul li i{
    font-size: 15px;
    margin-right: 10px;
}
.swiper-slide-active .business-card .selected-services ul li{
color: #eee;
}
    .swiper-slide-active .business-card .btn-select{
        border: 1px solid #fff;
        background-color: transparent;
}
    .swiper-slide-active .business-card .btn-select:hover{
        border: 1px solid #195ba1;
        background-color: #195ba1;
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
    }

    .custom-dropdown-button {
        /* background: rgba(32, 119, 209, 0.2); */
        border-bottom: 1px solid #ffffff73;
        color: #ffffff73;
        transition: all 0.3s ease;
        border-radius: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .custom-dropdown-button:hover {
        /* background: rgba(32, 119, 209, 0.4); */
        border-bottom: 1px solid #fff;
        color: #fff;
    }
    .custom-dropdown-button.show{
        border-color: unset;
        border: 0;
        border-bottom: 1px solid #fff;
    }
    .custom-dropdown-button:active {
        /* background: rgba(32, 119, 209, 0.4); */
        border: 0;
        color: #fff;
    }

    .dropdown-menu {
        background: rgba(255, 255, 255, 0.1);

    }

    .dropdown-menu .dropdown-item {
        color: #fff;
        transition: all 0.3s ease;
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
    background-color: #007bff;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

/* Hover effect on rows */
.styled-table tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.1);
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

/* Totals container */
.totals-container {
    margin-top: 20px;
    padding: 10px;
    background: rgba(0, 123, 255, 0.1);
    border-radius: 10px;
    text-align: left;
    font-size: 18px;
}

.totals-container p {
    margin: 5px 0;
    color: #ffffff;
}
.summary-hours-input{
    background-color: unset !important;
    color: #fff;
    border-color: #717070;
}
.summary-hours-input:focus{
    color: #fff;
}
.btn-step{
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    padding: 15px 35px;
    width: 135px;
}
#services-bag {
    position: absolute;
    bottom: 20px;
    right: 20px;
    max-height: 400px;
    overflow-y: auto;
    box-shadow: 0px 4px 10px rgb(0 0 0 / 20%);
    background: rgba(175, 175, 175, 0.8);
    padding: 20px;
    border-radius: 10px;
    width: 200px;
}

.bag-item {
    background: rgba(255, 255, 255, 0.1);
    margin: 10px 0;
    padding: 10px;
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

    .swiper-slide-next{
        z-index: -1;
    }
    .swiper-pagination-bullet{
        background:var(--swiper-pagination-bullet-inactive-color,#fff) ;
        opacity: var(--swiper-pagination-bullet-inactive-opacity, .6) !important;
    }
    .swiper-pagination-bullet-active {
    opacity: var(--swiper-pagination-bullet-opacity, 1) !important;
    background: var(--swiper-pagination-color, var(--swiper-theme-color)) !important;
}
.btn-select{
    margin: 13px 0 5px 0;
    padding: 5px 30px;
    display: inline-block;
    color: #fff;
    border: 1px solid #195ba1;
    box-shadow: 0px 0px 4px 0px #567fab7a;
    border-radius: 30px;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    background: #195ba1;
    font-size: 14px;
    margin-top: 50%;
}
.swiper-pagination{
    position: unset;
}

.mySwiper {
    width: 100%; /* Default for extra-small and small screens */
}

@media screen and (min-width: 768px) { /* Medium screens and up (md) */
    .mySwiper{
        width: 75%;
    }
}

@media screen and (min-width: 992px) { /* Large screens and up (lg) */
    .mySwiper {
        width: 75%;
    }
}

@media screen and (min-width: 1200px) { /* Extra-large screens and up (xl) */
    .mySwiper {
        width: 75%;
    }
}

    </style>

</head>
<body>
    <div class="container">
        <!-- Step 1 -->
        <div id="step-1" class="step-container active">
            <h3>Select Services</h3>
            <div class="row py-5 g-5">
                <div class="col-md-4 mb-3">
                    <button class="service-box hvr-underline-reveal" data-service="Finance" data-price="500">Finance</button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="service-box hvr-underline-reveal" data-service="Web Design" data-price="700">Web Design</button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="service-box hvr-underline-reveal" data-service="HR" data-price="300">HR</button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="service-box hvr-underline-reveal" data-service="Digital Marketing" data-price="600">Digital Marketing</button>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="service-box hvr-underline-reveal" data-service="Custom Service" data-price="400">Custom Service</button>
                </div>
            </div>
            <div id="services-bag" class="w-25  p-4 rounded">
                <ul id="bag-items" class="list-unstyled"></ul>
            </div>
    <div class="">
        <button class="btn btn-primary btn-step hvr-icon-wobble-horizontal m-auto mt-4" onclick="goToStep(2)">Next <i class="fa-solid fa-arrow-right-long hvr-icon"></i></button>
    </div>
        </div>


        <!-- Step 2 -->
        <div id="step-2" class="step-container py-3">

            <form class="py-3">
                <h3 class="text-center">Select Business Size</h3>
                <div class="swiper mySwiper">
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
                <!-- <div class="py-5 row justify-content-center ">
                    <div class="col-md-3">
                        <div class="business-card mx-2" data-value="5" id="startup">
                            <h5>Startup</h5>
                            <p>5 Hours</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="business-card mx-2" data-value="10" id="small-business">
                            <h5>Small Business</h5>
                            <p>10 Hours</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="business-card mx-2" data-value="15" id="medium-business">
                            <h5>Medium Business</h5>
                            <p>15 Hours</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="business-card mx-2" data-value="20" id="enterprise">
                            <h5>Enterprise</h5>
                            <p>20 Hours</p>
                        </div>
                    </div>
                </div> -->

                <h3 class="text-center mt-4">Annual Revenue</h3>
                <!-- Styled Dropdown -->
                <div class="custom-dropdown mx-auto text-center py-3 w-75">
                    <button 
                        class="btn dropdown-toggle custom-dropdown-button w-100" 
                        type="button" 
                        id="dropdownMenuButton" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                        Select Revenue
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Startup</a></li>
                        <li><a class="dropdown-item" href="#">1000+</a></li>
                        <li><a class="dropdown-item" href="#">10,000+</a></li>
                        <li><a class="dropdown-item" href="#">1M+</a></li>
                    </ul>
                </div>
            </form>
            <div class="d-flex justify-content-between mt-4">
                <button class="btn btn-secondary btn-step hvr-icon-wobble-horizontal  " onclick="goToStep(1)"><i class="fa-solid fa-arrow-left-long  hvr-icon"></i> Back</button>
                <button class="btn btn-primary btn-step hvr-icon-wobble-horizontal  " onclick="goToStep(3)">Next <i class="fa-solid fa-arrow-right-long  hvr-icon"></i></button>
            </div>
        </div>

        <!-- Step 3 -->
        <div id="step-3" class="step-container">
            <h3>Summary</h3>
            <div class="table-container">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Price per Hour</th>
                            <th>Hours</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody id="summary-body"></tbody>
                </table>
            </div>
            <div class="totals-container">
                <p><strong>Total Hours:</strong> <span id="total-hours"></span></p>
                <p><strong>Total Cost:</strong> $<span id="total-cost"></span></p>
            </div>
            <button class="btn btn-primary btn-step hvr-icon-wobble-horizontal  " onclick="goToStep(2)"> <i class="fa-solid fa-arrow-left-long  hvr-icon"></i> Back</button>
        </div>

    </div>
<script>
    document.querySelectorAll('.service-box').forEach(serviceBox => {
        serviceBox.addEventListener('click', function () {
            const bag = document.getElementById('services-bag');
            const bagList = document.getElementById('bag-items');

            // Prevent duplicates
            if ([...bagList.children].some(item => item.getAttribute('data-service') === this.getAttribute('data-service'))) {
                return;
            }

            // Clone the service box
            const clone = this.cloneNode(true);
            document.body.appendChild(clone);

            // Get position of the service box and the bag
            const rect = this.getBoundingClientRect();
            const bagRect = bag.getBoundingClientRect();

            // Hide the service item
            this.style.visibility = "hidden";

            // Set initial position for the clone
            gsap.set(clone, {
                position: "absolute",
                left: rect.left,
                top: rect.top,
                zIndex: 999,
                width: rect.width, // Set the initial width to match the original element
                height: rect.height
            });

            // Animate the clone into the bag
            gsap.to(clone, {
                duration: 1,
                x: bagRect.left - rect.left + 20, // Slight padding for alignment
                y: bagRect.top - rect.top + 20,
                width: 350, // Final width of the clone
                height: 50,
                scale: 0.5,
                opacity: 0.8,
                onComplete: () => {
                    clone.remove();

                    // Add the item to the bag
                    const listItem = document.createElement('li');
                    listItem.className = 'bag-item';
                    listItem.textContent = this.textContent;
                    listItem.setAttribute('data-service', this.getAttribute('data-service')); // Add a data attribute for reference
                    bagList.appendChild(listItem);

                    // Animate the list item appearance
                    gsap.fromTo(listItem, { opacity: 0 }, { duration: 0.5, opacity: 1 });
                }
            });
        });
    });

    // Remove item from bag with animation and restore to services
    document.getElementById('bag-items').addEventListener('click', function (event) {
        if (event.target.classList.contains('bag-item')) {
            const serviceName = event.target.getAttribute('data-service');

            gsap.to(event.target, {
                duration: 0.5,
                opacity: 0,
                scale: 0.5,
                onComplete: () => {
                    // Remove the item from the bag
                    event.target.remove();

                    // Find the corresponding service box and make it visible again
                    document.querySelectorAll('.service-box').forEach(serviceBox => {
                        if (serviceBox.getAttribute('data-service') === serviceName) {
                            serviceBox.style.visibility = "visible";

                            // Deselect the service box
                            const index = selectedServices.findIndex(s => s.service === serviceName);
                            if (index !== -1) {
                                selectedServices.splice(index, 1);
                                serviceBox.classList.remove('selected');
                            }
                        }
                    });
                }
            });
        }
    });
        
    let selectedServices = [];

    document.querySelectorAll('.service-box').forEach(box => {
    box.addEventListener('click', function () {
        const service = this.getAttribute('data-service');
        const price = parseInt(this.getAttribute('data-price'));
        if (selectedServices.some(s => s.service === service)) {
            selectedServices = selectedServices.filter(s => s.service !== service);
            this.classList.remove('selected');
        } else {
            selectedServices.push({ service, price, hours: 0 });
            this.classList.add('selected');
        }
    });
    });

    function goToStep(step) {
    document.querySelectorAll('.step-container').forEach(container => {
        container.classList.remove('active');
    });
    document.getElementById(`step-${step}`).classList.add('active');

    document.querySelectorAll('.business-card').forEach(card => {
        card.addEventListener('click', function () {
            // Clear active class from all cards
            document.querySelectorAll('.business-card').forEach(c => c.classList.remove('active'));
            // Add active class to the clicked card
            this.classList.add('active');
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

    function renderSummary(hours) {
    const summaryBody = document.getElementById('summary-body');
    summaryBody.innerHTML = selectedServices
        .map(service => `
            <tr>
                <td>${service.service}</td>
                <td>$${service.price}</td>
                <td>
                    <input type="number" class="form-control summary-hours-input" data-service="${service.service}" value="${service.hours}" min="0">
                </td>
                <td>$${(service.price * service.hours).toFixed(2)}</td>
            </tr>
        `)
        .join('');

    // Update total hours and cost
    updateTotal();

    // Add event listeners for dynamic input changes
    document.querySelectorAll('.summary-hours-input').forEach(input => {
        input.addEventListener('input', function () {
            const service = this.getAttribute('data-service');
            const newHours = Math.max(0, parseInt(this.value) || 0); // Handle invalid input
            const index = selectedServices.findIndex(s => s.service === service);

            if (index !== -1) {
                selectedServices[index].hours = newHours;
                updateTotal();
            }
        });
    });
    }

    function updateTotal() {
    const totalHours = selectedServices.reduce((sum, service) => sum + service.hours, 0);
    const totalCost = selectedServices.reduce((sum, service) => sum + service.price * service.hours, 0);
    document.getElementById('total-hours').innerText = totalHours;
    document.getElementById('total-cost').innerText = totalCost.toFixed(2);

    // Update total costs dynamically in the table rows
    document.querySelectorAll('.summary-hours-input').forEach(input => {
        const service = input.getAttribute('data-service');
        const hours = parseInt(input.value) || 0;
        const price = selectedServices.find(s => s.service === service)?.price || 0;

        const row = input.closest('tr');
        const totalCell = row.querySelector('td:last-child');
        totalCell.textContent = `$${(price * hours).toFixed(2)}`;
    });
    }

    const dropdownButton = document.getElementById('dropdownMenuButton');
    const dropdownItems = document.querySelectorAll('.dropdown-item');

    // Add click event listener to each dropdown item
    dropdownItems.forEach(item => {
    item.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default anchor behavior
        const selectedText = this.textContent; // Get the text of the clicked item
        dropdownButton.textContent = selectedText; // Update the button text
        dropdownButton.style.color = '#fff';
        dropdownButton.style.borderBottom = '1px solid #fff';
    });
    });
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 0,
      loop: true,
      centeredSlides: true,
      initialSlide: 1,
    //   autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
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
        450: {
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
<!-- jQuery (required for Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</body>
</html>