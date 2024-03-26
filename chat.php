<?php
session_start();

if (!isset($_SESSION['email_address'])) {
    header("Location: customer/login.php");
    exit();
}

$calculatorPrices = $_SESSION['calculatorPrices'] ?? '';
if (isset($_SESSION['calculatorData']) && empty($calculatorPrices)) {
    $calculatorPrices = unserialize($_SESSION['calculatorData']);
}
$prices = [];
if (!empty($calculatorPrices)) {
    foreach ($calculatorPrices as $price) {
        $prices[] = htmlspecialchars($price);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> 
    <title>Chat || Finance</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/MA Logo circle.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="page-top">
    <?php include 'components/topbar.php'?>
    <?php include 'components/header.php'?>
    <div class="container-fluid rainbow-section-gap">
      <div class="row  justify-content-center ">
        <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5 p-5 rounded-lg">
                    <div class="card-body ">
                        <form class="form-group" method="POST" action="./database_operations/calculate_data.php">
                            <h4>Chat</h4>
                            <div class="row">
                                <?php if (isset($_SESSION['email_address'])) : ?>
                                    <input type="hidden" class="form-control border-0 bg-light px-4" placeholder="email" value="<?php echo $_SESSION['email_address']; ?>" readonly>
                                <?php else : ?>
                                    <input type="text" class="form-control border-0 bg-light px-4" placeholder="email">
                                <?php endif; ?>                        
                            </div>
                            <br>
                            <div class="row">
                                <textarea class="form-control border-0 bg-light px-4" placeholder="Total Price" id="totalPrice" name="totalPrice" style="height: auto; margin-left: 0; min-height: 240px; resize: none;" readonly>
                                    <?php 
                                    foreach ($prices as $price) {
                                        echo $price . "\n";
                                    }
                                    ?>
                                </textarea>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 col-md-12 col-lg-12 col-xl-12">
                                    <input type="submit" value="Go to Chat Now" class="btn btn-primary w-100 py-3" />
                                </div>
                            </div>
                            <br>
                            <?php
                            if (isset($_SESSION['successMessage'])) {
                                echo '<div class="alert alert-success">' . $_SESSION['successMessage'] . '</div>';
                                unset($_SESSION['successMessage']); 
                            } elseif (isset($_SESSION['errorMessage'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['errorMessage'] . '</div>';
                                unset($_SESSION['errorMessage']); 
                            }
                            ?>
                        </form>
                    </div>  
                </div>    
            </div>
        </div>   
    </div>
    <div style="margin-top:270px">         
        <?php include 'components/footer.php'?>
    </div>

    <script>
        window.onload = function() {
            var prices = localStorage.getItem('calculatorPrices');
            if (prices) {
                document.getElementById('totalPrice').value = prices;
            }
        };
    </script>
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