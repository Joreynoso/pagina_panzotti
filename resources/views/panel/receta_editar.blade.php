@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Panel</a>
    </li>
    <li class="breadcrumb-item active"><a href="">Receta</a></li>
    <li class="breadcrumb-item active">editar</li>
</ol>

<h1>Receta| <small> editar </small></h1>

<!-- formulario -->
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



    <input value="{{ $receta->nombre }}" type="text" name="nombre" placeholder="nombre" class="form-control mb-2">
    <input value="{{ $receta->descripcion }}" type="text" name="descripcion" placeholder="descripcion" class="form-control mb-2">

    <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
</form>

@endsection
