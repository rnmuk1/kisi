<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kisi Express</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="global">


        @include('components.default-navbar')



        @yield('content')

        @include('components.footer')

    </div>


    <div class="overplay">

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {

            $('.search-alert').addClass('show')
            setTimeout(() => {
            $('.search-alert').removeClass('show')
            }, 4000);


            $('#oncart').click(function(e) {

                e.preventDefault()
                $('.mobile-cart').addClass('show')

                $('.overplay').addClass('show')
            })
            $('.bi-x-lg').click(function() {

                $('.mobile-cart').removeClass('show')

                $('.overplay').removeClass('show')
            })


            $('.overplay').click(function() {

                $('.mobile-cart').removeClass('show')

                $('.overplay').removeClass('show')
            })
        })
    </script>

<div class="search-alert">
    <div class="cart-message">
        <div class="content d-flex align-items-center">
            <i class="bi bi-check2-square me-4"></i>
            <div class="text-star">
                <p>Un article a été ajouté au panier !</p>
            </div>
        </div>
    </div>
</div>

</body>

</html>
