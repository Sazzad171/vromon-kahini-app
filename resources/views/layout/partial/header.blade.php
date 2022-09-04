<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Vromon Kahini</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('public/css/css-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/css-jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/css-font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/css-owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/css-owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/css-animate.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/css-style.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/css-responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" type="image/png" href="{{ asset('public/favicons/img-favicon.ico') }}">

    @yield('header')


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div id="preloader"></div>

    <header id="header" class="header-area headerV1">
        <nav class="navbar navbar-expand-lg footstep-nav footstep-nav-v1">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('public/images/common-logo.png') }}" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('manageStory') }}">Manage Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Welcome {{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="nav-link" type="submit" href="javascript:void(0)">Logout</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login/Signup</a>
                            </li>
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('publishNew') }}">Publish Yours</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>