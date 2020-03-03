@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
      <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
      <li class="breadcrumb-item"><a href="{{ route('materiaprima')}}" class="text-uppercase">Materia Prima</a></li>
      <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
  </nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Materia Prima</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{route('altaMateriaPrima')}}" method="POST">
            @csrf

            @error('nombre')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="ingrese nombre.." class="form-control mb-2">

            <div class="form-group">
                <label for="materiaprima">seleccionar unidad de medida</label>
                <select class="form-control" id="tipomateriaprima_id" name="tipomateriaprima_id">
                    @foreach ($tipomateriaprimas as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">agregar materia prima</button>
        </form>
    </div>
</div>

@endsection
