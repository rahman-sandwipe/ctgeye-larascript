<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Larascripts | News Minimal Responsive Larascripts</title>
        <meta name="description" content="Author: Md. Masuder Rahman, Template: HTML, Category: Blog, News">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontends/media/favicon.svg') }}">
        @include('frontends.inc.style')
        <!-- Site Stylesheet -->
        <link rel="stylesheet" href="{{ asset('frontends/css/app.css') }}">

    </head>

    <body class="mobilemenu-active">
        {{-- <div id="preloader" class="preloader">
            <div class="loader-wrap">
                <div class="single-box">
                    <div class="circle-holder"></div>
                    <div class="shadow-holder"></div>
                </div>
                <div class="single-box">
                    <div class="circle-holder"></div>
                    <div class="shadow-holder"></div>
                </div>
                <div class="single-box">
                    <div class="circle-holder"></div>
                    <div class="shadow-holder"></div>
                </div>
                <div class="single-box">
                    <div class="circle-holder"></div>
                    <div class="shadow-holder"></div>
                </div>
            </div>
        </div> --}}

        <a href="#main-wrapper" id="backto-top" class="back-to-top" aria-label="Back To Top">
            <i class="regular-direction-up"></i>
        </a>

        <div id="main-wrapper" class="main-wrapper">

            <!--=====================================-->
            <!--=        Header Area Start       	=-->
            <!--=====================================-->
            @include('frontends.inc.header')
            
            <!--=====================================-->
            <!--=         Footer Area Start         =-->
            <!--=====================================-->
            @yield('front_layouts')

            <!--=====================================-->
            <!--=         Footer Area Start         =-->
            <!--=====================================-->
            @include('frontends.inc.footer')
        </div>
        <!-- Search Start -->
        <div id="search-trigger" class="search-input-wrap">
            <div class="container">
                <button type="button" class="close">×</button>
                <form class="search-form">
                    <input type="search" value="" placeholder="Search" />
                    <button type="submit" class="search-btn">
                        <i class="regular-search-02"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- Search End -->

        <!-- Jquery Js -->
        @include('frontends.inc.scripts')
        <!-- Site Scripts -->
        <script src="{{ asset('frontends/js/app.js') }}"></script>
    </body>
</html>