@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Panel</a>
    </li>
    <li class="breadcrumb-item active"><a href="">Materia Prima</a></li>
    <li class="breadcrumb-item active">Alta</li>
</ol>

<h1>Materia Prima| <small> alta </small></h1>

<!-- formulario -->
<div class="card">
    <div class="card-body">
        <form class="form-group" action="{{route('altaMateriaPrima')}}" method="POST">
            @csrf

            @error('nombre')
            <div class="alert alert-danger" role="alert">
                el nombre es obligatorio.
            </div>
            @enderror

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="ingrese nombre.." class="form-control mb-2">

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

            <button type="submit" class="btn btn-success mt-3">agregar materia prima</button>
        </form>
    </div>
</div>

@endsection