@extends('layouts.master-dashboard')
@section('content')
    <div class="dashboard-block">

        @include('pharma.components.sidebar-dash')
        <div class="col-lg-12 low-dash mt-4">
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="card main-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="card-title"> BIENVENU SUR VOTRE <br> TABLEAU DE BORD </h4>
                                                <p>KISI EXPRESS</p>
                                            </div>

                                            <div class="col-lg-4">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card user-card">
                                    <div class=" dashboard-card">
                                        <div class="content-card d-flex align-items-center justify-content-between">
                                            <p>Utilisateurs</p>
                                        </div>
                                        <div class="heading d-flex justify-content-between align-items-center mt-4">

                                            <i class="bi ico bi-person"></i>
                                            <span> 0 </span>
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card user-card">
                                    <div class=" dashboard-card">
                                        <div class="content-card d-flex align-items-center justify-content-between">
                                            <p>Commandes/Jour</p>
                                        </div>
                                        <div class="heading d-flex justify-content-between align-items-center mt-4">

                                            <i class="bi ico bi-bag"></i>
                                            <span> 0 </span>
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card user-card">
                                    <div class=" dashboard-card">
                                        <div class="content-card d-flex align-items-center justify-content-between">
                                            <p>Chiffre d'affaires/Jour</p>
                                        </div>
                                        <div class="heading d-flex justify-content-between align-items-center mt-4">

                                            <i class="bi ico bi-currency-bitcoin"></i>
                                            <span> 0 </span>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            {{-- <div class="col-lg-4">
                                <div class="card">
                                    <div class=" dashboard-card">
                                        <div class="heading d-flex justify-content-between">
                                            <i class="bi ico bi-currency-bitcoin"></i>

                                        </div>

                                        <div class="content-card mt-3">
                                            <h5> $100 </h5>
                                            <p>Chiffre d'affaires/Jour</p>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card visa-card">
                            <div class="dashboard-card">
                                <div class="heading d-flex justify-content-between">
                                    <div class="title-card mt-2 mb-3">
                                        <h6>Chiffre d'affaires</h6>
                                    </div>
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>

                                <div class="card card-amount mb-3">
                                    <div class="title d-flex justify-content-between mb-2">
                                        <p>Prepaid</p>

                                        <i class="text-white bi bi-credit-card-2-front-fill"> UBA</i>
                                    </div>

                                    <div class="balance d-flex justify-content-start mt-2 mb-3">
                                        <img src="{{ asset('images/chip.png') }}" alt="">

                                    </div>

                                    <div class="details d-flex justify-content-between align-items-center mt-4">
                                        <i class="text-white bi bi-caret-left-fill"></i>
                                        <p>Expires <br> end of </p>
                                        <span>VISA</span>
                                    </div>

                                </div>
                                <ul>
                                    <li>Label </li>

                                </ul>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="row mt-3 mb-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="filtre d-flex justify-content-between align-items-center">
                                <form action="" class="d-flex">
                                    <button>
                                        <i class="bi bi-search"></i>
                                    </button>
                                    <a>
                                        <input type="text" placeholder="Recherche par nom, marque..."> </a>
                                    {{-- <a href="" class="item-link">Recherche par <br> nom, marque... </a> --}}
                                </form>
                                <div class="filtre-block">
                                    <button>
                                        <i class="bi bi-funnel-fill me-2"></i>
                                        <span>filtres</span>
                                    </button>
                                </div>


                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="">
                                            <tr>
                                                <th> Client</th>
                                                <th> Produit</th>
                                                <th> Qte</th>
                                                <th> P.U</th>
                                                <th> Status</th>
                                            </tr>

                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>John</td>
                                                <td>Quinine</td>
                                                <td>5</td>
                                                <td>$10</td>
                                                <td>Délivré</td>
                                            </tr>
                                            <tr>
                                                <td>Doe</td>
                                                <td>Panado</td>
                                                <td>2</td>
                                                <td>$5</td>
                                                <td>En attente</td>
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>Quinine</td>
                                                <td>5</td>
                                                <td>$10</td>
                                                <td>Délivré</td>
                                            </tr>
                                            <tr>
                                                <td>Doe</td>
                                                <td>Panado</td>
                                                <td>2</td>
                                                <td>$5</td>
                                                <td>En attente</td>
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>Quinine</td>
                                                <td>5</td>
                                                <td>$10</td>
                                                <td>Délivré</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-lg-4">
                        <div class="card overview">
                            <div class="card-header d-flex justify-content-center align-items-center">
                                <h6 class="mb-0">Widget Statistics</h6>



                            </div>

                            <div class="card-body">
                                <div class="chart">

                                </div>
                            </div>
                        </div>

                        <div class="card overview mt-4">
                            <div class="card-header d-flex justify-content-center align-items-center">
                                <h6 class="mb-0">Tableau</h6>



                            </div>

                            <div class="card-body">
                                <div class="chart">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
