@extends('layouts.app')

@section('content')

<!-- Mensaje Bienvenida -->
<header class="bg-primary1 text-white">
    <div class="container text-center">
        <h1 class="mt-5 texto font-beyond">Panzotti</h1>
        <p class="lead">Proba nuestras riquisimas pastas caseras, elaboradas con productos naturales!
        </p>
        <a class="btn btn-rojo text-white" role="button" href="{{route('productoWeb')}}">VER CATALOGO PRODUCTOS</a>
    </div>
</header>

<!-- nuestra historia -->
<section class="story-area left-text center-sm-text pos-relative">
    <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
    <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
    <div class="container">
        <div class="heading">
            <img class="heading-img" src="img/heading_logo.png" alt="">
            <h2 class="font-beyond">Quienes somos?</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p style="text-align: justify" class="mb-30">Pastas Panzotti es una empresa familiar, que se dedica a la elaboración de Pastas
                     100% CASERAS. Nuestros productos son de la mejor calidad y todo 100% naturales. Nuestro amplio
                     abanico de variedad te ofrece fetuccini de varios sabores, espaguetis, ravioles y cappellettis.
                       </p>
            </div><!-- col-md-6 -->

            <div class="col-md-6">
                <p style="text-align: justify" class="mb-30">Panzotti es una empresa familiar la cual tiene como principal actividad la producción de
                    pastas frescas, dicha producción está compuesta por tres productos (ravioles, fetuccini y espaguetis).
                    Todos nuestros productos están elaborados con las mejores materias primas y el mayor de los cuidados
                    en seguridad e higiene. Te invitamos a conocer nuestras instalaciones.   </p>
            </div>
        </div>
    </div>
</section>

<!-- tarjetas productos -->
<section id="carousel" class="bg-light">
    <div class="heading">
        <img class="heading-img" src="img/heading_logo.png" alt="">
        <h2 class="text-center font-beyond">Lo mas Vendido</h2>
        <p class="text-center">te mostramos algunos de nuestros productos mas vendidos! </p>
    </div>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
                <div class="jumbotron pulse animated hero-nature carousel-hero">
                    <h1 class="hero-title font-beyond">Spaguetti</h1>
                    <p class="hero-subtitle lead">pastas caseras!</p>
                    <p><a class="btn btn-rojo text-white mt-5" role="button" href="{{route('productoWeb')}}">VER TODOS LOS PRODUCTOS</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="jumbotron pulse animated hero-photography carousel-hero">
                    <h1 class="hero-title font-beyond">Fetuccini</h1>
                    <p class="hero-subtitle lead">pastas caseras!</p>
                    <p><a class="btn btn-rojo text-white mt-5" role="button" href="{{route('productoWeb')}}">VER TODOS LOS PRODUCTOS</a></p>
                </div>
            </div>
            <div class="carousel-item active">
                <div class="jumbotron pulse animated hero-technology carousel-hero">
                    <h1 class="hero-title font-beyond">Ravioles</h1>
                    <p class="hero-subtitle">pastas caseras!</p>
                    <p><a class="btn btn-rojo text-white  mt-5" role="button" href="{{route('productoWeb')}}">VER TODOS LOS PRODUCTOS</a></p>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i
                    class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i
                    class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
        </ol>
    </div>
</section>


<!-- instagram -->
<section id="instagram">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="heading">
                    <img class="heading-img" src="img/heading_logo.png" alt="">
                    <h2 class="text-center font-beyond">Seguinos en Instagram!</h2>
                    <p class="text-center">Enterate de todas nuestras noticias, promociones y ofertas,
                        seguinos!.</p>
                </div>

                <div class="gallery">
                    <span class="gallery-item shadow">
                        <a href="https://www.instagram.com/panzotti_pastas/?hl=es-la">
                            <img class="gallery-image" src="img/insta1.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="https://www.instagram.com/panzotti_pastas/?hl=es-la">
                            <img class="gallery-image" src="img/insta2.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="https://www.instagram.com/panzotti_pastas/?hl=es-la">
                            <img class="gallery-image" src="img/insta3.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="https://www.instagram.com/panzotti_pastas/?hl=es-la">
                            <img class="gallery-image" src="img/insta4.png" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="https://www.instagram.com/panzotti_pastas/?hl=es-la">
                            <img class="gallery-image" src="img/insta5.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="https://www.instagram.com/panzotti_pastas/?hl=es-la">
                            <img class="gallery-image" src="img/insta6.png" alt="imagen">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Localizacion -->
<section id="localizacion" class="bg-light">
    <div class="map-clean text-center">
        <div class="container">
            <div class="intro">
                <img class="heading-img" src="img/heading_logo.png" alt="">
                <h2 class="text-center font-beyond">Donde Encontarnos?</h2>
                <p class="text-center">Acercate y conoce nuestros productos, te van a encantar!!, te esperamos
                    en nuñez del prado al 135!. </p>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" width="80%" height="450"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1753.7218410382939!2d-65.78581202910586!3d-28.46618199860062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942428958592b1cd%3A0x514587c1badea74!2sN%C3%BA%C3%B1ez%20del%20Prado%20135%2C%20K4703BKJ%20San%20Fernando%20del%20Valle%20de%20Catamarca%2C%20Catamarca!5e0!3m2!1ses!2sar!4v1574770128462!5m2!1ses!2sar"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>

@endsection
