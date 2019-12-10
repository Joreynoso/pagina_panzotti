@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Materia Prima Receta</li>
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
  <a href="{{route('materiaprimareceta_alta')}}" class="btn btn-info mb-2" href="#" role="button">
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
@if ($materiaprimarecetas->count() == 0)
<div class="alert alert-info">
  no existe ninguna materia prima receta, agrega uno.
</div>

@else
<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">materia prima receta| administrar</h6>
  </div>
  <div class="card-body">
    <p class="card-text">Cantidad de Materia Prima Receta: {{$materiaprimarecetas->total()}}</p>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Unidad de Medida</th>
            <th scope="col">Materia Prima</th>
            <th scope="col">Receta</th>
            <th scope="col">acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($materiaprimarecetas as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->unidadmedida}}</td>

               @foreach ($item->materiaprimas as $materiaprima)
                   <td>{{$materiaprima->nombre}}</td>
               @endforeach

               @foreach ($item->recetas as $receta)
                   <td>{{$receta->nombre}}</td>
               @endforeach

            <td class="td-btn">
              <a href="{{route('editarMateriaprimaReceta', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>

              <form action="{{route('bajaMateriaprimaReceta',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      {{ $materiaprimarecetas->links() }}
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
