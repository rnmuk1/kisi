@extends('layouts.master-dashboard')
@section('content')
    <div class="dashboard-block">
        @include('pharma.components.sidebar-dash')
        <div class="dashboard-content w-100">
            <div class="container-fluid content">
                <div class="block-content-info mt-3">
                    {{-- <h4 class="commande mb-4">
                        Mes Commandes
                    </h4> --}}
                    <div class="card-dashboard">

                        <div class="card-head mb-5">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="row">
                                        <div class="col-lg-4 d-flex align-items-center">
                                            <h5 style="
                                            margin-bottom: 0;">Liste
                                                des commandes</h5>
                                        </div>
                                        <div class="col-lg-8 d-flex justify-content-end align-items-center">
                                            <p class="status me-2">Status:</p>
                                            <div class="status-menu w-80 me-3">

                                                <select class="form-select" placeholder="Status" name=""
                                                    id="">
                                                    <option value="all">Tout</option>
                                                    <option value="all">Annulé</option>
                                                    <option value="all">En attente</option>
                                                    <option value="all">Délivré</option>
                                                </select>
                                            </div>
                                            <div class="search-field">
                                                <div class="inner-search">
                                                    <form action="" class="d-flex">
                                                        <div class="searching">
                                                            <input type="text" placeholder="Recherchez ici...">
                                                        </div>
                                                        <button type="submit">
                                                            <i class="bi bi-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- <div class="add-button ms-2">
                                                <a href="" class="btn-add"> ajouter un produit </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="command-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th>#</th>

                                                <th>Client</th>
                                                <th>Produit</th>
                                                <th>P.U</th>
                                                <th>P.V</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>

                                                <td>0002</td>
                                                <td>John</td>
                                                <td>Ampicilin</td>
                                                <td>10$</td>
                                                <td>15$</td>
                                                <td class="status off">
                                                    <div>En attente</div>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>0002</td>
                                                <td>John</td>
                                                <td>Ampicilin</td>
                                                <td>10$</td>
                                                <td>15$</td>
                                                <td class="status on">
                                                    <div>Délivré</div>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>0002</td>
                                                <td>John</td>
                                                <td>Ampicilin</td>
                                                <td>10$</td>
                                                <td>15$</td>
                                                <td class="status on">
                                                    <div>Délivré</div>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>0002</td>
                                                <td>John</td>
                                                <td>Ampicilin</td>
                                                <td>10$</td>
                                                <td>15$</td>
                                                <td class="status off">
                                                    <div>Annulé</div>
                                                </td>
                                            </tr>


                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="table-commande">
                            <div class="data-table">
                                <table class="table table-responsive-lg mt-3">

                                    <thead>
                                        <tr>
                                            <th> Client</th>
                                            <th> Produit</th>
                                            <th> Quantité</th>
                                            <th> Prix/Unit</th>
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
                                            <td>James</td>
                                            <td>Quinine</td>
                                            <td>10</td>
                                            <td>$10</td>
                                            <td>Délivré</td>
                                        </tr>

                                        <tr>
                                            <td>Joe</td>
                                            <td>Quinine</td>
                                            <td>2</td>
                                            <td>$10</td>
                                            <td>Délivré</td>
                                        </tr>

                                        <tr>
                                            <td>Paul</td>
                                            <td>Quinine</td>
                                            <td>4</td>
                                            <td>$10</td>
                                            <td>Délivré</td>
                                        </tr>

                                        <tr>
                                            <td>Simon</td>
                                            <td>Quinine</td>
                                            <td>1</td>
                                            <td>$10</td>
                                            <td>Délivré</td>
                                        </tr>

                                        <tr>
                                            <td>Eli</td>
                                            <td>Quinine</td>
                                            <td>3</td>
                                            <td>$10</td>
                                            <td>Délivré</td>
                                        </tr>

                                        <tr>
                                            <td>Jacob</td>
                                            <td>Quinine</td>
                                            <td>1</td>
                                            <td>$10</td>
                                            <td>Délivré</td>
                                        </tr>

                                        <tr>
                                            <td>Moise</td>
                                            <td>Quinine</td>
                                            <td>20</td>
                                            <td>$10</td>
                                            <td>Délivré</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div> --}}


                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-between">

                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="result d-flex justify-content-between">
                                            <span> Résultats 1 de 8</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 d-flex justify-content-end align-items-center">
                                        <div class="pagination d-flex justify-content-between" style="width: 30%;">
                                            <i class="bi bi-arrow-left"></i>
                                            <span> 1 </span>
                                            <span> 2 </span>

                                            <i class="bi bi-arrow-right"></i>

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
