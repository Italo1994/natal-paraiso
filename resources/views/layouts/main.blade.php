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

        <script src="/js/script.js"></script>
    </head>
    <body onload="start()">

    <header>
        <div id="header">
            <nav class="main-nav">
                <div class="area-logo ">
                    <a href="/" class="justify-align-center"> <img src="/img/logo.png"/> <p class="">Natal <span class="laranja"> Paraíso </span> </p> </a>
                </div>
                <div class="area-links">
                    <ul class="list-items">
                        <li class="flex-1">
                            <a href="/" class="justify-align-center">INÍCIO</a>
                        </li>
                        <li class="flex-1">
                            <a href="/" class="justify-align-center">PASSEIOS</a>
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
                    <!--
                <div class="input-field col s12">
                    <input id="search" type="text" class="validate">
                    <label for="search">Search</label>
                </div>
                    -->
                    <a href="#" class="fb-35">
                        <img src="/img/icons/search.svg" width="100%">
                    </a>
                    <a href="#" class="fb-35">
                        <img src="/img/icons/account_circle.svg" width="100%">
                    </a>
                    <a href="#" class="fb-35">
                        <img src="/img/icons/shopping_cart.svg" width="100%">
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <section class="container">
        <div class="container-passeios">
            <div class="row">
                <div class="col s12 text-center">
                    <h1 class="main-title azul-escuro">Venha Viver <span class="rosa">Experiências</span> Incríveis</h1>
                    <i class="material-icons arrow-icon azul-escuro">arrow_downward</i>
                </div>
            </div>

            <div class="row">
                <div class="col s3">
                    <h4 class="azul-escuro">Nossos <span class="rosa">Passeios</span> </h3>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l4 box-passeio">
                    <div class="row">
                        <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="/img/barco4" class="responsive-img">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4 box-passeio">
                    <div class="row">
                        <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="/img/barco1" class="responsive-img">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4 box-passeio">
                    <div class="row">
                        <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                            <img src="/img/canal_veneza.jpg" class="responsive-img">
                            <span class="card-title">Card Title</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col s12 m6 l4 box-passeio">
                        <div class="row">
                            <div class="col s12 m12">
                            <div class="card">
                                <div class="card-image">
                                <img src="/img/dunas" class="responsive-img">
                                <span class="card-title">Card Title</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4 box-passeio">
                        <div class="row">
                            <div class="col s12 m12">
                            <div class="card">
                                <div class="card-image">
                                <img src="/img/eiffel-tower.jpg" class="responsive-img">
                                <span class="card-title">Card Title</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4 box-passeio">
                        <div class="row">
                            <div class="col s12 m12">
                            <div class="card">
                                <div class="card-image">
                                <img src="/img/barco2" class="responsive-img">
                                <span class="card-title">Card Title</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>

        </div> <!-- FIM DA TAG CONTAINER PASSEIOS -->

    </section>

    <section class="" id="secao-parallax">
        
    </section>

    <section class="container" id="quem-somos">
        <div class="row">
            <div class="col s3">
                <h4 class="azul-escuro">Quem <span class="rosa">Somos</span> </h4>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m10 l8">
                <div class="box-image">
                    <img src="/img/praia" alt="imagem 1" width="100%" id="imagem1"/>
                </div>
            </div>
        </div>

    </section>

       @yield('content')

       <footer>
           <p>Natal Paraíso &copy; 2021</p>
       </footer>

    </body>
</html>