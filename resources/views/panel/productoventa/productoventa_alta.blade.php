@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Producto Venta</a></li>
      <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
  </nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Producto Venta</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{route('altaProductoVenta')}}" method="POST">
            @csrf

            @error('peso')
            <div class="alert alert-danger" role="alert">
                el peso es obligatorio.
            </div>
            @enderror

            @error('monto')
            <div class="alert alert-danger" role="alert">
                el monto es obligatorio.
            </div>
            @enderror

            <label for="peso">Peso</label>
            <input type="text" name="peso" placeholder="ingrese peso.." class="form-control mb-2">

            <label for="monto">Monto</label>
            <input type="text" name="monto" placeholder="ingrese monto.." class="form-control mb-2">

            <div class="form-group">
                <label for="productoventa">seleccionar un producto</label>
                <select class="form-control" id="producto_id" name="producto_id">
                    @foreach ($productos as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="productoventa">seleccionar una venta</label>
                <select class="form-control" id="venta_id" name="venta_id">
                    @foreach ($ventas as $item)
                    <option value="{{$item->id}}"> {{$item->fecha}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">agregar producto venta</button>
        </form>
    </div>
</div>

@endsection
