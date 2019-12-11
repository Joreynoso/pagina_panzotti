@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Pedidos</li>
  </ol>
</nav>

<!-- mensaje -->
@if (Session::has('mensaje'))
<div class="alert alert-success" role="alert">
  {{Session::get('mensaje')}}
</div>
@elseif (Session::has('error'))
<div class="alert alert-warning" role="alert">
  {{Session::get('error')}}
</div>
@endif

{{-- <!-- nuevo -->
<div class="container-btn">
  <a href="{{route('productoventa_alta')}}" class="btn btn-info mb-2" href="#" role="button">
    <i class="fa fa-plus mr-2 fa-xs"></i>nuevo
  </a>
</div> --}}

<!-- buscador -->
<div class="row">
  <div class="col-xl-12 col-sm-12 mb-3">
    <div class="search-box">
      <i class="fa fa-search"></i>
      <input type="text" class="form-control" placeholder="Buscar..">
    </div>
  </div>
</div>

<!-- existen elementos? -->
@if ($productoventas->count() == 0)
<div class="alert alert-info">
  no existe ningun pedido.
</div>

@else
<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">Pedido | administrar</h6>
  </div>
  <div class="card-body">
    <p class="card-text">Cantidad de Pedidos: {{$productoventas->total()}}</p>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">peso</th>
            <th scope="col">monto</th>
            <th scope="col">producto</th>
            <th scope="col">cliente</th>
            <th scope="col">fecha del pedido</th>
            <th scope="col">fecha de entrega</th>
            <th scope="col">acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productoventas as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->peso}} kg</td>
            <td>${{$item->monto}}</td>

            @foreach ($item->productos as $producto)
            <td>{{$producto->nombre}}</td>
            @endforeach

            @foreach ($item->ventas as $venta)
            <td>{{$venta->cliente->name." ".$venta->cliente->apellido}}</td>
            @endforeach

            @foreach ($item->ventas as $venta)
            <td>{{$venta->created_at->format('d M Y - H:i:s')}}</td>
            @endforeach

            @foreach ($item->ventas as $venta)
            <td>{{$venta->fecha}}</td>
            @endforeach

            <td class="td-btn">
              <a href="{{route('editarProductoVenta', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>

              <form action="{{route('bajaProductoVenta',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      {{ $productoventas->links() }}
    </div>
  </div>
</div>

<!-- exportar a pdf -->
<div class="container-btn">
  <a href="" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>exportar a pdf
  </a>
</div>

@endif
@endsection
