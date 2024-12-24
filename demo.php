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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</head>
<style>
    .container {
    display: flex;
    justify-content: space-between;
}

.service-box {
    padding: 15px;
    background: #473b3b1a;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
    transition: transform 0.3s;
}

.bag-container {
    width: 300px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    padding: 15px;
}

.bag-item {
    padding: 10px;
    margin: 5px 0;
    background: #007bff;
    color: white;
    border-radius: 5px;
    list-style-type: none;
    opacity: 0;
}

</style>
<body>
<div class="container d-flex">
    <!-- Left Side: Services -->
    <div id="services-list" class="flex-grow-1">
        <div class="row">
            <div class="col-md-4 mb-3">
                <button class="service-box" data-service="Finance" data-price="500">Finance</button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="service-box" data-service="Web Design" data-price="700">Web Design</button>
            </div>
            <div class="col-md-4 mb-3">
                <button class="service-box" data-service="HR" data-price="300">HR</button>
            </div>
        </div>
    </div>

    <!-- Right Side: Bag -->
    <div id="services-bag" class="bag-container">
        <h4>Your Bag</h4>
        <ul id="bag-items"></ul>
    </div>
</div>

<script>
document.querySelectorAll('.service-box').forEach(serviceBox => {
    serviceBox.addEventListener('click', function () {
        const bag = document.getElementById('services-bag');
        const bagList = document.getElementById('bag-items');

        // Prevent duplicates in the bag
        if ([...bagList.children].some(item => item.textContent === this.textContent)) {
            return;
        }

        // Clone the service box
        const clone = this.cloneNode(true);
        document.body.appendChild(clone);

        // Get position of the service box and the bag
        const rect = this.getBoundingClientRect();
        const bagRect = bag.getBoundingClientRect();

        // Set initial position for the clone
        gsap.set(clone, {
            position: "absolute",
            left: rect.left,
            top: rect.top,
            zIndex: 999
        });

        // Animate the clone into the bag
        gsap.to(clone, {
            duration: 1,
            x: bagRect.left - rect.left,
            y: bagRect.top - rect.top + 20, // Adjust for padding
            scale: 0.5,
            opacity: 0.5,
            onComplete: () => {
                clone.remove();

                // Add the item to the bag
                const listItem = document.createElement('li');
                listItem.className = 'bag-item';
                listItem.textContent = this.textContent;
                bagList.appendChild(listItem);

                // Animate the list item appearance
                gsap.to(listItem, { duration: 0.5, opacity: 1 });
            }
        });
    });
});

// Add remove functionality for items in the bag
document.getElementById('bag-items').addEventListener('click', function (event) {
    if (event.target.classList.contains('bag-item')) {
        // Animate the removal of the item
        gsap.to(event.target, {
            duration: 0.5,
            opacity: 0,
            scale: 0.5,
            onComplete: () => {
                event.target.remove();
            }
        });
    }
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
