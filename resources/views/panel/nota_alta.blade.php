@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">MisNotas</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Notas</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{route('altaNota')}}" method="POST">
            @csrf

            @error('descripcion')
            <div class="alert alert-danger" role="alert">
                el apellido es obligatorio.
            </div>
            @enderror

            <label for="descripcion">descripcion</label>
            <input type="text" name="descripcion" placeholder="describa su tarea.." class="form-control mb-3">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Que tan urgente es su tarea ?</label>
                <select class="form-control" id="urgencia" name="urgencia">
                    <option>alta</option>
                    <option>baja</option>
                    <option>media</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-2">agregar tarea</button>
        </form>
    </div>
</div>

@endsection