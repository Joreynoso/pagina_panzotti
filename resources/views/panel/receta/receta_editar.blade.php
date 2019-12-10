@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="{{ route('receta')}}" class="text-uppercase">Recetas</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>

<h1>Receta| <small> editar </small></h1>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Receta</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateReceta', $receta->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('nombre')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            @error('descricpcion')
            <div class="alert alert-danger" role="alert">
                la descripcion es obligatorio.
            </div>
            @enderror



            <input value="{{ $receta->nombre }}" type="text" name="nombre" placeholder="nombre"
                class="form-control mb-2">
            <input value="{{ $receta->descripcion }}" type="text" name="descripcion" placeholder="descripcion"
                class="form-control mb-2">

            <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
        </form>
    </div>
</div>

@endsection
