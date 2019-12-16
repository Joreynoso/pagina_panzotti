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
                            <button title="borarr" class="btn btn-danger-outline rounded-circle float-right mt-2"
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

                    <a class="carrito-btn mb-2 text-white" data-toggle="modal" data-target="#staticBackdrop">confirmar
                        compra!</a>
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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

                <div class="mb-5">
                    <!-- Dotted divider -->
                    <h1 class="text-center detalle-titulo">detalle de compra</h1>
                    <h2 class="font-italic carrito-letra text-center">panzotti</h2>
                    <div class="text-center">
                        <p style="font-weight: bold;">{{auth()->user()->name.' '.auth()->user()->apellido}}</p>
                    </div>

                    <hr class="dotted">

                    <div class="table-responsive">
                        <table class="table table-borderless" style="font-size: 13px;">
                            <thead>
                                <tr>
                                    <th scope="col">#codigo</th>
                                    <th scope="col">nombre</th>
                                    <th scope="col">peso</th>
                                    <th scope="col">fecha entrega</th>
                                    <th scope="col">monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedido as $item)
                                <tr>
                                    <td>{{$item->codigo}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>kg {{$item->peso}}</td>
                                    <td>{{$item->fechaEntrega}}</td>
                                    <td>${{$item->monto}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr class="dotted">
                    @foreach ($total as $item)
                    <p class="sub-total monserrat float-right">Total: ${{$item->total}} </p>
                    @endforeach
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="{{route('ConfirmarCompra')}}" type="submit" class="btn btn-primary circle">Confirmar Compra</a>
            </div>
        </div>
    </div>
</div>

@endsection

