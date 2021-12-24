<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('back/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('back/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title') 
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('back/assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
    <link href="{{asset('back/assets/css/adminpage.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('back/assets/demo/demo.css')}}" rel="stylesheet" />




    <!-- Toastr library add CDN CSS  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<!-- T -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
    alpha/css/bootstrap.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" 
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



    </head>

    <body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('back/assets/img/sidebar-2.jpg')}}">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo"><a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
            ADMİN PANEL
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            <li class="nav-item @if(Request::segment(1) == "admin" and !Request::segment(2)) active @endif ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="material-icons">dashboard</i>
                <p>Anasayfa</p>
                </a>
            </li>
            <li class="nav-item @if(Request::segment(2) == "create" and !Request::segment(3)) active @endif ">
                <a class="nav-link" href="{{route('admin.create')}}">
                <i class="material-icons">M</i>
                <p>Makale ekle</p>
                </a>
            </li>
            <li class="nav-item @if(Request::segment(2)=="articles" and !Request::segment(3)) active @endif ">
                <a class="nav-link" href="{{route('admin.articles')}}"> 
                <i class="material-icons">content_paste</i>
                <p>Tüm Makaleler</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                <i class="material-icons">library_books</i>
                <p>Typography</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                <i class="material-icons">bubble_chart</i>
                <p>Icons</p>
                </a>
            </ul>
        </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                </form>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                        Stats
                    </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        Account
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="javascript:void(0)">Makaleler</a>
                    <hr>
                    <a class="dropdown-item" href="{{route('admin.logout')}}">Çıkış yap</a>
                    </div>
                </li>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->
        