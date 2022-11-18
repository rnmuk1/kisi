@extends('layouts.master-register')
@section('content')
    <div class="block-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 card-image ">
                    <div class="container content-image">
                        <div class="card animation-card">
                            <div class="image-block">
                                <img class="side-image" src="{{ asset('images/login-img.jpg') }}" alt="">
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
                                        <h5> Connectez-vous</h5>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <input class="form-control" type="text" placeholder="User Name">
                                    </div>

                                    <div class="col-lg-12">
                                        <input class="form-control" type="password" placeholder="Mot de passe">
                                    </div>

                                    <div class="col-12 login-text d-flex justify-content-between mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="newsletter" id="remember_me">
                                            <label class="form-check-label" for="remember_me">
                                              Se souvenir de moi
                                            </label>
                                        </div>
                                        <div class="d-flex items-center justify-content-end">

                                                <a class="resert-password" style="text-decoration:none;" href="#">
                                                    Mot de passe oublié?
                                                </a>

                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                         <button href="/" data-toggle="modal" class="ml-4 btn">
                                            Se connecter
                                        </button> </a>
                                    </div>



                                    <div class="block-login-network">

                                        <div class="text-center d-flex justify-content-center align-items-center mt-2">
                                            <p class="link mb-0">Pas de compte? <a href="/register">Inscrivez-vous</a></p>
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
