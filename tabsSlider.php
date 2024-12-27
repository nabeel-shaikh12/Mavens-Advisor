<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Slider with Auto-Switching Content</title>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Tab Styling */
        .tab {
            display: inline-block;
            margin-right: 15px;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
        }

        /* Active tab style */
        .tab.active {
            background-color: #0b7ffe;
            color: white;
        }

        /* Tab Content */
        .tab-content {
            display: none;
            padding: 20px;
            background-color: #e9e9e9;
            margin-top: 20px;
            border-radius: 8px;
        }

        .tab-content.active {
            display: block;
        }

        .owl-carousel .tab {
            width: 100%;
        }
    </style>
</head>
<body>

<section class="tab-slider-section">
    <div class="container">
        <!-- Tabs Carousel -->
        <div class="owl-carousel tabs-carousel">
            <div class="tab" data-tab="1">Accounting & Bookkeeping</div>
            <div class="tab" data-tab="2">Financial Management</div>
            <div class="tab" data-tab="3">Strategic Advice</div>
            <div class="tab" data-tab="4">IT Support</div>
            <div class="tab" data-tab="5">Marketing</div>
            <div class="tab" data-tab="6">Sales Strategy</div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="tab-content-1">Content for Accounting & Bookkeeping</div>
        <div class="tab-content" id="tab-content-2">Content for Financial Management</div>
        <div class="tab-content" id="tab-content-3">Content for Strategic Advice</div>
        <div class="tab-content" id="tab-content-4">Content for IT Support</div>
        <div class="tab-content" id="tab-content-5">Content for Marketing</div>
        <div class="tab-content" id="tab-content-6">Content for Sales Strategy</div>
    </div>
</section>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
    // Initialize Owl Carousel
    $('.tabs-carousel').owlCarousel({
        items: 3, // 3 tabs per slide
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, // Slide every 2 seconds
        nav: true,
    });

    // Activate the first tab and its content initially
    let currentTab = 1;
    activateTab(currentTab);

    // Auto-switch tab content every 2 seconds
    setInterval(function(){
        currentTab = currentTab < 6 ? currentTab + 1 : 1; // Cycle through tabs
        activateTab(currentTab);
    }, 2000);

    // Function to activate a tab and show its content
    function activateTab(tabNumber) {
        // Remove active class from all tabs and contents
        $('.tab').removeClass('active');
        $('.tab-content').removeClass('active');

        // Add active class to the current tab and its content
        $('.tab[data-tab="' + tabNumber + '"]').addClass('active');
        $('#tab-content-' + tabNumber).addClass('active');
    }
});
</script>

</body>
</html>
