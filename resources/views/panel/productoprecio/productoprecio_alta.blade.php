@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
      <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
      <li class="breadcrumb-item"><a href="{{ route('productoprecio')}}" class="text-uppercase">Producto Precio</a></li>
      <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
  </nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Producto Precio</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{route('altaProductoPrecio')}}" method="POST">
            @csrf

            @error('fecha')
            <div class="alert alert-danger" role="alert">
                la fecha es obligatorio.
            </div>
            @enderror

            @error('precio')
            <div class="alert alert-danger" role="alert">
                el precio es obligatorio.
            </div>
            @enderror

            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" placeholder="ingrese fecha.." class="form-control mb-2">

            <label for="precio">Precio</label>
            <input type="text" name="precio" placeholder="ingrese precio.." class="form-control mb-2">

            <div class="form-group">
                <label for="productoprecio">seleccionar un producto</label>
                <select class="form-control" id="producto_id" name="producto_id">
                    @foreach ($productos as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">agregar producto precio</button>
        </form>
    </div>
</div>

@endsection
