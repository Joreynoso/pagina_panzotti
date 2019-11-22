@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Tipo Movimiento</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
  </ol>
</nav>

<h1>Tipo Movimiento| <small> alta </small></h1>

<!-- formulario -->
<form action="{{ route('altaTipomov') }}" method="POST">
  @csrf

  @error('nombre')
  <div class="alert alert-danger" role="alert">
    el nombre es obligatorio.
  </div>
  @enderror

  <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2">

  <button type="submit" class="btn btn-success">agregar tipo movimiento</button>
</form>

@endsection