@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active"><a href="">Recetas</a></li>
  <li class="breadcrumb-item active">Alta</li>
</ol>

<h3 class="breadcrumb">Recetas | Alta</h3>

<!-- formulario -->
<div class="card shadow-lg">
  <div class="card-header clearfix">
    <div class="card-title">Formulario RECETAS</div>
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
