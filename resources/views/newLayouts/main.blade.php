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
        @if (isset($homePage) && $homePage == true)
            @include('newLayouts.inc.navbarHome')
        @else
            @include('newLayouts.inc.navbar')
        @endif
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
                                <h3 class="footer-widget-title-3">Contacter Nous</h3>
                                <div class="footer-info-wrapper-2">
                                    <div class="footer-address-electro">
                                        <div class="footer-info-icon2">
                                            <span>Address:</span>
                                        </div>
                                        <div class="footer-info-content2">
                                            <p>Rue F136 Abidjan - Côte d'Ivoire</p>
                                        </div>
                                    </div>
                                    <div class="footer-address-electro">
                                        <div class="footer-info-icon2">
                                            <span>Phone:</span>
                                        </div>
                                        <div class="footer-info-content2">
                                            <p>+225 07 594 45209
                                                <br>+225 05 851 76776</p>
                                        </div>
                                    </div>
                                    <div class="footer-address-electro">
                                        <div class="footer-info-icon2">
                                            <span>Email:</span>
                                        </div>
                                        <div class="footer-info-content2">
                                            <p><a href="#">Gyimahrokib@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xl-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title-3">Compte</h3>
                                <div class="footer-widget-content-3">
                                    <ul>
                                        <li><a href="cart.html">Historique de Panier</a></li>
                                        <li><a href="checkout.html">Historique Payement</a></li>
                                        <li><a href="shop.html">Produit Traquer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-xl-2">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title-3">Service</h3>
                                <div class="footer-widget-content-3">
                                    <ul>
                                        <li><a href="#">Service Produit</a></li>
                                        <li><a href="#">Service API</a></li>
                                        <li><a href="#">Service Payement</a></li>
                                        <li><a href="#">Service Promo </a></li>
                                        <li><a href="#">Service Shopping</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xl-3">
                            <div class="footer-widget widget-right mb-40">
                                <h3 class="footer-widget-title-3">À propos</h3>
                                <div class="footer-widget-content-3">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Nos Services</a></li>
                                        <li><a href="#">Plan de Payement</a></li>
                                        <li><a href="#">Qui sommes-nous ?</a></li>
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
                                    <h3>Livraison Gratuite</h3>
                                    <p>Livraison Gratuite dans Tout la Côte d'Ivoire</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-services-wrapper mb-30">
                                <div class="footer-services-icon">
                                    <i class="pe-7s-shield"></i>
                                </div>
                                <div class="footer-services-content">
                                    <h3>Anonymat Du Client</h3>
                                    <p>Votre Identité est protégé</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-services-wrapper mb-30">
                                <div class="footer-services-icon">
                                    <i class="pe-7s-headphones"></i>
                                </div>
                                <div class="footer-services-content">
                                    <h3>Support En ligne</h3>
                                    <p>Support en ligne disponible 24h/7jours</p>
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
                                        <li><a href="#">Centre d'Aide</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="copyright f-right mrg-5">
                                <p>
                                    Copyright ©
                                    <a href="#">kIdKib</a> 2023 . Tout Droits Réservés.
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
