@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active"><a href="">Clientes</a></li>
  <li class="breadcrumb-item active">Alta</li>
</ol>

<h1>clientes| <small> alta </small></h1>

<!-- formulario -->
<form action="{{ route('altaCliente') }}" method="POST">
  @csrf

  @error('nombre')
  <div class="alert alert-danger" role="alert">
    el nombre es obligatorio.
  </div>
  @enderror

  @error('apellido')
  <div class="alert alert-danger" role="alert">
    el apellido es obligatorio.
  </div>
  @enderror

  @error('domicilio')
  <div class="alert alert-danger" role="alert">
    el domicilio es obligatorio.
  </div>
  @enderror

  @error('tel')
  <div class="alert alert-danger" role="alert">
    el telefono es obligatorio.
  </div>
  @enderror

  <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2">
  <input type="text" name="apellido" placeholder="apellido" class="form-control mb-2">
  <input type="text" name="domicilio" placeholder="domicilio" class="form-control mb-2">
  <input type="text" name="tel" placeholder="tel" class="form-control mb-2">

  <button type="submit" class="btn btn-success">agregar cliente</button>
</form>

@endsection