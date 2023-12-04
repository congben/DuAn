<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version One || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="view/images/favicon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="view/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="view/css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="view/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="view/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="view/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="view/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="view/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="view/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="view/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="view/css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="view/style.css?v=<?php echo time(); ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="view/css/responsive.css">
    <!-- Modernizr js -->
    <script src="view/js/vendor/modernizr-2.8.3.min.js"></script>    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Top Left Area -->
                        <div class="col-lg-3 col-md-4">
                            <div class="header-top-left">
                                <ul class="phone-wrap">
                                    <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Left Area End Here -->
                        <!-- Begin Header Top Right Area -->
                        <div class="col-lg-9 col-md-8">
                            <div class="header-top-right">
                                <ul class="ht-menu">
                                    <!-- Begin Setting Area -->
                                    <li>
                                        <?php
                                            if(isset($_SESSION['x_user'])) {
                                                if($_SESSION['x_user']['account_position'] == "Quản trị viên") {
                                                    echo '
                                                        <div class="ht-setting-trigger"><span>'. $_SESSION['x_user']['account_fullName'] .'</span></div>
                                                        <div class="setting ht-setting">
                                                            <ul class="ht-setting-list">
                                                                <li><a href="../admin/index.php">Truy cap quan ly</a></li>
                                                                <li><a href="?op=logout&check=out">Logout</a></li>
                                                            </ul>
                                                        </div>
                                                    ';
                                                } else {
                                                    echo '
                                                        <div class="ht-setting-trigger"><span>'. $_SESSION['x_user']['account_fullName'] .'</span></div>
                                                        <div class="setting ht-setting">
                                                            <ul class="ht-setting-list">
                                                                <li><a href="?op=profile">My Account</a></li>
                                                                <li><a href="?op=logout&check=out">Logout</a></li>
                                                            </ul>
                                                        </div>
                                                    ';
                                                }
                                            } else {
                                                echo '
                                                    <div class="ht-setting-trigger"><span>Setting</span></div>
                                                    <div class="setting ht-setting">
                                                        <ul class="ht-setting-list">
                                                            <li><a href="?op=login">Sign In</a></li>
                                                            <li><a href="?op=cart">Cart</a></li>
                                                        </ul>
                                                    </div>
                                                ';
                                            }
                                        ?>
                                    </li>
                                    <!-- Setting Area End Here -->
                                    <!-- Begin Currency Area -->
                                    <li>
                                        <span class="currency-selector-wrapper">Currency :</span>
                                        <div class="ht-currency-trigger"><span>USD $</span></div>
                                        <div class="currency ht-currency">
                                            <ul class="ht-setting-list">
                                                <li><a href="#">EUR €</a></li>
                                                <li class="active"><a href="#">USD $</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Currency Area End Here -->
                                    <!-- Begin Language Area -->
                                    <li>
                                        <span class="language-selector-wrapper">Language :</span>
                                        <div class="ht-language-trigger"><span>English</span></div>
                                        <div class="language ht-language">
                                            <ul class="ht-setting-list">
                                                <li class="active"><a href="#"><img src="view/images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                <li><a href="#"><img src="view/images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Language Area End Here -->
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Begin Header Middle Area -->
            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Logo Area -->
                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30 img-logo">
                                <a href="index.php">
                                    <img src="view/images/menu/logo/1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                            <!-- Begin Header Middle Searchbox Area -->
                            <form action="?op=search" method="post" class="hm-searchbox">
                                <input type="text" name="valueKey" placeholder="Enter your search key ...">
                                <button class="li-btn" name="btnSearch" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <!-- Header Middle Searchbox Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <?php
                                if(isset($_SESSION['x_user'])) {
                            ?>
                            <div class="header-middle-right">
                                <ul class="hm-menu">
                                    <!-- Begin Header Middle Wishlist Area -->
                                    <li class="hm-wishlist">
                                        <!-- <a href="?op=orderMe">
                                            <span class="cart-item-count wishlist-item-count">0</span>
                                            <i class="fad fa-shopping-cart"></i>
                                        </a> -->
                                    </li>
                                    <!-- Header Middle Wishlist Area End Here -->
                                    <!-- Begin Header Mini Cart Area -->
                                    <li class="hm-minicart">
                                        <!-- <div class="hm-minicart-trigger">
                                            <span class="item-icon"></span>
                                            <span class="item-text">£80.00
                                                <span class="cart-item-count">2</span>
                                            </span>
                                        </div>
                                        <span></span>
                                        <div class="minicart">
                                            <ul class="minicart-product-list">
                                                <li>
                                                    <a href="single-product.html" class="minicart-product-image">
                                                        <img src="view/images/product/small-size/5.jpg" alt="cart products">
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                        <span>£40 x 1</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                            <div class="minicart-button">
                                                <a href="?op=cart" class="li-button li-button-fullwidth li-button-dark">
                                                    <span>View Full Cart</span>
                                                </a>
                                                <a href="?op=checkout" class="li-button li-button-fullwidth">
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                        </div> -->
                                    </li>
                                    <!-- Header Mini Cart Area End Here -->
                                </ul>
                            </div>
                            <?php
                                }
                            ?>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Middle Area End Here -->
            <!-- Begin Header Bottom Area -->
            <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Header Bottom Menu Area -->
                            <div class="hb-menu">
                                <nav>
                                    <ul>
                                        <li class="dropdown-holder"><a href="index.php">Home</a>
                                        </li>
                                        <li class="megamenu-holder"><a href="?op=shop&page=1&start=0">Shop</a>
                                        </li>
                                        <li class="dropdown-holder"><a href="?op=blog">Blog</a>
                                        </li>
                                        <li><a href="?op=about">About Us</a></li>
                                        <li><a href="?op=contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Bottom Menu Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom Area End Here -->
            <!-- Begin Mobile Menu Area -->
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>

        <script>
            $(document).ready(function() {
                $.ajax({
                    url: 'controllers/xuly_order.php',
                    method: "POST",
                    data: {
                        check: 'countOrderHeader'
                    },
                    success: function(data) {
                        $(".hm-wishlist").html(data);
                    }
                });
                $.ajax({
                    url: 'controllers/xuly_cart.php',
                    method: "POST",
                    data: {
                        check: 'countCartHeader'
                    },
                    success: function(data) {
                        $(".hm-minicart").html(data);
                    }
                });
            });
        </script>