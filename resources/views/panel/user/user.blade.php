@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Usuarios</li>
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


<!-- buscador -->
<form class="form-inline mb-3">
  <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
    <option value="name">nombre</option>
    <option value="apellido">apellido</option>
    <option value="tel">telefono</option>
    <option value="email">email</option>
    <option value="domicilio">domicilio</option>
  </select>

  <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar.." aria-label="Search">

  <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
</form>

<!-- existen clientes? -->
@if ($usuarios->count() == 0)

<div class="alert alert-info">
  no existe ningun cliente aun.
</div>

@else
<!-- tabla -->
<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">Usuario | administrar</h6>
  </div>
  <div class="card-body">
    <p class="card-text">Cantidad de Usuarios: {{$usuarios->total()}}</p>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Domicilio</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->domicilio}}</td>
            <td>{{$item->tel}}</td>
            <td>{{$item->email}}</td>
            <td>
              <a href="{{route('editarUser', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>
              <form action="{{route('bajaUser',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $usuarios->links() }}
    </div>
  </div>
</div>

<!-- exportar a pdf -->
<div class="container-btn">
  <a href="{{route('userpdf')}}" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>exportar a pdf
  </a>
</div>

@endif
@endsection
