@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active">Clientes</li>
</ol>

<h1>clientes| <small> administar </small></h1>

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
<a href="{{route('cliente_alta')}}" class="btn btn-info mb-2" href="#" role="button">nuevo cliente</a>

<!-- buscador -->
<form class="search-form mb-2">
  <div class="input-group">
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input
      type="text" placeholder="buscar.." class="form-control" />
    <div class="input-group-append"><button class="btn-buscar btn btn-outline-secondary" type="button">Buscar</button>
    </div>
  </div>
</form>


<!-- existen clientes? -->
@if ($clientes->count() == 0)
<div class="alert alert-info">
  no existe ningun cliente, agrega uno.
</div>

@else
<!-- tabla -->
<p class="cantidad">Cantidad de Clientes: {{$clientes->total()}}</p>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#id</th>
        <th scope="col">nombre</th>
        <th scope="col">apellido</th>
        <th scope="col">domicilio</th>
        <th scope="col">tel</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clientes as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nombre}}</td>
        <td>{{$item->apellido}}</td>
        <td>{{$item->domicilio}}</td>
        <td>{{$item->tel}}</td>
        <td class="td-btn">
          <a href="{{route('editar', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>

          <form class="d-inline-block" action="">
            <button title="borarr" class="btn btn-link"><i class="fa fa-trash red"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $clientes->links() }}
</div>

@endif

@endsection