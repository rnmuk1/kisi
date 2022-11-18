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
                                                des produits</h5>
                                        </div>
                                        <div class="col-lg-8 d-flex justify-content-end align-items-center">

                                            <div class="row">
                                                <div class="col-lg-12 d-flex align-items-center">
                                                    <p class="status me-2">Catégorie:</p>
                                                    <div class="col-lg-4 me-3 status-menu">

                                                        <select class="form-select" placeholder="Status" name=""
                                                            id="">
                                                            <option value="all">Tout</option>
                                                            <option value="all">Médicaments</option>
                                                            <option value="all">Hygiène et Santé</option>
                                                            <option value="all">Beauté</option>
                                                            <option value="all">Bébé et maman</option>
                                                            <option value="all">Sport</option>
                                                            <option value="all">Accessoire</option>
                                                            <option value="all">Materiel Medical</option>


                                                        </select>
                                                    </div>
                                                    <div class="col-lg-5 search-field">
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
                                                    <div class="col-lg-3 add-button ms-2">
                                                        <button><a href="" class="btn-add">
                                                                Ajouter un produit </a></button>
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
                                            <th>Image</th>
                                            <th>Catégorie</th>
                                            <th>Forme</th>
                                            <th>Qte</th>
                                            <th>P.U</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        <tr class="">
                                            <td>120021</td>
                                            <td>Aloe cream</td>
                                            <td>
                                                <div class="image-table">
                                                    <img src="{{ asset('images/prod3.jpg') }}" alt="img-product">
                                                </div>
                                            </td>
                                            <td> Beauté</td>
                                            <td>Crème</td>
                                            <td>4</td>
                                            <td>15$</td>
                                            <td> <a href=""><i class="bi bi-pencil-fill"></i></a></td>
                                            <td> <a href=""><i class="bi bi-trash"></i></a></td>
                                        </tr>
                                        <tr class="">
                                            <td>120021</td>
                                            <td>Aloe cream</td>
                                            <td>
                                                <div class="image-table">
                                                    <img src="{{ asset('images/prod3.jpg') }}" alt="img-product">
                                                </div>
                                            </td>
                                            <td> Beauté</td>
                                            <td>Crème</td>
                                            <td>4</td>
                                            <td>15$</td>
                                            <td> <a href=""><i class="bi bi-pencil-fill"></i></a></td>
                                            <td> <a href=""><i class="bi bi-trash"></i></a></td>
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
