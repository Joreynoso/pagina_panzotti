@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active">Clientes</li>
</ol>

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
<a href="{{route('cliente_alta')}}" class="btn btn-info mb-2" href="#" role="button">
  <i class="fa fa-plus mr-2 fa-xs"></i>nuevo cliente
</a>

<!-- buscador -->
<div class="input-group mb-2 border rounded-pill p-1">
  <div class="input-group-prepend border-0">
    <button id="button-addon4" type="button" class="btn btn-link text-info"><i class="fa fa-search"></i></button>
  </div>
  <input type="search" placeholder="Que estas buscando?" aria-describedby="button-addon4"
    class="form-control bg-none border-0">
</div>
</form>


<!-- existen clientes? -->
@if ($clientes->count() == 0)

<div class="alert alert-info">
  no existe ningun cliente, agrega uno.
</div>

@else
<!-- tabla -->
<div class="card bg-white rounded shadow">
  <div class="card-body">
    <h5 class="card-title gris">Clientes | administrar</h5>
    <p class="cantidad">Cantidad de Clientes: {{$clientes->total()}}</p>
    <div class="table-responsive table-striped">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#id</th>
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
            <td class="td-btn">
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

@endif
@endsection