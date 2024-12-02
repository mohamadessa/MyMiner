<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cryco - ICO & Crypto Landing HTML Template</title>
    <link rel="shortcut icon" href="{{ asset('assets/web/assets/img/favicon.png') }}" type="images/x-icon" />

    <!-- css include -->
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/main.css') }}">

</head>

<body>

    <!-- backtotop - start -->
    <div class="xb-backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader start -->
    <div class="preloader">
        <div class="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <div class="body_wrap-two">

        <!-- header start -->
        @include('web.includes.header')


        <!-- header end -->

        <!-- main start -->
        @yield('content')
        <!-- main end -->

        <!-- footer start -->

        @include('web.includes.footer')
        <!-- footer end -->
    </div>

    <!-- jquery include -->
    <script src="{{ asset('assets/web/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/scrollspy.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/web/assets/js/main.js') }}"></script>

</body>

</html>
