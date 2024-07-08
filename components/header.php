        <header class="rainbow-header header-default header-left-align header-not-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-6 col-4 position-static">
                        <div class="header-left d-flex">
                            <div class="logo">
                                <a href="./">
                                    <img class="logo-light" src="img/Just-Another-Logo white.png" alt="Corporate Logo">
                                    <img class="logo-dark" src="img/Just-Another-Logo (2).png" alt="Corporate Logo">
                                </a>
                            </div>
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
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-8">
                        <div class="header-right">
                            <div class="header-btn">
                                <!-- <a class="btn-default btn-small" href="http://localhost/mavens%20advisor/customer/login">Login</a> -->
                                     <?php
                                    if(isset($_SESSION['email_address'])) {
                                        echo '<a class="btn-default btn-small" href="http://localhost/mavens%20advisor/customer/">Dashboard</a>';
                                    } else {
                                        echo '<a class="btn-default btn-small" href="http://localhost/mavens%20advisor/customer/login">Login</a>';
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
                            <div id="my_switcher" class="my_switcher">
                                <ul>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                            <img class="sun-image" src="assets/images/icons/sun-01.svg" alt="Sun images">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                            <img class="Victor Image" src="assets/images/icons/vector.svg" alt="Vector Images">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </header>