
<!-- <header class="rainbow-header header-default header-left-align header-not-transparent header-sticky" style="background-color: white;"> -->
<header class="rainbow-header header-default header-left-align header-not-transparent header-mobile" style="background:transparent !important;">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-6 position-static">
                <div class="header-left d-flex p-3">
                    <div class="">
                        <a href="./">
                            <img class="responsive-logo" src="./img/Virsme.png" alt="Corporate Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
                <div class="header-right">
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-relative"><a href="./">Home</a>
                            </li>
                            <li><a href="./about">About</a></li>
                            <li class="has-droupdown has-menu-child-item"><a href="./service">Our Services</a>
                            </li>
                            <li><a href="./contact">Contact Us</a></li>
                            <li><a href="./faq">FAQ</a></li>
                        </ul>
                    </nav>
                    <div class="header-btn">
                        <?php
                        if (isset($_SESSION['email_address'])) {
                            echo '<a class="btn-default btn-small" href="http://localhost/mavens%20advisor/customer/">Dashboard</a>';

                        } else {
                            echo '<a href="./customer/login"><button class="gradient-button" style="font-size:15px;border-radius:10px ; padding: 15px 30px 15px;"><span>Login</span></button></a>';
                        }
                        ?>
                    </div>
                    <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>