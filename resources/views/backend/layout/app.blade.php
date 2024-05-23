<!DOCTYPE html>
<html lang="zxx">
<head>
     @stack('title')
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    @stack('style')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    {{-- <style>
        .active-nav {
    color: #1ecb15 !important;
    height: 20px;
    font-size: 18px;
    border-radius: 90px 90px 0px 0px;
    background: #fff;
    font-weight: 900 !important;
    margin-top: 5px;
}
    </style> --}}
</head>

<body onload="initialize()" class="dark-scheme">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
         <!-- header begin -->
         <header class="transparent has-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ route('home') }}">
                                            <img class="logo-1" src="{{ asset('./images/logo-light.png') }}" >
                                            <img class="logo-2" src="{{ asset('./images/logo-light.png') }}" >
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="{{Route::is('admin.blogdashboard') ? 'active-nav' :''}} menu-item" href="{{ route('admin.blogdashboard') }}">Blog DAshboard</a>
                                    </li>
                                    <li><a class="{{Route::is('admin.cardashboard') ? 'active-nav' :''}} menu-item" href="{{ route('admin.cardashboard') }}">Car Dashboard</a>
                                    </li>
                                    <li><a class="{{Route::is('admin.emailmarketing') ? 'active-nav' :''}} menu-item" href="{{ route('admin.emailmarketing') }}">Email Marketing</a>
                                    </li>
                                    <li><a class="{{Route::is('booking') ? 'active-nav' :''}} menu-item" href="{{ route('booking') }}">Booking</a>
                                    </li>
                                    <li><a class="{{Route::is('gallery') ? 'active-nav' :''}} menu-item" href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li><a class="{{Route::is('blog') ? 'active-nav' :''}} menu-item" href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li><a class="{{Route::is('contactus') ? 'active-nav' :''}} menu-item" href="{{ route('contactus') }}">Contact</a>
                                    </li>
                                    <li id="admin-social">
                                        @include('components.button_login')
                                    </li>

                                </ul>
                            </div>

                            <div class="de-flex-col">
                                <div class="menu_side_area" style="background-size: 100%; background-repeat: no-repeat;">
                                    @include('components.button_login')
                                    <span id="menu-btn"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            @yield('slot')
        </div>
        @yield('content')

        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="{{ route('home') }}">
                                        Copyright 2023 - By Awais
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset("js/designesia.js") }}"></script>
    @stack('script')

</body>

</html>

