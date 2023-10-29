<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MyShop - Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- all css here -->
        <link rel="stylesheet" href="{{ asset('assetss/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetss/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/icofont.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/bundle.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assetss/css/responsive.css')}}">
        <script src="{{ asset('assetss/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    </head>


    <body>
        <div class="notification-section notification-section-padding  notification-img ptb-10">
            <div class="container-fluid">
                <div class="notification-wrapper">
                    <div class="notification-pera-graph">
                        <p>Get A big Discount for Gadgets. 10% to 70% Discount for all products. Save money</p>
                    </div>
                    <div class="notification-btn-close">
                        <div class="notification-btn">
                            <a href="#">Shop Now</a>
                        </div>
                        <div class="notification-close notification-icon">
                            <button><i class="pe-7s-close"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="header-top-wrapper-2 border-bottom-2">
                <div class="header-info-wrapper pl-200 pr-200">
                    <div class="header-contact-info">
                        <ul>
                            <li><i class="pe-7s-call"></i> +225 07 5944 5209</li>
                            <li><i class="pe-7s-mail"></i> <a href="#">company@domail.info</a></li>
                        </ul>
                    </div>
                    <div class="electronics-login-register">
                        <ul>
                            <li><a href="{{ route('login') }}"><i class="pe-7s-users"></i>Se Connecter</a></li>
                            <li><a href="{{ route('register') }}"><i class="pe-7s-users"></i>Inscription</a></li>
                            <li><a data-bs-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-repeat"></i>Comparer</a></li>
                            <li><a href="wishlist.html"><i class="pe-7s-like"></i>Favoris</a></li>
                            <li><a class="border-none" href="#"><span>$</span>CFA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @if ($about != true)
                <div class="header-bottom pt-40 pb-30 clearfix">
                    <div class="header-bottom-wrapper pr-200 pl-200">
                        <div class="logo-3">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-3.png" alt="">
                            </a>
                        </div>
                        <div class="categories-search-wrapper">
                            <div class="all-categories">
                                <div class="select-wrapper">
                                    <select class="select">
                                        <option value="">All Categories</option>
                                        <option value="">Smartphones </option>
                                        <option value="">Computers</option>
                                        <option value="">Laptops </option>
                                        <option value="">Camerea </option>
                                        <option value="">Watches</option>
                                        <option value="">Lights </option>
                                        <option value="">Air conditioner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="categories-wrapper">
                                <form action="#">
                                    <input placeholder="Enter Your key word" type="text">
                                    <button type="button"> Search </button>
                                </form>
                            </div>
                        </div>
                        <div class="trace-cart-wrapper">
                            <div class="trace same-style">
                                <div class="same-style-icon">
                                    <a href="#"><i class="pe-7s-plane"></i></a>
                                </div>
                                <div class="same-style-text">
                                    <a href="#">Product <br>trace</a>
                                </div>
                            </div>
                            <div class="categories-cart same-style">
                                <div class="same-style-icon">
                                    <a href="#"><i class="pe-7s-cart"></i></a>
                                </div>
                                <div class="same-style-text">
                                    <a href="cart.html">My Cart <br>02 Item</a>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="#">Acceuil</a></li>
                                        <li><a href="#">pages</a></li>
                                        <li><a href="#">shop</a>
                                            <ul>
                                                <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                                <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                                <li><a href="shop.html">grid 4 column</a></li>
                                                <li><a href="shop-grid-box.html">grid box style</a></li>
                                                <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                                <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                                <li><a href="shop-list-box.html">list box style</a></li>
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-3.html"> tab style 3</a></li>
                                                <li><a href="product-details-4.html">sticky style</a></li>
                                                <li><a href="product-details-5.html">sticky style 2</a></li>
                                                <li><a href="product-details-6.html">gallery style</a></li>
                                                <li><a href="product-details-7.html">gallery style 2</a></li>
                                                <li><a href="product-details-8.html">fixed image style</a></li>
                                                <li><a href="product-details-9.html">fixed image style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">BLOG</a>
                                            <ul>
                                                <li><a href="blog.html">blog 3 colunm</a></li>
                                                <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html"> Contact  </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </header>
        <!-- header end -->

        {{--=============================== THE MAIN BODY BEGIN ===============================--}}
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        {{--=============================== THE MAIN BODY END ===============================--}}

        <footer class="footer-area">
            <div class="footer-top-3 black-bg pt-75 pb-25">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-xl-4">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title-3">Contact Us</h3>
                                <div class="footer-info-wrapper-2">
                                    <div class="footer-address-electro">
                                        <div class="footer-info-icon2">
                                            <span>Address:</span>
                                        </div>
                                        <div class="footer-info-content2">
                                            <p>77 Seventh Streeth Banasree
                                                <br>Road Rampura -2100 Dhaka</p>
                                        </div>
                                    </div>
                                    <div class="footer-address-electro">
                                        <div class="footer-info-icon2">
                                            <span>Phone:</span>
                                        </div>
                                        <div class="footer-info-content2">
                                            <p>+11 (019) 2518 4203
                                                <br>+11 (251) 2223 3353</p>
                                        </div>
                                    </div>
                                    <div class="footer-address-electro">
                                        <div class="footer-info-icon2">
                                            <span>Email:</span>
                                        </div>
                                        <div class="footer-info-content2">
                                            <p><a href="#">domain@mail.com</a>
                                                <br><a href="#">company@domain.info</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xl-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title-3">My Account</h3>
                                <div class="footer-widget-content-3">
                                    <ul>
                                        <li><a href="login.html">Login Hare</a></li>
                                        <li><a href="cart.html">Cart History</a></li>
                                        <li><a href="checkout.html"> Payment History</a></li>
                                        <li><a href="shop.html">Product Tracking</a></li>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-xl-2">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title-3">Information</h3>
                                <div class="footer-widget-content-3">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Our Service</a></li>
                                        <li><a href="#">Pricing Plan</a></li>
                                        <li><a href="#"> Vendor Detail</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xl-3">
                            <div class="footer-widget widget-right mb-40">
                                <h3 class="footer-widget-title-3">Service</h3>
                                <div class="footer-widget-content-3">
                                    <ul>
                                        <li><a href="#">Product Service</a></li>
                                        <li><a href="#">Payment Service</a></li>
                                        <li><a href="#"> Discount Service</a></li>
                                        <li><a href="#">Shopping Service</a></li>
                                        <li><a href="#">Promotional Add</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle black-bg-2 pt-35 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-services-wrapper mb-30">
                                <div class="footer-services-icon">
                                    <i class="pe-7s-car"></i>
                                </div>
                                <div class="footer-services-content">
                                    <h3>Free Shipping</h3>
                                    <p>Free Shipping on Bangladesh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-services-wrapper mb-30">
                                <div class="footer-services-icon">
                                    <i class="pe-7s-shield"></i>
                                </div>
                                <div class="footer-services-content">
                                    <h3>Money Guarentee</h3>
                                    <p>Free Shipping on Bangladesh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-services-wrapper mb-30">
                                <div class="footer-services-icon">
                                    <i class="pe-7s-headphones"></i>
                                </div>
                                <div class="footer-services-content">
                                    <h3>Online Support</h3>
                                    <p>Free Shipping on Bangladesh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom  black-bg pt-25 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="#">Privacy Policy </a></li>
                                        <li><a href="blog.html"> Blog</a></li>
                                        <li><a href="#">Help Center</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="copyright f-right mrg-5">
                                <p>
                                    Copyright ©
                                    <a href="hastech.company/">HasTech</a> 2022 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- all js here -->
        <script src="{{ asset('assetss/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset('assetss/js/popper.js')}}"></script>
        <script src="{{ asset('assetss/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assetss/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assetss/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('assetss/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('assetss/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assetss/js/waypoints.min.js')}}"></script>
        <script src="{{ asset('assetss/js/ajax-mail.js')}}"></script>
        <script src="{{ asset('assetss/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assetss/js/plugins.js')}}"></script>
        <script src="{{ asset('assetss/js/main.js')}}"></script>
    </body>
</html>
