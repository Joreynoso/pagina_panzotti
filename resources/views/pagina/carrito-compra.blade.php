@extends('layouts.app')

@section('content')

<!-- carrito de compras -->
<section id="services" class="bg-light">
    <div class="container border-0 col-6">
        <h1 class="text-center carrito-titulo">CARRITO DE COMPRAS<span class="font-italic carrito-letra">-panzotti <i
                    class="fas fa-shopping-cart corazon"></i></span>
        </h1>

        <div class="row border-bottom p-2">
            <div class="col-12">
                <h1 class="Micarrito float-left">MiCarrito</h1>

                <a href="{{route('productoWeb')}}" class="carrito-btn float-right">seguir comprando</a>
            </div>
        </div>

        <div class="row  p-2">
            <div class="col-12">

                @foreach ($pedido as $item)
                <div class="row p-2 mt-2 border-bottom">
                    <div class="col-8 ">
                        <img src="{{ asset('img/'.$item->ruta)}}" alt="" class="carrito-img float-left">
                        <p class="carrito-codigo"># codigo producto: {{$item->codigo}}</p>
                        <p class="carrito-producto">{{$item->nombre}}</p>
                        <p class="carrito-kilos">kilos: {{$item->peso}}</p>
                        <br>
                        <p class="carrito-kilos">fecha entrega: {{$item->fechaEntrega}}</p>
                    </div>
                    <div class="col-4">
                            <form action="{{route('bajaProductoVenta2',$item->id)}}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button
                                    title="borarr"
                                    class="btn btn-danger-outline rounded-circle float-right mt-2"
                                    type="submit">x</button>
                           </form>
                        <h1 class="precio float-right mt-3">${{$item->monto}}</h1>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <div class="row border-bottom p-2 mt-4">
            <div class="col-12">
                <div class="float-right">
                    @foreach ($total as $item)
                    <p class="sub-total monserrat">Total: ${{$item->total}} </p>
                    @endforeach

                    <a href="{{route('ConfirmarCompra')}}" class="carrito-btn mb-2">confirmar compra!</a>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center m-5">
        <p class="carrito-kilos2"> al confirmar la compra estas comprometiendote
            a retirar el producto en la fecha acordada, <br> recorda que podes cancelar tus pedidos
            de compra con 48hs de anticipacion <br> a la fecha de retiro del mismo. atte Empresa Panzotti.
        </p>
    </div>
</section>

@endsection
