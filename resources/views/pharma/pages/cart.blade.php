@extends('layouts.master')
@section('content')
    <section class="shopping-cart">
        <div class="cart-title d-flex justify-content-center mt-4">
            <h2>Mon panier</h2>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 content">
                    <div class="items">
                        <div class=" product">
                            <div class="row">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                    <img class="prim-image image" src="{{ asset('images/prod1.jpg') }}" alt="">
                                </div>

                                <div class="col-lg-8 mt-3 mb-3">
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <div class="product-name">
                                                    <a href="#">Oil free</a>
                                                    <div class="product-info mt-3">
                                                        <p> Description: <span> Contre malaria</span> </p>
                                                        <p> Forme: <span> Comprimé</span></p>
                                                        <p>Fabricant: <span> ACTM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 d-flex align-items-center">
                                                <div class="quantity">
                                                    <label for="quantity">
                                                        Quantité: </label>
                                                    <input type="number" class="form-control quant-input" id="quantity">
                                                </div>
                                            </div>

                                            <div class="col-lg-2 d-flex align-items-center">
                                                <div class="price">
                                                    <span> 10$ </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class=" product">
                            <div class="row">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                    <img class="prim-image image" src="{{ asset('images/prod7.jpg') }}" alt="">
                                </div>

                                <div class="col-lg-8 mt-4 mb-4">
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <div class="product-name">
                                                    <a href="#">Biotherme homme</a>
                                                    <div class="product-info mt-3">
                                                        <p> Description: <span> Contre malaria</span> </p>
                                                        <p> Forme: <span> Comprimé</span></p>
                                                        <p>Fabricant: <span> ACTM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 d-flex align-items-center">
                                                <div class="quantity">
                                                    <label for="quantity">
                                                        Quantité: </label>
                                                    <input type="number" class="form-control quant-input" id="quantity">
                                                </div>
                                            </div>

                                            <div class="col-lg-2 d-flex align-items-center">
                                                <div class="price">
                                                    <span> 10$ </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class=" product">
                            <div class="row">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                    <img class="prim-image image" src="{{ asset('images/prod6.jpg') }}" alt="">
                                </div>

                                <div class="col-lg-8 mt-4 mb-4">
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <div class="product-name">
                                                    <a href="#">XL-S Medical</a>
                                                    <div class="product-info mt-3">
                                                        <p> Description: <span> Contre malaria</span> </p>
                                                        <p> Forme: <span> Comprimé</span></p>
                                                        <p>Fabricant: <span> ACTM</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 d-flex align-items-center">
                                                <div class="quantity">
                                                    <label for="quantity">
                                                        Quantité: </label>
                                                    <input type="number" value="1" class="form-control quant-input"
                                                        id="quantity">
                                                </div>
                                            </div>

                                            <div class="col-lg-2 d-flex align-items-center">
                                                <div class="price">
                                                    <span> 10$ </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="details">
                        <h3>Détails de la commande</h3>
                        <div class="summary-item mb-3"><span class="text">Sous-total</span><span class="price">$10</span>
                        </div>
                        <div class="summary-item mb-3"><span class="text">Réduction</span><span class="price">$0</span>
                        </div>
                        <div class="summary-item mb-3"><span class="text">Livraison</span><span class="price">$0</span>
                        </div>
                        <div class="summary-item mb-3"><span class="text">Total</span><span class="price">$10</span>
                        </div>
                        <div class="button-valid mt-4">
                            <button type="button" class="btn"> Valider la
                                commande
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
