@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Receta</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
  </ol>
</nav>

<!-- formulario -->
<div class="card shadow-lg">
  <div class="card-header clearfix">
    <div class="card-title">Formulario Receta</div>
  </div>
  <div class="card-body">
    <form class="form-group" action="{{ route('altaReceta') }}" method="POST">
      @csrf

      @error('nombre')
      <div class="alert alert-danger" role="alert">
        el nombre es obligatorio.
      </div>
      @enderror

      @error('descripcion')
      <div class="alert alert-danger" role="alert">
        la descripcion es obligatoria.
      </div>
      @enderror

      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" placeholder="ingrese nombre.." class="form-control mb-2">

      <label for="descripcion">Descripcion</label>
      <input type="text" name="descripcion" placeholder="ingrese descripcion.." class="form-control mb-2">

      <button type="submit" class="btn btn-success mt-3">agregar receta</button>
    </form>
  </div>
</div>

@endsection
