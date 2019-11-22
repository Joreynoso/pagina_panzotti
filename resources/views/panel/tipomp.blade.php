@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Clientes</li>
  </ol>
</nav>

<h1>Tipo Materia Prima| <small> administar </small></h1>

<!-- mensaje -->
@if (Session::has('mensaje'))
<div class="alert alert-success" role="alert">
  {{Session::get('mensaje')}}
</div>
@elseif (Session::has('error'))
<div class="alert alert-warning" role="alert">
  {{Session::get('error')}}
</div>
@endif

<!-- nuevo -->
<a href="{{route('tipomp_alta')}}" class="btn btn-info mb-2" href="#" role="button">
  <i class="fa fa-plus mr-2 fa-xs"></i>nuevo tipo materia prima
</a>

<!-- buscador -->
<form class="search-form mb-2">
  <div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input
      type="text" placeholder="buscar.." class="form-control" />
    <div class="input-group-append"><button class="btn-buscar btn btn-outline-secondary" type="button">Buscar</button>
    </div>
  </div>
</form>

<!-- existen elementos? -->
@if ($tipomateriaprimas->count() == 0)
<div class="alert alert-info">
  no existe ningun tipo de materia prima, agrega uno.
</div>

@else
<!-- tabla -->
<p class="cantidad">Cantidad de Tipo Materia Prima: {{$tipomateriaprimas->total()}}</p>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#id</th>
        <th scope="col">nombre</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tipomateriaprimas as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nombre}}</td>
        <td class="td-btn">
          <a href="{{route('editarTipomp', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>

          <form action="{{route('bajaTipomp',$item)}}" class="d-inline" method="POST">
            @method('DELETE')
            @csrf
            <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $tipomateriaprimas->links() }}
</div>

<!-- descargar pdf -->
<div class="container-btn">
  <a href="" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>descargar pdf
  </a>
</div>

@endif
@endsection