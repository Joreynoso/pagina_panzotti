@extends('layouts.app')

@section('content')

<!-- Mensaje Bienvenida Productos -->
<header class="bg-primary2 text-white">
    <div class="container text-center">
        <h1 class="mt-5 texto">Productos Panzotti</h1>
        <p class="lead">Te invitamos a conocer todos nuestros productos!</p>
    </div>
</header>

<!-- tarjetas productos -->
<section id="services" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="heading">
                    <img class="heading-img" src="img/heading_logo.png" alt="">
                    <h2>Nuestros Productos</h2>
                    <p class="lead text-center">elegi el producto que mas te guste y hace un pedido! </p>
                </div>

                <div class="mb-5">
                    <!-- Dotted divider -->
                    <hr class="dotted">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p class="font-weight-bold">Precio/kg: 75$</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        hacer pedido
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p class="font-weight-bold">Precio/kg: 75$</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        hacer pedido
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p class="font-weight-bold">Precio/kg: 75$</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        hacer pedido
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 mt-3">
                <div class="blockquote-custom-icon bg-success shadow-sm"><i class="fas fa-seedling text-white"></i>
                </div>
                <div class="shadow rounded overflow p-3 tarjeta">
                    <img src="img/1574600669.jpeg" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">Fetuccine</p>
                    <p class="font-weight-bold">Precio/kg: 75$</p>
                    <a href="" title="editar" class="btn btn-sm btn-rojo text-white mb-3">
                        <i class="fa fa-shopping-cart"></i>
                        hacer pedido
                    </a>
                </div>
            </div>
        </div>

        <p class="lead text-center mt-5 letra">En Panzotti Pastas Trabajamos día a día para brindar servicio,
            atención y valor a nuestros clientes que confían en nosotros y nos eligen.

            Buscamos satisfacer todas las necesidades que el cliente solicita y seguir creciendo en líneas de productos,
            y atención personalizada.

            Muchas gracias por confiar en nosotros, nuestra meta es su satisfacción.

            La Empresa. <i class="fa fa-heart corazon"></i> </p>
    </div>
</section>

@endsection