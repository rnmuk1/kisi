@extends('layouts.master-contact')
@section('content')
    <div class="page-banner">
        <div class="page-content">
            <div class="heading">
                <h3>Besoin d'aide?</h3>
            </div>
            <div class="search-engine">
                <form action="" class="">
                    <div class="search d-flex justify-content-center">
                        {{-- <button>
                            <i class="bi bi-search"></i>
                        </button> --}}
                        <input type="text" placeholder="Recherchez votre besoin...">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="content-page mt-4">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 mb-5 mt-5 ">
                        <h5>Questions fréquentes</h5>
                        <hr>
                        <div class="col-lg-12 list mt-5">
                            <div class="row">
                                <div class="col-lg-6 d-flex mb-4">
                                    <i class="bi bi-person-plus"></i>
                                    <div class="my-account ms-3 pt-2">
                                        <span>Mon compte</span>
                                        <p>Comment gérer votre compte et <br> toutes ses fonctionalités</p>
                                        <hr>
                                    </div>

                                </div>

                                <div class="col-lg-6 d-flex mb-4">
                                    <i class="bi bi-cash-coin"></i>
                                    <div class="my-account ms-3 pt-2">
                                        <span>Paiements & Factures</span>
                                        <p>Toutes les informations sur les <br> tarrifs de nos services</p>
                                        <hr>
                                    </div>

                                </div>

                                <div class="col-lg-6 d-flex mb-4">
                                    <i class="bi bi-phone"></i>
                                    <div class="my-account ms-3 pt-2">
                                        <span>Application Mobile</span>
                                        <p>Documentation sur notre <br> application mobile</p>
                                        <hr>
                                    </div>

                                </div>

                                <div class="col-lg-6 d-flex mb-4">
                                    <i class="bi bi-credit-card"></i>
                                    <div class="my-account ms-3 pt-2">
                                        <span>Copyright et droits légaux</span>
                                        <p>Informations importantes <br>sur vos données</p>
                                        <hr>
                                    </div>

                                </div>

                                <div class="col-lg-6 d-flex mb-4">
                                    <i class="bi bi-credit-card"></i>
                                    <div class="my-account ms-3 pt-2">
                                        <span>Copyright et droits légaux</span>
                                        <p>Informations importantes <br>sur vos données</p>
                                        <hr>
                                    </div>

                                </div>

                                <div class="col-lg-6 d-flex mb-4">
                                    <i class="bi bi-credit-card"></i>
                                    <div class="my-account ms-3 pt-2">
                                        <span>Copyright et droits légaux</span>
                                        <p>Informations importantes <br>sur vos données</p>
                                        <hr>
                                    </div>

                                </div>






                            </div>
                        </div>




                    </div>

                    <div class="col-lg-4 mb-3 mt-5">
                        <div>
                            <div class="article mb-4">

                                <h6>Articles populaires</h6>
                                <ul>
                                    <li> <a href=""> Comment créer un compte? </a></li>
                                    <li> <a href=""> Comment nos promotions marchent? </a></li>
                                    <li> <a href=""> Les meilleures pratiques pour la securité de votre compte </a></li>
                                    <li> <a href="">Comment modifier les informations personelles? </a></li>
                                    <li> <a href="">Comment nous contacter? </a></li>
                                </ul>
                            </div>

                            <div class="article mb-5">

                                <h6>Besoin d'aide technique?</h6>
                                <p>Impossible de trouver les réponses <br> à vos questions? N'hesitez pas de nous contacter!</p>

                                <button class="btn mt-3">
                                    <a href="/contact"> Contactez-nous</a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
