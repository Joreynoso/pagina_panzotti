@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li class="breadcrumb-item"><a href="{{ route('foto')}}" class="text-uppercase">Foto</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Editar</li>
    </ol>
</nav>

<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Foto</div>
    </div>
    <div class="card-body">
        <form action="{{ route('updateFoto', $foto->id) }}" method="POST">
            @method('PUT')
            @csrf

            @error('ruta')
            <div class="alert alert-danger" role="alert">
                la foto es obligatoria.
            </div>
            @enderror

            <div class="custom-file">
                <label class="custom-file-label" for="descripcion">seleccione una imagen...</label>
                <input type="file" class="custom-file-input" name="ruta">
            </div>

            <div style="padding-top: 5px" class="form-group">
                <label for="foto">seleccionar un producto</label>
                <select class="form-control" id="producto_id" name="producto_id">
                    @foreach ($productos as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}} </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning text-white">guardar cambios</button>

        </form>
    </div>
</div>

@endsection
