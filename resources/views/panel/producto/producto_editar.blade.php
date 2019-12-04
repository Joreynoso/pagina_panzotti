@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Producto</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Producto</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateProducto', $producto->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('nombre')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            @error('descripcion')
            <div class="alert alert-danger" role="alert">
                la descripcion es obligatoria.
            </div>
            @enderror

            <input value="{{ $producto->nombre }}" type="text" name="nombre" placeholder="nombre"
                class="form-control mb-2">

            <input value="{{ $producto->descripcion }}" type="text" name="descripcion" placeholder="descripcion"
                class="form-control mb-2">

            <div class="form-group">
                <label for="producto">seleccionar la receta</label>
                <select class="form-control" id="receta_id" name="receta_id">
                    @foreach ($recetas as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
        </form>
    </div>
</div>

@endsection