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
                                                des utilisateurs</h5>
                                        </div>
                                        <div class="col-lg-8 d-flex justify-content-end align-items-center">

                                            <div class="row">
                                                <div class="col-lg-12 d-flex align-items-center">

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


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-commande">
                            <div class="data-table">
                                <table class="table table-responsive-lg mt-3">

                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Adresse E-mail</th>
                                            <th>Dernier achat</th>
                                            <th>Montant</th>
                                            <th>Dernière connexion</th>
                                            <th>Mode de livraison</th>



                                        </tr>

                                    </thead>

                                    <tbody>
                                        <tr class="">
                                            <td>1</td>
                                            <td>Jonh Kabamba</td>
                                            <td>jk@gmail.com</td>
                                            <td>Paracetamol</td>
                                            <td>30$</td>
                                            <td>10/10/2022</td>
                                            <td>Retrait</td>

                                        </tr>

                                        <tr class="">
                                            <td>2</td>
                                            <td>Samuel Ndala</td>
                                            <td>sn@gmail.com</td>
                                            <td>Quinine</td>
                                            <td>20$</td>
                                            <td>20/10/2022</td>
                                            <td>Livraison</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


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
