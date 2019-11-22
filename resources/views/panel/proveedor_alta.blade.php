@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Proveedores</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
  </ol>
</nav>


<h1>Proveedor| <small> alta </small></h1>

<!-- formulario -->
<form action="{{ route('altaProveedor') }}" method="POST">
  @csrf

  @error('nombre')
  <div class="alert alert-danger" role="alert">
    el nombre es obligatorio.
  </div>
  @enderror
  
  @error('direccion')
  <div class="alert alert-danger" role="alert">
    el nombre es obligatorio.
  </div>
  @enderror

  @error('tel')
  <div class="alert alert-danger" role="alert">
    el telefono es obligatorio.
  </div>
  @enderror
  
  @error('cuit')
  <div class="alert alert-danger" role="alert">
    el cuit es obligatorio.
  </div>
  @enderror
  
  @error('mail')
  <div class="alert alert-danger" role="alert">
    el email es obligatorio.
  </div>
  @enderror

  <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2">
  <input type="text" name="direccion" placeholder="direccion" class="form-control mb-2">
  <input type="text" name="tel" placeholder="telefono" class="form-control mb-2">
  <input type="text" name="cuit" placeholder="cuit/cuil" class="form-control mb-2">
  <input type="text" name="mail" placeholder="email" class="form-control mb-2">

  <button type="submit" class="btn btn-success">agregar proveedor</button>
  
</form>

@endsection