@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Clientes</li>
    </ol>
</nav>

<h1>Tipo Movimiento| <small> editar </small></h1>

<!-- formulario -->
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

    <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
</form>

@endsection