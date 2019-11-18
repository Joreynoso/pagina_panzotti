@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active"><a href="">Tipo Movimiento</a></li>
  <li class="breadcrumb-item active">Alta</li>
</ol>

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