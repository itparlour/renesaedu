<!DOCTYPE html>
<html data-bs-theme="light" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Renesa Education - Skill Development Institute</title>
    <meta name="twitter:description" content="Skill development platform.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="{{ asset('assets/img/logo.png') }}">
    <meta property="og:image" content="{{ asset('assets/img/favicon.jpg') }}') }}">
    <meta name="description" content="Develop your skill with Renesa Education.">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Renesa Education">

    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/img/favicon_64.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Font%20Awesome%205%20Brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Font%20Awesome%205%20Free.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Font%20Awesome%206%20Brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Font%20Awesome%206%20Free.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/FontAwesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/IcoFont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Poppins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owlcarousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/slick.css') }}">
    @stack('styles')
    @livewireStyles
</head>

<body>
    <div class="page-wrapper">
        <a href="#" id="back_to_top" class="active">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        <!-- ========== Start Header ========== -->
        <x-header />
        <!-- ========== End Header ========== -->

        <!-- ========== Start Content ========== -->
        @yield('content')
        <!-- ========== End Content ========== -->

        <!-- ========== Start Footer ========== -->
        <x-footer />
        <!-- ========== End Footer ========== -->

        <!-- ========== Start Modals ========== -->

        <!-- ========== End Modals ========== -->
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery-contact.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/js/textRotate.min.js') }}"></script>
    @stack('scripts')
    @livewireScripts
</body>

</html>