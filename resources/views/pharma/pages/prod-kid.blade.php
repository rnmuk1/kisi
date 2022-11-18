@extends('layouts.master')
@section('content')
    <div class="banner">
        <div class="col-lg-12 d-flex">
            <div class="row">
                <div class="col-lg-3 filter-products">
                    <div class="card-filter">
                        <div class="title-card mb-4">
                            <h5>Filtré par</h5>
                        </div>
                        <div class="items-filtre">
                            <form action="">
                                <div class="accord">

                                    {{-- <div class="accord-item">
                                        <h6 class="accord-header">
                                            Catégories
                                        </h6>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="1"
                                                                id="flexCheckDefault6" name="flexRadioDefault2"
                                                                wire:model='categorie' wire:change='sortByCategory'>
                                                            <label class="form-check-label" for="flexCheckDefault6">
                                                                Médicament
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="2"
                                                                id="flexCheckDefault7" name="flexRadioDefault2"
                                                                wire:model='categorie' wire:change='sortByCategory'>
                                                            <label class="form-check-label" for="flexCheckDefault7">
                                                                Equipément
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="3"
                                                                id="flexCheckDefault8" name="flexRadioDefault2"
                                                                wire:model='categorie' wire:change='sortByCategory'>
                                                            <label class="form-check-label" for="flexCheckDefault8">
                                                                Produit d'hygiène
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="accord-item">
                                        <h6 class="accord-header">
                                            Prix

                                        </h6>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="1"
                                                                id="flexCheckDefault4" name="flexRadioDefault1"
                                                                wire:model='prix' wire:change='sortByPrix'>
                                                            <label class="form-check-label" for="flexCheckDefault4">
                                                                Moins chers
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="2"
                                                                id="flexCheckDefault5" name="flexRadioDefault1"
                                                                wire:model='prix' wire:change='sortByPrix'>
                                                            <label class="form-check-label" for="flexCheckDefault5">
                                                                Plus chers
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accord-item">
                                        <h6 class="accord-header">
                                            Marques
                                        </h6>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="1"
                                                                id="flexCheckDefault6" name="flexRadioDefault2"
                                                                wire:model='categorie' wire:change='sortByCategory'>
                                                            <label class="form-check-label" for="flexCheckDefault6">
                                                                Shalina
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="2"
                                                                id="flexCheckDefault7" name="flexRadioDefault2"
                                                                wire:model='categorie' wire:change='sortByCategory'>
                                                            <label class="form-check-label" for="flexCheckDefault7">
                                                                ACTM
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="3"
                                                                id="flexCheckDefault8" name="flexRadioDefault2"
                                                                wire:model='categorie' wire:change='sortByCategory'>
                                                            <label class="form-check-label" for="flexCheckDefault8">
                                                                Labo Pharma
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accord-item">
                                        <h6 class="accord-header">
                                            Notes
                                        </h6>
                                        <div id="panelsStayOpen-collapseFor" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingFor">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="1"
                                                                id="flexCheckDefault" name="flexRadioDefault3"
                                                                wire:change='sortByNote' wire:model='note'>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Mieux cotés
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="2"
                                                                id="flexCheckDefault10" name="flexRadioDefault3"
                                                                wire:change='sortByNote' wire:model='note'>
                                                            <label class="form-check-label" for="flexCheckDefault10">
                                                                Moins cotés
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="filter-btn d-flex justify-content-center">
                                    <button class="btn">Valider le filtre</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 products container">
                    <div class="product-title mt-2">
                        <h3> Bébé et Maman</h3>
                    </div>
                    <div class="text-center">
                        <div class="wrapper banner-product mt-3 mb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod7.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod5.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod6.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod4.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod7.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod3.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod5.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex card product-card mb-3">

                                                <div class="product-image">
                                                    <img src="{{ asset('images/prod6.jpg') }}" alt="img-produit">
                                                </div>
                                                <h6>PANADOQUIN FORCE</h6>
                                                <p> Lorem, ipsum dolor.</p>
                                                <div class="star-block mb-1">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <p class="product-price"> Prix: 10$</p>
                                                <div class="card-button mt-1">
                                                    <button class="btn btn-cart">Ajouter au
                                                        panier
                                                    </button>
                                                    <i class="bi bi-heart"></i>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
