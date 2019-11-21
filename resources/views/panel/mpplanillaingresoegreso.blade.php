@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active">Planilla Ingreso/Egreso</li>
</ol>

<h1>Planilla Ingreso/Egreso| <small> administar </small></h1>

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
<a href="{{route('mpplanillaingresoegresos_alta')}}" class="btn btn-info mb-2" href="#" role="button">
  <i class="fa fa-plus mr-2 fa-xs"></i>nuevo planilla ingreso/egreso
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
@if ($mpplanillaingresoegresos->count() == 0)
<div class="alert alert-info">
  no existe ninguna planilla ingreso/egreso, agrega uno.
</div>

@else
<!-- tabla -->
<p class="cantidad">Cantidad de PLanilla Ingres/Egreso: {{$mpplanillaingresoegresos->total()}}</p>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#id</th>
        <th scope="col">fecha</th>
        <th scope="col">observacion</th>
        <th scope="col">tipo movimiento</th>
        <th scope="col">empleado</th>
        <th scope="col">acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mpplanillaingresoegresos as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->fecha}}</td>
        <td>{{$item->observacion}}</td>
        <td>{{$item->tipomovimiento->nombre}}</td>
        <td>{{$item->empleado->nombre}}</td>
        <td class="td-btn">
          <a href="" title="editar"><i class="fa fa-pen yellow"></i></a>

          <form action="" class="d-inline"method="POST">
            @method('DELETE')
            @csrf
            <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $mpplanillaingresoegresos->links() }}
</div>

@endif
@endsection
