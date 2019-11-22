@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active">Planilla Ingreso/Egreso</li>
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
<div class="container-btn">
  <a href="{{route('mpplanillaingresoegresos_alta')}}" class="btn btn-info mb-2" href="#" role="button">
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
          <a href="{{route('editarmpplanillaingresoegresos', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>

          <form action="{{route('bajampplanillaingresoegresos',$item)}}" class="d-inline"method="POST">
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
<!-- descargar pdf -->
<div class="container-btn">
  <a href="" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>descargar pdf
  </a>
</div>

@endif
@endsection
