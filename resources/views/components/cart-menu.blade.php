<div class="dropdown-menu mobile-cart" id="drawOncart" aria-labelledby="drawOncartHead">

    <div class="dropdown-cart-header d-flex justify-content-between mb-1">
        <h5 id="drawOncartHead">Mon Panier</h5>
        {{-- <a href="#" type="button" title="Close" data-bs-dismiss="oncart" aria-label="Close" class="bt-close text-reset"> --}}
            <i class="bi bi-x-lg"></i></a>
    </div>

    <div class="dropdownmenu-wrapper custom-scrollbar ">



        <div class="dropdown-cart-products">
            <div class="product">
                <div class="product-details">
                    <h4 class="product-title">
                        <a href="#"> Loti médicale</a>
                    </h4>

                    <span class="cart-product-info">
                        <span class="cart-product-qty">1</span> × $99.00
                    </span>
                </div>
                <!-- End .product-details -->

                <figure class="product-image-container">
                    <a href="demo1-product.html" class="product-image">
                        <img src="{{ asset('images/prod10.jpg') }}"
                            alt="product" width="80" height="80">
                    </a>

                    <a href="#" class="btn-remove"
                        title="Remove Product"><span><i class="bi bi-x"></i></span></a>
                </figure>
            </div>


            <div class="product">
                <div class="product-details">
                    <h4 class="product-title">
                        <a href="#"> Lotion médicale</a>
                    </h4>

                    <span class="cart-product-info">
                        <span class="cart-product-qty">1</span> × $99.00
                    </span>
                </div>
                <!-- End .product-details -->

                <figure class="product-image-container">
                    <a href="demo1-product.html" class="product-image">
                        <img src="{{ asset('images/prod1.jpg') }}"
                            alt="product" width="80" height="80">
                    </a>

                    <a href="#" class="btn-remove"
                        title="Remove Product"><span><i class="bi bi-x"></i></span></a>
                </figure>
            </div>

            <div class="product">
                <div class="product-details">
                    <h4 class="product-title">
                        <a href="#"> Lotion médicale</a>
                    </h4>

                    <span class="cart-product-info">
                        <span class="cart-product-qty">1</span> × $99.00
                    </span>
                </div>


                <figure class="product-image-container">
                    <a href="demo1-product.html" class="product-image">
                        <img src="{{ asset('images/prod1.jpg') }}"
                            alt="product" width="80" height="80">
                    </a>

                    <a href="#" class="btn-remove"
                        title="Remove Product"><span><i class="bi bi-x"></i></span></a>
                </figure>
            </div>

        </div>


        <div class="dropdown-cart-total">
            <span>Total:</span>

            <span class="cart-total-price">$100.00</span>
        </div>


        <div class="dropdown-cart-action">
            <a href="/cart" class="btn btn-gray btn-block view-cart">Voir le pa</a>
            <a href="checkout.html" class="btn btn-dark btn-block">Valider la commande</a>
        </div>

    </div>


</div>
