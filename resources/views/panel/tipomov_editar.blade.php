@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Tipo Movimiento</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Tipo Movimiento</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateTipomov', $tipomovimiento->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('nombre')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            <input value="{{ $tipomovimiento->nombre }}" type="text" name="nombre" placeholder="nombre"
                class="form-control mb-2">

            <button type="submit" class="btn btn-warning text-white mt-3">guardar cambios</button>
        </form>
    </div>
</div>

@endsection