<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('website/images/fav.jpg') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/fontello.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/shortcodes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/megamenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/responsive.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{ asset('website/revolution/css/rs6.css') }}">
</head>


<body>

    <!--page start-->
    <div class="page">




        <!--site-main start-->
        <div class="site-main">
            @include('website.components.common.header')
            <div class="site-main">

                @yield('content')
            </div>

            @include('website.components.common.footer')



        </div><!--site-main end-->





        <a id="totop" href="#top">
            <i class="icon-angle-up"></i>
        </a>


    </div><!-- page end -->


    <!-- Javascript -->
    <script src="{{ asset('website/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-migrate-3.4.1.min.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('website/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('website/js/slick.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('website/js/numinate.min.js') }}"></script>
    <script src="{{ asset('website/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('website/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('website/js/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script src='{{ asset('website/revolution/js/revolution.tools.min.js') }}'></script>
    <script src='{{ asset('website/revolution/js/rs6.min.js') }}'></script>
    <script src="{{ asset('website/revolution/js/slider.js') }}"></script>
    <!-- Javascript end-->
    @stack('scripts')
    
</body>

</html>