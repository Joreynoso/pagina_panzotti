@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Panel</a>
    </li>
    <li class="breadcrumb-item active"><a href="">Clientes</a></li>
    <li class="breadcrumb-item active">editar</li>
</ol>

<h1>clientes| <small> editar </small></h1>

<!-- formulario -->
<form action="{{ route('updateCliente', $cliente->id) }}" method="POST">
    @method('PUT')
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

    <input value="{{ $cliente->nombre }}" type="text" name="nombre" placeholder="nombre" class="form-control mb-2">
    <input value="{{ $cliente->apellido }}" type="text" name="apellido" placeholder="apellido"
        class="form-control mb-2">
    <input value="{{ $cliente->domicilio }}" type="text" name="domicilio" placeholder="domicilio"
        class="form-control mb-2">
    <input value="{{ $cliente->tel }}" type="text" name="tel" placeholder="tel" class="form-control mb-2">

    <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
</form>

@endsection
