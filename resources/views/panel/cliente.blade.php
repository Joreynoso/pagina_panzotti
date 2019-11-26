@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Clientes</li>
  </ol>
</nav>

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
<div class="container-btn">
  <a href="{{route('cliente_alta')}}" class="btn btn-info mb-2" href="#" role="button">
    <i class="fa fa-plus mr-2 fa-xs"></i>nuevo
  </a>
</div>

<!-- buscador -->
<form class="form-inline mb-3">

    <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>nombre</option>
      <option>apellido</option>
      <option>tel</option>
      <option>domicilio</option>
    </select>

    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar.." aria-label="Search">

    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
  </form>

<!-- existen clientes? -->
@if ($clientes->count() == 0)

<div class="alert alert-info">
  no existe ningun cliente, agrega uno.
</div>

@else
<!-- tabla -->
<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">clientes | administrar</h6>
  </div>
  <div class="card-body">
    <p class="card-text">Cantidad de Clientes: {{$clientes->total()}}</p>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Tel</th>
            <th scope="col">Acciones</th>
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
            <td>
              <a href="{{route('editarCliente', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>
              <form action="{{route('bajaCliente',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $clientes->links() }}
    </div>
  </div>
</div>

<!-- exportar a pdf -->
<div class="container-btn">
  <a href="{{route('clientespdf')}}" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>exportar a pdf
  </a>
</div>

@endif
@endsection
