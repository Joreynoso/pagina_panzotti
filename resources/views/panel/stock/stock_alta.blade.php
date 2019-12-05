@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-uppercase">Stock</a></li>
      <li aria-current="page" class="breadcrumb-item active text-uppercase">Alta</li>
    </ol>
  </nav>


<!-- formulario -->
<div class="card shadow rounded">
    <div class="card-header clearfix">
        <div class="card-title">Formulario Stock</div>
    </div>
    <div class="card-body">
        <form class="form-group" action="{{route('altaStock')}}" method="POST">
            @csrf

            @error('cantidad')
            <div class="alert alert-danger" role="alert">
                la cantidad es obligatoria.
            </div>
            @enderror

            @error('fehca')
            <div class="alert alert-danger" role="alert">
                la fecha es obligatoria.
            </div>
            @enderror

            <label for="cantidad">Cantidad</label>
            <input type="text" name="cantidad" placeholder="ingrese cantidad.." class="form-control mb-2">

            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" placeholder="ingrese fecha.." class="form-control mb-2">


            <div class="form-group">
                <label for="stock">seleccionar la metria prima</label>
                <select class="form-control" id="materiaprimareceta_id" name="materiaprimareceta_id">
                    @foreach ($materiaprimarecetas as $materiaprimareceta)
                    <option value="{{$materiaprimareceta->id}}"> {{$materiaprimareceta->unidadmedida}} </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="stock">seleccionar un cliente</label>
                <select class="form-control" id="materiaprimaplanilla_id" name="materiaprimaplanilla_id">
                    @foreach ($materiaprimaplanillas as $materiaprimaplanilla)
                    <option value="{{$materiaprimaplanilla->id}}">{{$materiaprimaplanilla->cantidad}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">agregar producto venta</button>
        </form>
    </div>
</div>

@endsection
