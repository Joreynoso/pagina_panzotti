@extends('layouts.app')

@section('content')

<!-- carrito de compras -->
<section id="services" class="bg-light">
    <div class="container col-6">
        <h1 class="text-center carrito-titulo">CARRITO DE COMPRAS<span
                class="font-italic carrito-letra">-panzotti <i class="fas fa-shopping-cart corazon"></i></span>
        </h1>

        <div class="row border-bottom p-2">
            <div class="col-12">
                <h1 class="Micarrito float-left">MiCarrito</h1>

                <a href="" class="carrito-btn float-right">seguir comprando</a>
            </div>
        </div>

        <div class="row border-bottom p-2">
            <div class="col-12">
                <div class="row p-2 mt-2">
                    <div class="col-8">
                        <img src="img/1575658490.jpeg" alt="" class="carrito-img float-left">
                        <p class="carrito-codigo"># numero de producto</p>
                        <p class="carrito-producto">fetuccine panzotti</p>
                        <p class="carrito-kilos">kilos: 2 </p>
                    </div>
                    <div class="col-4">
                        <a href="" class="borrar float-right mt-3">x</a>
                        <h1 class="precio float-right mt-3">$15</h1>
                    </div>
                </div>

                <div class="row p-2 mt-2">
                    <div class="col-8">
                        <img src="img/1575658490.jpeg" alt="" class="carrito-img float-left">
                        <p class="carrito-codigo"># numero de producto</p>
                        <p class="carrito-producto">fetuccine panzotti</p>
                        <p class="carrito-kilos">kilos: 2 </p>
                    </div>
                    <div class="col-4">
                        <a href="" class="borrar float-right mt-3">x</a>
                        <h1 class="precio float-right mt-3">$15</h1>
                    </div>
                </div>

                <div class="row p-2 mt-2">
                    <div class="col-8">
                        <img src="img/1575658490.jpeg" alt="" class="carrito-img float-left">
                        <p class="carrito-codigo"># numero de producto</p>
                        <p class="carrito-producto">fetuccine panzotti</p>
                        <p class="carrito-kilos">kilos: 2 </p>
                    </div>
                    <div class="col-4">
                        <a href="" class="borrar float-right mt-3">x</a>
                        <h1 class="precio float-right mt-3">$15</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row border-bottom p-2 mt-4">
            <div class="col-12">
               <div class="float-right">
                    <p class="sub-total ">subtotal: $500 </p>
                    <p class="sub-total monserrat">total: $750 </p>
                    <a href="" class="carrito-btn mb-2">confirmar compra!</a>
               </div>
            </div>
        </div>

    </div>
</section>

@endsection