@extends('layouts.master-contact')
@section('content')
    {{-- <div class="contact-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <a href="/">
                            <i class="bi bi-house-fill"></i>
                            Accueil
                        </a>

                        <span>Contact</span>

                    </div>
                </div>
            </div>

        </div>

    </div> --}}

    {{-- <div class="map-section">
        <div class="container">
            <div class="inside-map">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127297.67587343676!2d15.322744649999997!3d-4.40130375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3130fe066a8b%3A0x168b7e4e1f52378d!
                2sKinshasa!5e0!3m2!1sen!2scd!4v1664967150949!5m2!1sen!2scd"
                    width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div> --}}

    <div class="content-section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-title">
                        <h4>Contactez-nous</h4>
                        <p>Pour toute information complémentaire, <br> n'hésitez pas à nous contacter

                        </p>
                    </div>
                    <div class="contact-widget">
                        <div class="map-section">

                            <div class="inside-map">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127297.67587343676!2d15.322744649999997!3d-4.40130375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3130fe066a8b%3A0x168b7e4e1f52378d!
                                        2sKinshasa!5e0!3m2!1sen!2scd!4v1664967150949!5m2!1sen!2scd"
                                    width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>

                        </div>

                    </div>
                    <div class="app-widget mt-4">
                        <h6>Application disponible sur:</h6>
                        <div class="web-icon mt-1">
                            <div class="app-icon d-flex justify-content-start mt-3">

                                <div class="android card-app">
                                    <a href="">
                                        <span class="gplay-icon"> <img src="{{ asset('images/google.png') }}"alt=""></span>
                                    </a>
                                </div>

                                <div class="apple card-app">
                                    <a href="">
                                        <span class="gplay-icon"> <img src="{{ asset('images/appstore.png') }}"alt=""></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="comment">

                            <form action="" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Votre prénom">
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="text" placeholder="Votre adresse email ">
                                    </div>

                                    <div class="col-lg-12">
                                        <textarea placeholder="Votre Message"></textarea>


                                        <button type="submit" class="btn"> Envoyer</button>
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
