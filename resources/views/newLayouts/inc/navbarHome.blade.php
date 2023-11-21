<header>
    <div class="header-top-wrapper-2 border-bottom-2">
        <div class="header-info-wrapper pl-200 pr-200">
            <div class="header-contact-info">
                <ul>
                    <li><i class="pe-7s-call"></i> +225 07 5944 5209</li>
                    <li><i class="pe-7s-mail"></i> <a href="#">Gyimahrokib@gmail.com</a></li>
                </ul>
            </div>
            <div class="electronics-login-register">
                <ul>

                    @if (auth()->user())
                        <li><a href="{{ route('register') }}"><i class="pe-7s-users"></i>{{ auth()->user()->name }}</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    @else
                        <li><a href="{{ route('login') }}"><i class="pe-7s-users"></i>Se Connecter</a></li>
                        <li><a href="{{ route('register') }}"><i class="pe-7s-users"></i>S'inscrire</a></li>
                    @endif



                    <li><a data-bs-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-repeat"></i>Comparer</a></li>
                    <li><a href="wishlist.html"><i class="pe-7s-like"></i>Favoris</a></li>
                    <li><a class="border-none" href="#"><span>$</span>CFA</a></li>
                </ul>
            </div>
        </div>
    </div>
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
                        <a href="{{url('cart')}}"><i class="pe-7s-cart"></i></a>
                    </div>
                    <div class="same-style-text">
                        <a href="{{url('cart')}}">Mon Panier</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{ route('index') }}">Acceuil</a></li>
                            <li><a href="{{ route('boutique') }}">Catégories</a>
                                <ul>
                                    <li><a href="blog.html">blog 3 colunm</a></li>
                                    <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Magasin</a>
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
                            <li><a href="{{route('about')}}">À propos</a></li>
                            <li><a href="{{route('contact')}}"> Contact  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
