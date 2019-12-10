@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="{{ route('venta')}}" class="text-uppercase">Venta</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Venta</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateVenta', $venta->id) }}" method="POST">
            @method('PUT')
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
            <input value="{{ $venta->fecha }}" type="text" name="fecha" placeholder="ingrese fecha.." class="form-control mb-2">

            <label for="montototal">Monto Total</label>
            <input value="{{ $venta->montototal }}" type="text" name="montototal" placeholder="ingrese monto total.." class="form-control mb-2">

            <div class="form-group">
                <label for="venta">seleccionar un cliente</label>
                <select class="form-control" id="cliente_id" name="cliente_id">
                    @foreach ($clientes as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
        </form>
    </div>
</div>

@endsection
