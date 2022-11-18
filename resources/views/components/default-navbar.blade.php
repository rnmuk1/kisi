<header class="nav-header">
    <div class="navbar top-bar">
        <div class="navlist">
            <ul>
                <li> <a href="# "> Adresse: <span>Av. du livre 89 </span> </a> </li>
                <li> <a href="/contact"> Contacter-nous </a> </li>
            </ul>
        </div>
    </div>

    <nav class="navbar-banner">
        <div class="banner-top mid-bar">

            <div class="col-lg-12">
                <div class="content-banner d-flex justify-content-between align-items-center">
                    <div class="logo d-flex align-items-center">
                        <div class="text-head">
                            <div class="logo d-flex align-items-center mb-0">
                                <div class="logo-image">
                                    <div class="card-image">
                                        <a href="/" class="product-image">
                                            <img src="{{ asset('images/logo.png') }}" class="img-card w-10"
                                                alt="logo">
                                        </a>
                                    </div>
                                </div>

                                <div class="logo-text" style="margin-left: -15px;">
                                    <a href="/">
                                        <h6 class="logo-name" style="">
                                            <span>Kisi</span>Express
                                        </h6>
                                    </a>
                                    <p class="name-description"> Achat de médicaments en ligne</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-end">
                        <div class="banlist">
                            <ul>

                                <li> <a href="#" type="button" title="cart" id="onc">
                                        <i class="bi bi-cart3"></i> </i>Mon panier </a> </li>

                                <li> <a href="/login"> <i class="bi bi-person-circle"></i> Mon compte </a> </li>
                                <div class="dropdown cart-dropdown">


                                    <div class="dropdown-menu mobile-cart" id="drawOncart"
                                        aria-labelledby="drawOncartHead">

                                        <div class="dropdown-cart-header d-flex justify-content-between mb-1">
                                            <h5 id="drawOncartHead">Mon Panier</h5>
                                            {{-- <a href="#" type="button" title="Close" data-bs-dismiss="oncart" aria-label="Close" class="bt-close text-reset"> --}}
                                            <i class="bi bi-x-lg"></i></a>
                                        </div>

                                        <div class="dropdownmenu-wrapper custom-scrollbar ">

                                            <!-- End .dropdown-cart-header -->

                                            <div class="dropdown-cart-products mt-3">
                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="#"> Lotion médicale</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span> × $99.00
                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="demo1-product.html" class="product-image">
                                                            <img src="{{ asset('images/prod10.jpg') }}" alt="product"
                                                                width="80" height="80">
                                                        </a>

                                                        <a href="#" class="btn-remove"
                                                            title="Remove Product"><span><i
                                                                    class="bi bi-x"></i></span></a>
                                                    </figure>
                                                </div>

                                                <div class="product">
                                                    <div class="product-details">
                                                        <h4 class="product-title">
                                                            <a href="#"> Lotion médicale</a>
                                                        </h4>

                                                        <span class="cart-product-info">
                                                            <span class="cart-product-qty">1</span> × $99.00
                                                        </span>
                                                    </div>
                                                    <!-- End .product-details -->

                                                    <figure class="product-image-container">
                                                        <a href="demo1-product.html" class="product-image">
                                                            <img src="{{ asset('images/prod1.jpg') }}" alt="product"
                                                                width="80" height="80">
                                                        </a>

                                                        <a href="#" class="btn-remove"
                                                            title="Remove Product"><span><i
                                                                    class="bi bi-x"></i></span></a>
                                                    </figure>
                                                </div>


                                                <!-- End .product -->
                                            </div>
                                            <!-- End .cart-product -->

                                            <div class="dropdown-cart-total">
                                                <span>Total:</span>

                                                <span class="cart-total-price">$100.00</span>
                                            </div>


                                            <!-- End .dropdown-cart-total -->

                                            <div class="dropdown-cart-action">
                                                <a href="/cart" class="btn btn-gray btn-block view-cart">Voir le
                                                    panier</a>
                                                <a href="checkout.html" class="btn btn-dark btn-block">Valider la
                                                    commande</a>
                                            </div>
                                            <!-- End .dropdown-cart-total -->
                                        </div>


                                    </div>
                                </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-header foot-bar">
            <div class="content-menu">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-between main-menu">
                        <div class="col-lg-3 search-tab d-flex align-items-center">
                            <ul>
                                <li class="nav-item">
                                     <div class="inside-search">
                                        <form action="" class="d-flex">
                                            <button>
                                                <i class="bi bi-search"></i>
                                            </button>
                                            <a>
                                            <input class="text-white" type="text" placeholder="Recherche par nom, marque..."> </a>
                                            {{-- <a href="" class="item-link">Recherche par <br> nom, marque... </a> --}}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9 menutab">
                            <ul class="menu d-flex justify-content-between align-items-center ps-0 mb-0">

                                <li class="nav-item"><a href="{{ route('medicines')}}" class="{{ Route::is('medicines')? 'active' : '' }}">Médicaments</a>

                                </li>
                                <li class="nav-item"> <a href="{{ route('health')}}" class="{{ Route::is('health')? 'active' : '' }}">Hygiène & Santé </a>
                                </li>

                                <li class="nav-item"><a href="{{ route('beauty')}}" class="{{ Route::is('beauty')? 'active' : '' }}"> Beauté </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('kid')}}" class="{{ Route::is('kid')? 'active' : '' }}"> Bébé & Maman </a>

                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('sport')}}" class="{{ Route::is('sport')? 'active' : '' }}">Sport </a>


                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('accessory')}}" class="{{ Route::is('accessory')? 'active' : '' }}">Accessoires </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('other')}}" class="{{ Route::is('other')? 'active' : '' }}"> Autres </a>


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


</header>
