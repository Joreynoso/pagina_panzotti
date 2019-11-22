@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Panel</a>
    </li>
    <li class="breadcrumb-item active"><a href="">Planilla Ingreso/Egreso</a></li>
    <li class="breadcrumb-item active">editar</li>
</ol>

<h1>Planilla Ingreso/Egreso| <small> editar </small></h1>

<!-- formulario -->
<form action="{{ route('updatempplanillaingresoegresos', $mpplanillaingresoegresos->id) }}" method="POST">
    @method('PUT')
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
            <input value="{{ $mpplanillaingresoegresos->fecha }}" type="text" name="fecha" placeholder="ingrese la fecha.." class="form-control mb-2">

            <label value="{{ $mpplanillaingresoegresos->observacion }}" for="observacion">Observacion</label>
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


    <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
</form>

@endsection
