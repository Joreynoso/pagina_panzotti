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
<div class="card shadow rounded mb-4">
    <div class="card-header clearfix">{{ __('formulario empleado panzotti') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name"" class=" ml-3">{{ __('nombre') }}</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control mb-2 @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="apellido" class="ml-3">{{ __('apellido') }}</label>

                <div class="col-md-12">
                    <input id="apellido" type="text" class="form-control mb-2 @error('apellido') is-invalid @enderror"
                        name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                    @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="domicilio" class="ml-3">{{ __('domicilio') }}</label>

                <div class="col-md-12">
                    <input id="domicilio" type="text" class="form-control mb-2 @error('domicilio') is-invalid @enderror"
                        name="domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>

                    @error('domicilio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="tel" class="ml-3">{{ __('tel') }}</label>

                <div class="col-md-12">
                    <input id="tel" type="text" class="form-control mb-2 @error('tel') is-invalid @enderror" name="tel"
                        value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                    @error('tel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="ml-3">{{ __('email') }}</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control mb-2 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="ml-3">{{ __('contraseña') }}</label>

                <div class="col-md-12">
                    <input id="password" type="password"
                        class="form-control mb-2 @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="ml-3">{{ __('repetir Contraseña') }}</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-warning text-white mt-3 ml-3">
                        {{ __('agregar empleado') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection