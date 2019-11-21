@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Panel</a>
    </li>
    <li class="breadcrumb-item active"><a href="">Planilla Ingreso/Egreso</a></li>
    <li class="breadcrumb-item active">Alta</li>
</ol>

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
                <select class="form-control" id="tipo_movimientos_id" name="tipo_movimientos_id">
                    @foreach ($tipomovimientos as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="mpplanillaingresoegreso">seleccionar un empleado</label>
                <select class="form-control" id="" name="empleados_id" name="empleados_id">
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
