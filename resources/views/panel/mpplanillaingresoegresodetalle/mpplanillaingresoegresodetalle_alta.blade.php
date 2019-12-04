@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Materia Prima Planilla</a></li>
      <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
  </nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Materia Prima Planilla</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{route('altaMpplanillaingresoegresodetalle')}}" method="POST">
            @csrf

            @error('cantidad')
            <div class="alert alert-danger" role="alert">
                la cantidad es obligatorio.
            </div>
            @enderror


            <label for="cantidad">Cantidad</label>
            <input type="text" name="cantidad" placeholder="ingrese cantidad.." class="form-control mb-2">


            <div class="form-group">
                <label for="materiaprimaplanilla">seleccionar una materia prima</label>
                <select class="form-control" id="materiaprima_id" name="materiaprima_id">
                    @foreach ($materiaprimas as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="materiaprimaplanilla">seleccionar una planilla</label>
                <select class="form-control" id="planilla_id" name="planilla_id">
                    @foreach ($planillas as $planilla)
                    <option value="{{$planilla->id}}">{{$planilla->observacion}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-success mt-3">agregar producto venta</button>
        </form>
    </div>
</div>

@endsection
