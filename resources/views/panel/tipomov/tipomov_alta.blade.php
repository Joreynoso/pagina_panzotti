@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tipomov')}}" class="text-uppercase">Tipo Movimiento</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
  </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
  <div class="card-header clearfix">
    <div class="card-title">Formulario Tipo Movimiento</div>
  </div>
  <div class="card-body">
    <form action="{{ route('altaTipomov') }}" method="POST">
      @csrf

      @error('nombre')
      <div class="alert alert-danger" role="alert">
        el nombre es obligatorio.
      </div>
      @enderror

      <label for="apellido">Nombre</label>
      <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2">

      <button type="submit" class="btn btn-success mt-3">agregar tipo movimiento</button>
    </form>
  </div>
</div>

@endsection
