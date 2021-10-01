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

    <header>
        <div id="header">
            @yield('navegacao')
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

        <div id="carousel">

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
                <div class="col s3 padding-sup">
                    <h4 class="azul-escuro">Nossos <span class="rosa">Passeios</span> </h3>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6 box-passeio">
                    <a href="#">
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="/img/barco4" class="responsive-img">
                                        <span class="card-title">Mergulho em Maracajaú</span>
                                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="informacoes-passeio">
                                            <div class="area-preco">
                                                <h5>Maracajaú (Passeio de Barco)</h5>
                                            </div>
                                            <div class="area-preco">
                                                <p>
                                                    A PARTIR DE <b>R$ 270,00</b>
                                                </p>      
                                            </div>
                                        </div> <!-- Fim da div informacoes-passeio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col s12 m6 l6 box-passeio">
                    <a href="#">
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="/img/barco1" class="responsive-img">
                                    <span class="card-title">Mergulho em Fernando de Noronha</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <div class="informacoes-passeio">
                                        <div class="area-preco">
                                            <h5>Fernando de Noronha Passeio</h5>
                                        </div>
                                        <div class="area-preco">
                                            <p>
                                                A PARTIR DE <b>R$ 220,00</b>
                                            </p>      
                                        </div>
                                    </div> <!-- Fim da div informacoes-passeio -->
                                </div>
                            </div>
                        </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="row">
                <div class="col s12 m6 l6 box-passeio">
                    <a href="#">
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="/img/canal_veneza.jpg" class="responsive-img">
                                    <span class="card-title">Passeio de barco em Veneza</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="informacoes-passeio">
                                            <div class="area-preco">
                                                <h5>Veneza (Passeio de Barco)</h5>
                                            </div>
                                            <div class="area-preco">
                                                <p>
                                                    A PARTIR DE <b>R$ 170,00</b>
                                                </p>      
                                            </div>
                                        </div> <!-- Fim da div informacoes-passeio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m6 l6 box-passeio">
                    <a href="#">
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="/img/barco2" class="responsive-img">
                                    <span class="card-title">Passeio de barco em Bora Bora</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="informacoes-passeio">
                                            <div class="area-preco">
                                                <h5>Bora Bora (Passeio de Barco)</h5>
                                            </div>
                                            <div class="area-preco">
                                                <p>
                                                    A PARTIR DE <b>R$ 150,00</b>
                                                </p>
                                            
                                            </div>
                                        </div> <!-- Fim da div informacoes-passeio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6 l6 box-passeio">
                    <a href="#">
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="/img/dunas" class="responsive-img">
                                    <span class="card-title">Passeio nas Dunas</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="informacoes-passeio">
                                            <div class="area-preco">
                                                <h5>Maracajaú (Passeio de Lancha)</h5>
                                            </div>
                                            <div class="area-preco">
                                                <p>A PARTIR DE <b>R$ 240,00</b> </p>
                                            </div>
                                        </div> <!-- Fim da div informacoes-passeio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s12 m6 l6 box-passeio">
                    <a href="#">
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="/img/eiffel-tower.jpg" class="responsive-img">
                                    <span class="card-title">Passeio na Torre Eiffel</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                                    </div>
                                    <div class="card-content">
                                        <div class="informacoes-passeio">
                                            <div class="area-preco">
                                                <h5>Bora Bora (Passeio de Barco)</h5>
                                            </div>
                                            <div class="area-preco">
                                                <p>
                                                    A PARTIR DE <b>R$ 280,00</b>
                                                </p>
                                            </div>
                                        </div> <!-- Fim da div informacoes-passeio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div> <!-- FIM DA TAG CONTAINER PASSEIOS -->

    </section>

    <section class="" id="secao-parallax">
        
    </section>

    <section class="container padding-sup" id="quem-somos">
        <div class="row">
            <div class="col s3">
                <h4 class="azul-escuro">Quem <span class="rosa">Somos</span> </h4>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6 l8">
                <div class="box-image">
                    <img src="/img/praia" alt="imagem 1" width="100%" id="imagem1"/>
                </div>
            </div>
            <div class="col s12 m6 l4 dp-flex justify-align-end">
                <p>
                    A <strong>Natal Paraíso</strong> é uma empresa de Agência de Turismo com o propósito
                    de oferecer serviços para que os nossos turistas desfrutem durante sua estadia, vivam 
                    e levem <strong>experiências incríveis e marcantes</strong> do estado do Rio Grande do Norte.
                </p>
            </div>
        </div>

    </section>

    <section class="container padding-sup" id="contato">
        <div class="row">
            <h4 class="azul-escuro">Entre em <span class="rosa"> Contato </span> </h4>
        </div>

        <div class="row">
            <div class="col s12 l8">
                <form action="">
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field s6">
                                <input placeholder="Nome" id="nome" name="nome" type="text" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field s6">
                                <input placeholder="E-mail" id="email" name="email" type="email" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field s6">
                                <input placeholder="Assunto" id="assunto" name="assunto" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field s6">   
                                <div class="row">
                                    <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                                            <label for="textarea1">Mensagem</label>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l12 m6 s6">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    @yield('content')

    <footer id="footer">
        <div class="row container text-center ">
            <div class="col s12 m12 l6">
                <a href="https://www.facebook.com/" class="social-icons">
                    <ion-icon name="logo-facebook" class="tamanho-icone" style="color: white;"></ion-icon>
                </a>
                <a href="https://www.instagram.com/" class="social-icons">
                    <ion-icon name="logo-instagram" class="tamanho-icone" style="color: white;"></ion-icon>
                </a>
                <a href="https://www.youtube.com/" class="social-icons">
                    <ion-icon name="logo-youtube" class="tamanho-icone" style="color: white;"></ion-icon>
                </a>
            </div>
            <!-- color: #D75290 -->

            <div class="col s12 m12 l6 margin-responsive">
                <div class="area-whatsapp justify-align-center">
                    <a href="https://web.whatsapp.com/" class="social-icons">
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
    </body>
</html>