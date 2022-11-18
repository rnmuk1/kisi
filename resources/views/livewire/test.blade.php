
{{-- ------------------------------------------------------------- --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lorem ipsum dolor, sit amet consectetur adipisicing.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="global">

        <div class="navbar">
            <div class="navlist">
                <ul>
                    <li> <a href="# "> addresse: <span>Av. du livre 89 </span> </a> </li>
                    <li> <a href="# "> Contacter-nous </a> </li>
                </ul>
            </div>
        </div>

        <div class="banner">
            <div class="col-lg-12">
                <div class="content-banner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="text-head">
                                <div class="row g-0">
                                    <div class="col-lg-2">
                                        <div class="card-image">
                                            <img src="{{ asset('images/logo.png') }}" class="img-card w-100"
                                                alt="logo">
                                        </div>
                                    </div>

                                    <div class="col-lg-10">
                                        <a href="#">
                                            <h1 class="logo-name"> <span>Quick</span>Kissi</h1>
                                        </a>
                                        <p class="name-description"> Achat en ligne et livraison des medicaments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search">
                                <form action="#" method="GET">
                                    {{-- <input type="text" class="research-control" name="research"
                            placeholder="Recherchez vos produits"> --}}
                                    <button type="submit" class="btn-search">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-5 d-flex justify-content-end">
                            <div class="banlist">
                                <ul>
                                    <li> <a href=""> <i class="bi bi-shop-window"></i></i>A propos</a></li>
                                    <li> <a href=""> <i class="bi bi-bag me-2"> </i>Mon panier </a> </li>
                                    <li> <a href=""> <i class="bi bi-person-circle"></i> Mon compte </a> </li>




                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <hr>

        <div class="menu-header">
            <div class="content-menu">

                <div class="menutab justify-content-between">
                    <ul class="menu d-flex">
                        <li class="nav-item">
                            <button class="item-link"> Médicaments </button>
                        </li>
                        <li class="nav-item">
                            <button class="item-link"> Santé </button>
                        </li>
                        <li class="nav-item">
                            <button class="item-link">Médicines Naturelles </button>
                        </li>
                        <li class="nav-item">
                            <button class="item-link">Beauté & Hygiène</button>
                        </li>
                        <li class="nav-item">
                            <button class="item-link"> Bébé, Enfant & Maman</button>
                        </li>
                        <li class="nav-item">
                            <button class="-item-link"> Contention Veineuse</button>
                        </li>
                        <li class="nav-item">
                            <button class="#"> Orthopédie & Podologie</button>
                        </li>
                        <li class="nav-item">
                            <button class="#"> Accessoire & Matériel Medical</button>
                        </li>
                        <li class="nav-item">
                            <button class="#"> Vétérinaire</button>
                        </li>
                        <li class="nav-item">
                            <button class="#"> Nos Marques</button>
                        </li>
                        <li class="nav-item">
                            <button class="#"> Promotion</button>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="container d-flex justify-content-between">
            <div class="row g-3">
                <div class="col-lg-6 ">
                    <div class="card card-image-lg">
                        <img src="{{ asset('images/banner.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="card card-image-sm">
                                <img src="{{ asset('images/banner.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card card-image-sm">
                                <img src="{{ asset('images/banner.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="container">
            <div class="text-center">
                <div class="wrapper banner-promotion mt-5">
                    <h2> Promotions actuelles</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor.</p>
                                        <p class="product-price"> Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn btn-cart">Ajouter au
                                                panier
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod2.png') }}" alt="">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor.</p>
                                        <p class="product-price">Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn btn-cart">Ajouter au
                                                panier
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod3.jpg') }}" alt="img-produit">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor</p>
                                        <p class="product-price"> Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn btn-cart">Ajouter au
                                                panier
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod6.jpg') }}" alt="img-produit">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor.</p>
                                        <p class="product-price"> Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn btn-cart">Ajouter au
                                                panier
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-show mb-4 w-10">
                                        Voir toutes les promotions
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wrapper banner-advert mt-3 ">
                    <div class="row content-advert">
                        <div class="card-name">
                            <a href="">
                                <img src="{{ asset('images/advert1.png') }}" alt="">
                            </a>
                        </div>


                        <div class="card-name">
                            <a href="">
                                <img src="{{ asset('images/advert2.png') }}" alt="">
                            </a>

                        </div>


                        <div class="card-name">
                            <a href="">
                                <img src="{{ asset('images/advert3.png') }}" alt="">
                            </a>
                        </div>


                    </div>
                </div>

                <div class="wrapper banner-details-livraison mt-3 ">
                    <div class="row content-livraison">
                        <ul>
                            <li>
                                <h2 class="title"> Passez une commande <span>en ligne</span>
                                    <br> et faites-vous livrer
                                </h2>
                            </li>
                            <li> <i class=" bi bi-house-door me-2"> </i>
                                <h3 class="title">Retrait en pharmacie</h3>
                                <p>Retirez votre commande <span>gratuitement</span>
                                    dans notre pharmacie.</p>
                            </li>
                            <li> <i class="bi bi-truck"></i> </i>
                                <h3 class="title">A domicile</h3>
                                <p>Vos produits à domicile en livraison standard dans un court délai. </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="wrapper banner-product mt-5">
                    <h2> Notre liste de produit</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod7.jpg') }}" alt="img-produit">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor.</p>
                                        <div class="star-block mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p class="product-price"> Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn btn-cart">Ajouter au
                                                panier
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod11.jpg') }}" alt="">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor.</p>
                                        <div class="star-block mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p class="product-price">Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn btn-cart">Ajouter au
                                                panier
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod9.jpg') }}" alt="img-produit">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor</p>
                                        <div class="star-block mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p class="product-price"> Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn-hors-stock btn-cart">Hors-stock
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod12.jpg') }}" alt="img-produit">
                                        </div>
                                        <h6>PANADOQUIN FORCE</h6>
                                        <p> Lorem, ipsum dolor.</p>
                                        <div class="star-block mb-3">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p class="product-price"> Prix: 10$</p>
                                        <div class="card-button">
                                            <button class="btn btn-cart">Ajouter au
                                                panier
                                            </button>
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-show mb-4 w-10">
                                        Voir tous les produits
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper banner-contact mt-3">
                    <div class="row content-contact">
                        <div class="block-contact contact-us">
                            <i class="bi bi-telephone-inbound">

                            </i>
                            <h2 class="title"> Contactez <br> nous</h2>
                            <p> Nous sommes à votre service du lundi à vendredi. N'hesitez pas de
                                nous contacter.
                            </p>
                            <div class="contact-tel">
                                <a href=""> 082 678 3168 </a>
                            </div>
                            <a href=""> <button class="btn btn-contact mt-3">
                                    CONTACTEZ-NOUS
                                </button></a>
                        </div>

                        <div class="block-contact image">
                            <img src="" alt="">
                        </div>

                        <div class="block-contact times">
                            <h2 class="title"> Heures <br> d'ouverture</h2>
                            <ul class="timetable">
                                <li>
                                    <p>Lundi</p>
                                    <span>08h00 - 16h30</span>
                                </li>
                                <li>
                                    <p>Mardi</p>
                                    <span>08h00 - 16h30</span>
                                </li>
                                <li>
                                    <p>Mercredi</p>
                                    <span>08h00 - 16h30</span>
                                </li>
                                <li>
                                    <p>Jeudi</p>
                                    <span>08h00 - 16h30</span>
                                </li>
                                <li>
                                    <p>Vendredi</p>
                                    <span>08h00 - 16h30</span>
                                </li>
                                <li>
                                    <p>Samedi</p>
                                    <span>08h00 - 16h30</span>
                                </li>
                                <li>
                                    <p>Dimanche</p>
                                    <span>Fermé</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>








            </div>

            <hr class="mt-4">


            <footer class="footer d-flex mt-5">
                <div class="col-lg-12 footer-header">
                    <div class="row justify-content-between ">
                        <div class="col-lg-2 ">
                            <div class="col d-flex">
                                <i class="bi bi-cash-stack"></i>
                                <h6 class="title">
                                    Paiement <br> simple
                                </h6>
                            </div>

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                        </div>
                        <div class="col-lg-2">
                            <div class="col d-flex">
                                <i class="bi bi-box-seam"></i>
                                <h6 class="title">
                                    Service <br> guaranti
                                </h6>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                        </div>

                        <div class="col-lg-2">
                            <div class="col d-flex">
                                <i class="bi bi-briefcase"></i>
                                <h6 class="title">
                                    Service <br> guaranti
                                </h6>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                        </div>
                        <div class="col-lg-2">
                            <div class="col d-flex">
                                <i class="bi bi-truck"></i>
                                <h6 class="title">
                                    Service de<br>livraison
                                </h6>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                        </div>
                        <div class="col-lg-2">
                            <div class="col d-flex">
                                <i class="bi bi-trophy"></i>
                                <h6 class="title">
                                    Recevez des <br> tokens
                                </h6>
                            </div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                        </div>



                    </div>
                </div>

            </footer>

            <footer class="col-lg-12 footer-footer mt-4 mb-4">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>Newsletter</h5>

                        <p>Lorem ipsum dolor sit.</p>

                        <div class=" row card-button">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <input type="text" class="form-label" placeholder="Addresse Email">
                                <button class="btn-send" type="submit">Envoyer </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <div class="col-lg-2">
                        Lorem ipsum dolor sit
                    </div>

                    <div class="col-lg-4">
                        <h5>Mobile App</h5>
                        <p>Lorem ipsum dolor sit.</p>
                        <div class="row card-image">
                            <div class="col-lg-12">
                                <img src="{{ asset('images/apps.jpg') }}" class="img-card" alt="">
                            </div>
                        </div>
                    </div>
            </footer>




        </div>




    </div>
</body>

</html>


{{-- <div class="content">
    <div class="col-lg-12 container banner-contact mb-5">
        <div class="row justify-content-between content-contact">

            <div class="col-lg-5 block-contact contact-us text-center">
                <i class="bi bi-telephone-inbound">

                </i>
                <h6 class="title"> Contactez <br> nous</h6>
                <p> Nous sommes à votre service du lundi à vendredi. N'hesitez pas de
                    nous contacter.
                </p>
                <div class="contact-tel">
                    <a href=""> 082 678 3168 </a>
                </div>
                <a href=""> <button class="btn btn-contact mt-3">
                        CONTACTEZ-NOUS
                    </button></a>
            </div>




        </div>
    </div>
</div> --}}

<footer>
    <div class="footer footer-header d-flex mt-5">
        <div class="col-lg-12 container d-flex justify-content-between">
            <div class="row justify-content-between ">
                <div class="col-lg-2 ">
                    <div class="col d-flex">
                        <i class="bi bi-cash-stack"></i>
                        <h6 class="title">
                            Paiement <br> simple
                        </h6>
                    </div>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                </div>
                <div class="col-lg-2">
                    <div class="col d-flex">
                        <i class="bi bi-box-seam"></i>
                        <h6 class="title">
                            Service <br> guaranti
                        </h6>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                </div>

                <div class="col-lg-2">
                    <div class="col d-flex">
                        <i class="bi bi-briefcase"></i>
                        <h6 class="title">
                            Service <br> guaranti
                        </h6>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                </div>
                <div class="col-lg-2">
                    <div class="col d-flex">
                        <i class="bi bi-truck"></i>
                        <h6 class="title">
                            Service de<br>livraison
                        </h6>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                </div>
                <div class="col-lg-2">
                    <div class="col d-flex">
                        <i class="bi bi-trophy"></i>
                        <h6 class="title">
                            Recevez des <br> tokens
                        </h6>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing !</p>
                </div>



            </div>
        </div>

    </div>

    <div class="footer footer-footer mt-4 mb-0">
        <div class="col-lg-12 container d-flex justify-content-between">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Newsletter</h5>

                    <p>Lorem ipsum dolor sit.</p>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <p>Lorem ipsum dolor sit.</p>
                            <input type="text" class="form-label" placeholder="Addresse Email">
                            <button class="btn-send" type="submit">Envoyer </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <i class="bi bi-box-seam"></i>
                </div>

                <div class="col-lg-2">
                    Lorem ipsum dolor sit
                </div>

                <div class="col-lg-4">
                    <h5>Mobile App</h5>
                    <p>Lorem ipsum dolor sit.</p>
                    <div class="row card-image">
                        <div class="col-lg-12">
                            <img src="{{ asset('images/apps.jpg') }}" class="img-card" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>



<div class="dropdownmenu-wrapper custom-scrollbar ">


    <!-- End .dropdown-cart-header -->

    <div class="dropdown-cart-products">
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
                    <img src="{{ asset('images/prod10.jpg') }}"
                        alt="product" width="80" height="80">
                </a>

                <a href="#" class="btn-remove"
                    title="Remove Product"><span><i class="bi bi-x"></i></span></a>
            </figure>
        </div>
        <!-- End .product -->


        <!-- End .product -->

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
                    <img src="{{ asset('images/prod1.jpg') }}"
                        alt="product" width="80" height="80">
                </a>

                <a href="#" class="btn-remove"
                    title="Remove Product"><span><i class="bi bi-x"></i></span></a>
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
        <a href="/cart" class="btn btn-gray btn-block view-cart">Voir le panier</a>
        <a href="checkout.html" class="btn btn-dark btn-block">Passer la commande</a>
    </div>
    <!-- End .dropdown-cart-total -->
</div>




<div class="menutab ">

    <div class="col-lg-9 pb-0">
        <ul class="menu d-flex justify-content-between align-items-center">
            <li class="nav-item">
                <a href="#" class="item-link">Médicaments</a>

            </li>
            <li class="nav-item">
                <a href="#" class="item-link">Hygiène & Santé </a>

            </li>

            <li class="nav-item">
                <a href="#" class="item-link"> Beauté </a>


            </li>
            <li class="nav-item">
                <a href="#" class="item-link"> Bébé & Maman </a>

            </li>

            <li class="nav-item">
                <a href="#" class="item-link"> Sport </a>


            </li>
            <li class="nav-item">
                <a href="#" class="item-link"> Accessoire </a>


            </li>


        </ul>
    </div>

    <div class="col-lg-3">

    </div>

</div>


<div class="col-lg-4 mt-5">
    <div class="details">
        <h3>Détails</h3>
        <div class="summary-item"><span class="text">Sous-total</span><span class="price">$10</span>
        </div>
        <div class="summary-item"><span class="text">Réduction</span><span class="price">$0</span>
        </div>
        <div class="summary-item"><span class="text">Livraison</span><span class="price">$0</span>
        </div>
        <div class="summary-item"><span class="text">Total</span><span class="price">$10</span>
        </div>
        <div class="button-valid">
            <button type="button" class="btn"> Valider ma
                commande
            </button>
        </div>
    </div>

</div>

{{-- ------------------------------------------------ --}}

<div class="header">
    <nav class="navbar-dashboard">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 d-flex logo">
                    <div class="card-image">
                        <a href="/">
                            <img src="{{ asset('images/logo.png') }}" class="img-card" alt="logo">
                        </a>
                    </div>


                </div>
                <div class="col-lg-5 form-search">
                    <form action="">
                        <div class="form-group row">
                            <div class="col-lg-12 d-flex">
                                <input type="text" class="form-control" placeholder="Recherchez vos médicaments">
                                <button class="btn">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 d-flex justify-content-end align-items-center menu-button ">

                        <i class="bi bi-bell"></i>
                        <i class="bi bi-chat-left-text"></i>
                        <i class="bi bi-gear"></i>


                </div>

            </div>
        </div>


    </nav>


</div>

<div class="row w-100">
    <div class="col-lg-3">
        <div class="text-head">
            <div class="logo d-flex align-items-center mb-0">
                <div class="logo-image">
                    <div class="card-image">
                        <a href="/" class="product-image">
                            <img src="{{ asset('images/logo.png') }}" class="img-card w-100"
                                alt="logo">
                        </a>
                    </div>
                </div>

                <div class="logo-text" style="margin-left: -15px; margin-top:8px;">
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

    <div class="col-lg-3" style="margin-left:-10px;">


    </div>

    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-search">
                    <form action="">
                        <div class="row">
                            <div class="form-group d-flex">

                                    <input type="text" class="form-control"
                                        placeholder="Recherchez ici...">
                                    <button class="btn">
                                        <i class="bi bi-search"></i>
                                    </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="d-flex justify-content-end">
                    <div class="menu-button">
                        <span class="dot">

                        </span>
                        <i class="bi bi-bell"></i>
                    </div>
                    <div class="avatar">
                        <div class="avatar-content">
                            <img src="{{ asset('images/avatar-default.jpg') }}" alt=""
                                class="img" style="width: 60px; height:60px; object-fit:cover;">

                            
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
