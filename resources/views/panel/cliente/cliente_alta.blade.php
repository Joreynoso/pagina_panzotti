@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li class="breadcrumb-item"><a href="{{ route('cliente')}}" class="text-uppercase">Cliente</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
  </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
  <div class="card-header clearfix">
    <div class="card-title">Formulario Clientes</div>
  </div>
  <div class="card-body">
    <form class="form-group" action="{{ route('altaCliente') }}" method="POST">
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

      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" placeholder="ingrese nombre.." class="form-control mb-2">

      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" placeholder="ingrese apellido.." class="form-control mb-2">

      <label for="domicilio">Domicilio</label>
      <input type="text" name="domicilio" placeholder="ingrese domicilio.." class="form-control mb-2">

      <label for="telefono">Telefono</label>
      <input type="text" name="tel" placeholder="ingrese telefono.." class="form-control mb-2">

      <button type="submit" class="btn btn-success mt-3">agregar cliente</button>
    </form>
  </div>
</div>

@endsection
