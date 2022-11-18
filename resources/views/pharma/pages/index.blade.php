@extends('layouts.master')
@section('content')
    <div class="banner">
        <div class="d-flex justify-content-between mt-5 mb-5" style="padding:0;">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="card card-image-lg">
                        <img src="{{ asset('images/banner-main.jpg') }}" alt="">
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="row g-3">


                        <div class="col-lg-12">

                            <div class="card card-image-sm">
                                <div class="image-title">
                                    <h4>Achetez vos <br> médicaments en ligne</h4>
                                </div>


                                <img src="{{ asset('images/banner2.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card card-image-sm">
                                <div class="image-title">
                                    <h4>Trouvez les produits <br> de vos bébés</h4>
                                </div>
                                <img src="{{ asset('images/banner-kid.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="banner-promotion">
        <div class="container">
            <div class="text-center">
                <div class="wrapper banner-promotion mt-5">
                    <h2> Promotions actuelles</h2>
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> Promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod8.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart d-flex align-items-center justify-content-between">

                                                    <i class="bi bi-cart3 me-2"></i>
                                                    <span> Ajouter au panier</span>

                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> Promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod3.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart d-flex align-items-center justify-content-between">

                                                    <i class="bi bi-cart3 me-2"></i>
                                                    <span> Ajouter au panier</span>

                                                </button>
                                            </div>
                                            <i class=" bi bi-heart-fill favori"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> Promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod7.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart d-flex align-items-center justify-content-between">

                                                    <i class="bi bi-cart3 me-2"></i>
                                                    <span> Ajouter au panier</span>

                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">
                                        <div class="promo">
                                            <p class="percentage-promo"> 25%</p>
                                            <p class="promo"> Promo</p>
                                        </div>
                                        <div class="product-image">
                                            <img src="{{ asset('images/prod10.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart d-flex align-items-center justify-content-between">

                                                    <i class="bi bi-cart3 me-2"></i>
                                                    <span> Ajouter au panier</span>

                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-5">
                                    <a href="/promotion"> <button class="btn btn-show mb-4 w-10">
                                            Voir toutes les promotions
                                        </button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-advert">
        <div class="container">
            <div class="text-center">
                <div class="wrapper banner-advert mt-3 mb-5">
                    <div class="row content-advert">
                        <div class="card-name">
                            <a href="">
                                <img src="{{ asset('images/advert1.jpeg') }}" alt="">
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
                <div class="wrapper banner-details-livraison mt-3 mb-5  ">
                    <div class="row content-livraison">
                        <ul>
                            <li>
                                <h4 class="title"> Passez une commande <span>en ligne</span>
                                    et soyez <br> satisfait de notre service
                                </h4>
                            </li>
                            <li> <i class=" bi bi-house-door me-2"> </i>
                                <h3 class="title">Retrait en pharmacie</h3>
                                <p>Retirez votre commande <span>gratuitement</span>
                                    dans notre pharmacie.</p>
                            </li>
                            <li> <i class="bi bi-truck"></i> </i>
                                <h3 class="title">Livraison à domicile</h3>
                                <p>Vos produits vous sont livrés à domicile dans un court délai. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-product">
        <div class="container">
            <div class="text-center">

                <div class="wrapper banner-product mt-5">
                    <h2> Notre liste de produit</h2>
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier  </button>
                                            </div>
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier
                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill favori"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier
                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill favori"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier
                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill favori"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-5 mb-3">
                                    <a href="/products"> <button class="btn btn-show mb-4 w-10">
                                            Voir tous les produits
                                        </button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="wrapper banner-contact mt-3">
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
            </div> --}}
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalpanier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="cart-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="closing" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true"> X </span>
                    </button>

                    <h5 class="modal-title" id="modalLabel"> Produit ajouté au panier avec succés</h5>

                </div>

                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
@endsection
