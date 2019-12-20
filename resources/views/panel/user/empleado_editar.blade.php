@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="{{ route('empleado')}}" class="text-uppercase">Empleado</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Empleado</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateEmpleado', $empleado->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('name')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            @error('email')
            <div class="alert alert-danger" role="alert">
                el correo es obligatorio.
            </div>
            @enderror

            @error('apellido')
            <div class="alert alert-danger" role="alert">
                el apellido es obligatorio.
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

            <label for="">nombre</label>
            <input value="{{ $empleado->name }}" type="text" name="name" placeholder="name" class="form-control mb-2">

            <label for="">email</label>
            <input value="{{ $empleado->email }}" type="text" name="email" placeholder="email"
                class="form-control mb-2">

            <label for="">apellido</label>
            <input value="{{ $empleado->apellido }}" type="text" name="apellido" placeholder="apellido"
                class="form-control mb-2">

            <label for="">domicilio</label>
            <input value="{{ $empleado->domicilio }}" type="text" name="domicilio" placeholder="domicilio"
                class="form-control mb-2">

            <label for="">telefono</label>
            <input value="{{ $empleado->tel }}" type="text" name="tel" placeholder="tel" class="form-control mb-2">


            <button type="submit" class="btn btn-warning text-white mt-3">guardar cambios</button>
        </form>
    </div>
</div>

@endsection