@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Clientes</li>
    </ol>
</nav>

<h1>Planilla Ingreso/Egreso| <small> alta </small></h1>

<!-- formulario -->
<div class="card">
    <div class="card-body">
        <form class="form-group" action="{{route('altampplanillaingresoegresos')}}" method="POST">
            @csrf

            @error('fecha')
            <div class="alert alert-danger" role="alert">
                la fecha es obligatorio.
            </div>
            @enderror

            @error('observacion')
            <div class="alert alert-danger" role="alert">
                la observacion es obligatorio.
            </div>
            @enderror

            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" placeholder="ingrese la fecha.." class="form-control mb-2">

            <label for="observacion">Observacion</label>
            <input type="text" name="observacion" placeholder="ingrese la observacion.." class="form-control mb-2">

            <div class="form-group">
                <label for="mpplanillaingresoegreso">seleccione un tipo de movimiento</label>
                <select class="form-control" id="tipomovimiento_id" name="tipomovimiento_id">
                    @foreach ($tipomovimientos as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="mpplanillaingresoegreso">seleccionar un empleado</label>
                <select class="form-control" id="" name="empleado_id" name="empleado_id">
                    @foreach ($empleados as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">agregar planilla ingreso/egreso</button>
        </form>
    </div>
</div>

@endsection