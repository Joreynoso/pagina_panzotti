@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="{{ route('empleado')}}" class="text-uppercase">Empleado</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
</nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Empleado</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{ route('altaEmpleado') }}" method="POST">
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

            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="nombre.." class="form-control mb-2">

            <label for="email">Correo</label>
            <input type="text" name="email" placeholder="email.." class="form-control mb-2">

            <label for="telefono">Apellido</label>
            <input type="text" name="apellido" placeholder="apellido.." class="form-control mb-2">

            <label for="domicilio">Domicilio</label>
            <input type="text" name="domicilio" placeholder="domicilio.." class="form-control mb-2">

            <label for="tel">Telefono</label>
            <input type="text" name="tel" placeholder="tel" class="form-control mb-2">

            <div class="form-group row">
                <label for="password" class="ml-3">{{ __('contraseña') }}</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm"
                    class="ml-3">{{ __('repetir Contraseña') }}</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <button type="submit" class="btn btn-warning text-white mt-3">agregar empleado</button>
        </form>
    </div>
</div>

@endsection
