@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Venta</a></li>
      <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
  </nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Venta</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{route('altaVenta')}}" method="POST">
            @csrf

            @error('fecha')
            <div class="alert alert-danger" role="alert">
                la fecha es obligatorio.
            </div>
            @enderror

            @error('montototal')
            <div class="alert alert-danger" role="alert">
                el monto total es obligatorio.
            </div>
            @enderror

            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" requiered placeholder="ingrese fecha.." class="form-control mb-2">

            <label for="montototal">Monto Total</label>
            <input type="text" name="montototal" placeholder="ingrese monto total.." class="form-control mb-2">

            <div class="form-group">
                <label for="venta">seleccionar un cliente</label>
                <select class="form-control" id="cliente_id" name="cliente_id">
                    @foreach ($clientes as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">agregar materia prima</button>
        </form>
    </div>
</div>

@endsection
