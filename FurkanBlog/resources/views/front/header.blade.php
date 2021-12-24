<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--External CSS-->
    <link rel="stylesheet" href="{{asset('css/template.css')}}">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <!--Fontawsome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Furkan ERPAY</title>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body style="background-color:#273a49   ">
    
    <!-- Start Menu -->  
        
        <!-- Image and text -->
        <nav class="menu navbar-expand-lg navbar-dark bg-dark text-white">
            <a class="navbar-brand float-left ml-3" href="#">
                <img src="{{asset('image/Furkan_Erpay.jpg')}}" class="img-profil" alt="Resim Yok" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item me-5 ">
                    <a class="nav-link" href="{{route('index')}}">Anasayfa </a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link" href="#">Hakkımızda</a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link" href="#">İletişim</a>
                    </li>
                    <li class="nav-item me-5">
                    <a class="nav-link disabled" href="#">Blog</a>
                    </li>
                </ul>
                </div>
        </nav>

    <!-- Fisished Menu -->



    <!-- Start Header -->
        <header>
        <div class="image-fluid img-raised">
            <img src="{{asset('image/kod3.jpeg')}}" alt="" srcset="" width="100%" height="auto">
        </div>
        </header>
    <!-- Finished Header -->