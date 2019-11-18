@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active">Comentarios</li>
</ol>

<h1>comentarios| <small> administar </small></h1>


<!-- buscador -->
<form class="search-form">
    <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input type="text" placeholder="buscar.." class="form-control" />
        <div class="input-group-append"><button class="btn-buscar btn btn-outline-secondary" type="button">Buscar</button></div>
    </div>
</form>

<!-- existen comentarios? -->
@if ($comentarios->count() == 0)
<div class="alert alert-info">
  no existe ningun comentario aun.
</div>

@else
<!-- tabla -->
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#id</th>
        <th scope="col">descripcion</th>
        <th scope="col">fecha</th>
        <th scope="col">cliente</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comentarios as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->descripcion}}</td>
        <td>{{$item->fecha}}</td>
        <td>{{$item->cliente->nombre ?? 'error'}}</td>
        <td class="td-btn">
            <button title="detalle" class="btn btn-info" type="button"><i class="fa fa-eye"></i></button>
            <button title="editar"class="btn btn-warning" type="button"><i class="fa fa-edit icon-white "></i></button>
            <button title="eliminar"class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{ $comentarios->links() }}

@endif
    
@endsection