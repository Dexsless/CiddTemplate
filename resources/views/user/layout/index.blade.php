<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ninico - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="user/assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="user/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet" href="user/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="user/assets/css/slick.css">
    <link rel="stylesheet" href="user/assets/css/nice-select.css">
    <link rel="stylesheet" href="user/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="user/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="user/assets/css/meanmenu.css">
    <link rel="stylesheet" href="user/assets/css/spacing.css">
    <link rel="stylesheet" href="user/assets/css/main.css">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    {{-- header --}}
    @include('user.layout.nav')
    {{-- header --}}
    <!-- sidebar-menu-area -->
    @include('user.layout.sidebar')
    <!-- sidebar-menu-area-end -->

    <!-- header-cart-start -->
    @include('user.layout.cart')
    <!-- header-cart-end -->

    <!-- main-area-start -->
    <main>
        @yield('content')
    </main>
    <!-- main-area-end -->

    <!-- footer-area-start -->
    @include('user.layout.footer')
    <!-- footer-area-end -->



    <!-- JS here -->
    <script src="user/assets/js/jquery.js"></script>
    <script src="user/assets/js/waypoints.js"></script>
    <script src="user/assets/js/bootstrap.bundle.min.js"></script>
    <script src="user/assets/js/swiper-bundle.js"></script>
    <script src="user/assets/js/slick.js"></script>
    <script src="user/assets/js/magnific-popup.js"></script>
    <script src="user/assets/js/nice-select.js"></script>
    <script src="user/assets/js/counterup.js"></script>
    <script src="user/assets/js/wow.js"></script>
    <script src="user/assets/js/isotope-pkgd.js"></script>
    <script src="user/assets/js/imagesloaded-pkgd.js"></script>
    <script src="user/assets/js/countdown.js"></script>
    <script src="user/assets/js/ajax-form.js"></script>
    <script src="user/assets/js/meanmenu.js"></script>
    <script src="user/assets/js/jquery.knob.js"></script>
    <script src="user/assets/js/main.js"></script>
</body>

</html>
