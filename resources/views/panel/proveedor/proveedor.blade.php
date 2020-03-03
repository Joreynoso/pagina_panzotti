@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Proveedores</li>
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
  <a href="{{route('proveedor_alta')}}" class="btn btn-info mb-2" href="#" role="button">
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

<!-- existen elementos? -->
@if ($proveedores->count() == 0)
<div class="alert alert-info">
  no existe ningun proveedor, agrega uno.
</div>

@else
<!-- tabla -->
<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">proveedores | administrar</h6>
  </div>
  <div class="card-body">
    <p class="card-text">Cantidad de Proveedores: {{$proveedores->total()}}</p>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">direccion</th>
            <th scope="col">tel</th>
            <th scope="col">cuit</th>
            <th scope="col">rubro</th>
            <th scope="col">descripcion (rubro)</th>
            <th scope="col">mail</th>
            <th scope="col">acciones</th>
            <th scope="col">estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($proveedores as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->direccion}}</td>
            <td>{{$item->tel}}</td>
            <td>{{$item->cuit}}</td>
            <td>{{$item->rubro}}</td>
            <td>{{$item->rubro_descripcion}}</td>
            <td>{{$item->mail}}</td>
            <td class="td-btn">
              <a href="{{route('proveedor_editar', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>

              <form action="{{route('bajaProveedor',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
              </form>
            </td>
            <td>    <label class="label">
              <div class="toggle">
                <input class="toggle-state" type="checkbox" name="check" value="check" />
                <div class="toggle-inner">
                   <div class="indicator"></div>
                </div>
                <div class="active-bg"></div>
              </div>
              <div class="label-text">finalizado</div>
            </label></td>
          </tr>
          @endforeach
        </tbody>
      </table>

      {{ $proveedores->links() }}
    </div>
  </div>
</div>

<!-- exportar a pdf -->
<div class="container-btn">
  <a href="" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>exportar a pdf
  </a>
</div>

@endif
@endsection
