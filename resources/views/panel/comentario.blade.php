@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Comentarios</li>
  </ol>
</nav>

<!-- nuevo -->
<div class="container-btn">
  <a href="" class="btn btn-info mb-2" href="#" role="button">
    <i class="fa fa-plus mr-2 fa-xs"></i>nuevo
  </a>
</div>

<!-- buscador -->
<div class="row">
  <div class="col-xl-12 col-sm-12 mb-3">
    <div class="search-box">
      <i class="fa fa-search"></i>
      <input type="text" class="form-control" placeholder="Buscar..">
    </div>
  </div>
</div>

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

<!-- exportar a pdf -->
<div class="container-btn">
  <a href="" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>exportar a pdf
  </a>
</div>

@endif
    
@endsection