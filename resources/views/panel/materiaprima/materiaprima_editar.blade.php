@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="{{ route('materiaprima')}}" class="text-uppercase">Materia Prima</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Materia Prima</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateMateriaPrima', $materiaprima->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('nombre')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            <input value="{{ $materiaprima->nombre }}" type="text" name="nombre" placeholder="nombre"
                class="form-control mb-2">

            <div class="form-group">
                <label for="materiaprima">seleccionar unidad de medida</label>
                <select class="form-control" id="tipomateriaprima_id" name="tipomateriaprima_id">
                    @foreach ($tipomateriaprimas as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="materiaprima">seleccionar un proveedor</label>
                <select class="form-control" id="" name="proveedor_id">
                    @foreach ($proveedores as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning text-white">guardar cambios</button>
        </form>
    </div>
</div>

@endsection
