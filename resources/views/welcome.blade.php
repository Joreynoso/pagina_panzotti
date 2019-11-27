@extends('layouts.app')

@section('content')

<!-- Mensaje Bienvenida -->
<header class="bg-primary text-white">
    <div class="container text-center">
        <h1 class="mt-5 texto">Panzotti</h1>
        <p class="lead">Proba nuestras riquisimas pastas caseras, elaboradas con productos naturales!</p>
        <button class="btn btn-danger">VER CATALOGO PRODUCTOS</button>
    </div>
</header>

<!-- nuestra historia -->
<section class="story-area left-text center-sm-text pos-relative">
    <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
    <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
    <div class="container">
        <div class="heading">
            <img class="heading-img" src="img/heading_logo.png" alt="">
            <h2>Quienes somos?</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p class="mb-30">Maecenas fermentum tortor id fringilla molestie. In hac habitasse
                    platea dictumst. Morbi maximus
                    lobortis ipsum, ut blandit augue ullamcorper vitae.
                    Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallis
                    massa. Morbi tellus
                    tortor, luctus et lacinia non, tincidunt in lacus.
                    Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulum id
                    dapibus dolor, ac
                    cursus nulla. </p>
            </div><!-- col-md-6 -->

            <div class="col-md-6">
                <p class="mb-30">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea
                    dictumst.Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae.
                    Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel
                    convallismassa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus.
                    Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulumidda
                    pibus dolor, accursus nulla. </p>
            </div>
        </div>
    </div>
</section>

<!-- tarjetas productos -->
<section id="services" class="bg-negro">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="heading">
                    <img class="heading-img" src="img/heading_logo.png" alt="">
                    <h2 class="text-white">Nuestros Productos</h2>
                    <p class="lead text-center text-white">te mostramos algunos de nuestros productos! </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="text-white bg-negro2 shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p>descripcion del producto</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        ver detalle
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="text-white bg-negro2 shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p>descripcion del producto</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        ver detalle
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="text-white bg-negro2 shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p>descripcion del producto</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        ver detalle
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="text-white bg-negro2 shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p>descripcion del producto</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        ver detalle
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-danger mt-4" style="width: 200px;">ver mas</button>
        </div>

    </div>
</section>

<!-- instagram -->
<section id="instagram">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="heading">
                    <img class="heading-img" src="img/heading_logo.png" alt="">
                    <h2>Seguinos en Instagram!</h2>
                    <p class="lead text-center">Enterate de todas nuestras noticias, promociones y ofertas,
                        seguinos!.</p>
                </div>

                <div class="gallery">
                    <span class="gallery-item shadow">
                        <a href="">
                            <img class="gallery-image" src="img/insta1.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="">
                            <img class="gallery-image" src="img/insta2.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="">
                            <img class="gallery-image" src="img/insta3.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="">
                            <img class="gallery-image" src="img/insta4.png" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="">
                            <img class="gallery-image" src="img/insta5.jpg" alt="imagen">
                        </a>
                    </span>

                    <span class="gallery-item shadow">
                        <a href="">
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
                <h2 class="text-center">Donde Encontarnos?</h2>
                <p class="text-center">Acercate y conoce nuestros productos, te van a encantar!!, te esperamos
                    en nuñez del prado al 135!. </p>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" width="80%" height="450"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1753.7218410382939!2d-65.78581202910586!3d-28.46618199860062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942428958592b1cd%3A0x514587c1badea74!2sN%C3%BA%C3%B1ez%20del%20Prado%20135%2C%20K4703BKJ%20San%20Fernando%20del%20Valle%20de%20Catamarca%2C%20Catamarca!5e0!3m2!1ses!2sar!4v1574770128462!5m2!1ses!2sar"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>

@endsection