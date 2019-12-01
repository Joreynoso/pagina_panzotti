@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Proveedores</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Proveedor</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateProveedor', $proveedor->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('nombre')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            @error('direccion')
            <div class="alert alert-danger" role="alert">
                la direccion es obligatorio.
            </div>
            @enderror

            @error('tel')
            <div class="alert alert-danger" role="alert">
                el telefono es obligatorio.
            </div>
            @enderror

            @error('cuit')
            <div class="alert alert-danger" role="alert">
                el cuit/cuil es obligatorio.
            </div>
            @enderror

            @error('mail')
            <div class="alert alert-danger" role="alert">
                el email es obligatorio.
            </div>
            @enderror

            <label for="apellido">Nombre</label>
            <input value="{{ $proveedor->nombre }}" type="text" name="nombre" placeholder="nombre"
                class="form-control mb-2">

            <label for="direccion">direccion</label>
            <input value="{{ $proveedor->direccion }}" type="text" name="direccion" placeholder="direccion"
                class="form-control mb-2">

            <label for="telefono">telefono</label>
            <input value="{{ $proveedor->tel }}" type="text" name="tel" placeholder="tel" class="form-control mb-2">

            <label for="cuit">cuit</label>
            <input value="{{ $proveedor->cuit }}" type="text" name="cuit" placeholder="cuit" class="form-control mb-2">

            <label for="mail">mail</label>
            <input value="{{ $proveedor->mail }}" type="text" name="mail" placeholder="mail" class="form-control mb-2">

            <button type="submit" class="btn btn-warning text-white mt-3">guardar cambios</button>
        </form>
    </div>
</div>

@endsection