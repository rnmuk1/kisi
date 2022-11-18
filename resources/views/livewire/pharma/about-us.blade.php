@extends('layouts.master-contact')
@section('content')
    <div class="container about">
        <div class="page-content">
            <div class="heading">
                <h3>Qui sommes-nous?</h3>
            </div>


        </div>

        <div class="col-lg-12 mt-5 mb-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card about-card">
                        <img src="{{ asset('images/about.jpg') }}" alt="">

                    </div>

                    <div class="content-card">
                        <h4>Contactez-nous</h4>
                        <div class="contact-us d-flex justify-content-between">
                            <div class="adresse">
                                <i class="bi bi-building"></i>
                                <p>89 avenue du livre <br> Kinshasa/Gombe <br> RDC </p>

                            </div>

                            <div class="number">
                                <i class="bi bi-telephone-x"></i>
                                <p> Besoin d'aide?</p>
                                <span> +243 890 000 221</span>
                            </div>
                        </div>
                        <button class="btn mt-3">
                            <a href="/contact"> CONTACTEZ-NOUS</a>
                        </button>
                    </div>

                </div>

                <div class="col-lg-7 about-us">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptate nobis eveniet repellat iste id officiis error inventore quaerat praesentium quasi rem sapiente exercitationem commodi enim quibusdam at, explicabo officia!
                    Dolores voluptatibus delectus ut, dignissimos obcaecati iste aliquid debitis minima odit fugiat voluptates. Excepturi, inventore molestiae? Saepe corrupti dolor, reprehenderit accusantium omnis totam veritatis molestias illum earum laboriosam harum laudantium.
                    Eum, doloribus repellat ab non sequi, ipsum ea earum reprehenderit voluptatibus,</p>

                    <p>fugiat molestias velit corrupti ad ut similique eligendi in minima quia magnam dolorum. Adipisci dolorem quos vitae iusto cum.
                    Sunt ipsam quibusdam nulla soluta exercitationem in laudantium, molestiae officia adipisci quod consequatur doloremque placeat sint accusamus quae, cum dicta facilis totam at blanditiis assumenda unde, vel sit. Inventore, quia.
                    Saepe quae eos, consequatur rem molestiae consequuntur facere voluptatibus.Sint similique iste nostrum, molestias minima provident incidunt temporibus officiis, aspernatur at dolorum doloremque sequi reprehenderit rem, voluptatem repudiandae cumque ex.
                    Eligendi veritatis impedit quo quis?</p>
                    <p> Explicabo dignissimos eveniet quisquam culpa aut earum debitis deleniti quibusdam optio dicta! Dignissimos minus expedita saepe eos alias, aliquid facere unde eveniet, magnam reiciendis doloremque.
                    Sunt nobis eligendi maiores libero, magni atque porro officiis repellendus nemo mollitia architecto maxime totam suscipit incidunt a dolores quis eum voluptates! Hic est culpa molestiae quaerat sunt laborum sit.
                    Voluptatem consequuntur labore eligendi deserunt accusantium molestiae autem iure itaque libero, aliquid consectetur, veniam adipisci dolore porro laborum recusandae sunt dignissimos, corrupti illum inventore in! Repudiandae quas quasi quod incidunt.
                    Illum hic quisquam ea qui tempora placeat officia aspernatur repellat nobis quibusdam asperiores iste vel rem accusamus deserunt numquam sequi sed sint omnis, iure inventore! Alias vitae amet saepe totam.
                    Ea fugit neque ad suscipit vel voluptates quas aliquid aperiam nemo amet fuga ipsa, quasi dolores? Pariatur quia deleniti maiores voluptatum tenetur, eligendi, aperiam ab earum laudantium, optio consectetur similique!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
