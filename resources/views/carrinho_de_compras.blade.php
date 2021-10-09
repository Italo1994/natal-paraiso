<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->

        <!-- Materialize -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/flex-properties.css">
        <link rel="stylesheet" href="/css/responsive.css">

        <script src="/js/script.js"></script>
    </head>
    <body onload="start()">

    @yield('header')
    <header>
        <div id="header">
            <nav class="main-nav">
                <div class="area-logo ">
                    <a href="/" class="justify-align-center"> <img src="/img/logo.png"/> <p class="azul-escuro">Natal <span class="laranja"> Paraíso </span> </p> </a>
                </div>
                <div class="area-links">
                    <ul class="list-items">
                        <li class="flex-1">
                            <a href="/" class="justify-align-center">INÍCIO</a>
                        </li>
                        <li class="flex-1">
                            <a href="/passeios" class="justify-align-center">PASSEIOS</a>
                        </li>
                        <li class="flex-1">
                            <a href="/" class="justify-align-center flex-1">SOBRE</a>
                        </li>
                        <li class="flex-1">
                            <a href="/" class="justify-align-center">CONTATO</a>
                        </li>
                    </ul>
                </div>
                <div class="area-account">
                    <a href="#" class="fb-35">
                        <!-- <img src="/img/icons/search.svg" width="100%"> -->
                        <i class="large material-icons" style="color: black;">search</i>
                    </a>
                    <a href="#" class="fb-35">
                        <!-- <img src="/img/icons/account_circle.svg" width="100%"> -->
                        <i class="large material-icons" style="color: black;">account_circle</i>
                    </a>
                    <a href="/carrinho" class="fb-35">
                        <!-- <img src="/img/icons/shopping_cart.svg" width="100%"> -->
                        <i class="large material-icons" style="color: black;">local_grocery_store</i>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer id="footer">
        <div class="row container text-center">
            <div class="col s12 m12 l6">
                <a href="#" class="social-icons">
                    <ion-icon name="logo-facebook" class="tamanho-icone"></ion-icon>
                </a>
                <a href="#" class="social-icons">
                    <ion-icon name="logo-instagram" class="tamanho-icone" style="color: white;"></ion-icon>
                </a>
                <a href="#" class="social-icons">
                    <ion-icon name="logo-youtube" class="tamanho-icone" style="color: white;"></ion-icon>
                </a>
            </div>

            <div class="col s12 m12 l6 margin-responsive">
                <div class="area-whatsapp justify-align-center">
                    <a href="#" class="social-icons">
                        <ion-icon name="logo-whatsapp" class="tamanho-icone" style="color: white;"></ion-icon>
                    </a>
                    <p>Nosso Whatsapp: (84) 99999-9999</p>
                </div>
            </div>
        </div>

        <div class="row container margin-responsive" style="height: 100%;">
            <div class="col s12 dp-flex justify-align-center" style="width: 100%; height: 100%;">
                <p>Natal <span class="laranja"> Paraíso </span> &copy; 2021</p>
            </div>  
        </div>
    </footer>

    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>