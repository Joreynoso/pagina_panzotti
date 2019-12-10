@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="{{ route('materiaprimareceta')}}" class="text-uppercase">Materia Prima Receta</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Materia Prima Receta</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateMateriaprimaReceta', $materiaprimareceta->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('unidadmedida')
            <div class="alert alert-danger" role="alert">
                la unidad de medida es obligatoria.
            </div>
            @enderror


            <label for="unidadmedida">Unidad de Medida</label>
            <input value="{{ $materiaprimareceta->unidadmedida }}" type="text" name="unidadmedida" placeholder="ingrese unaunidad de medida.." class="form-control mb-2">



            <div class="form-group">
                <label for="materiaprimareceta">seleccionar una materia prima</label>
                <select class="form-control" id="materiaprima_id" name="materiaprima_id">
                    @foreach ($materiaprimas as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="materiaprimareceta">seleccionar una receta</label>
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
