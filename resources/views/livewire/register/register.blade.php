@extends('layouts.master-register')
@section('content')
    <div class="block-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 card-image ">
                    <div class="container content-image">
                        <div class="card animation-card">
                            <div class="image-block">
                                <img class="side-image" src="{{ asset('images/register.jpg') }}" alt="">
                            </div>
                        </div>


                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="content-card d-flex justify-content-center align-items-start">
                        <div class="card form">
                            <form action="">
                                <div class="row form-group">


                                    <div class="col-lg-12 title d-flex justify-content-center align-items-center">
                                        <h5> Créez un compte</h5>
                                    </div>

                                    <div class="col-lg-12">
                                        <input class="form-control" type="text" placeholder="User Name">
                                    </div>

                                    <div class="col-lg-12 ">
                                        <input class="form-control" type="text" placeholder="Votre prénom">
                                    </div>
                                    <div class="col-lg-12">
                                        <input class="form-control" type="text" placeholder="Votre nom">
                                    </div>

                                    <div class="col-lg-12">
                                        <input class="form-control" type="email" placeholder="Votre adresse email">
                                    </div>
                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" placeholder="Mot de passe">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <input class="form-control" type="password" placeholder="Confirmer mot de passe">
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input outline-danger" type="checkbox"
                                                id="CheckCondition" required>
                                            <label class="form-check-label mb-2" for="CheckCondition">
                                                Acceptez les termes et conditions chez
                                                <a href="/">KissiExpress</a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="ml-4 btn">
                                            S'inscrire
                                        </button>
                                    </div>

                                    <div class="col-12 ">

                                        <div class="text-center mt-2">
                                            <p> Avez-vous déjà un compte? <a href="/login"> Connectez-vous</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
