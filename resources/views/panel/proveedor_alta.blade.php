@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active"><a href="">Proveedor</a></li>
  <li class="breadcrumb-item active">Alta</li>
</ol>

<h1>Proveedor| <small> alta </small></h1>

<!-- formulario -->
<form action="{{ route('alta') }}" method="POST">
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

  <button type="submit" class="btn btn-success">agregar tipo movimiento</button>
</form>

@endsection