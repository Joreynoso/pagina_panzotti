@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Panel</a>
  </li>
  <li class="breadcrumb-item active">Recetas</li>
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
<a href="{{route('receta_alta')}}" class="btn btn-info mb-2" href="#" role="button">
  <i class="fa fa-plus mr-2 fa-xs"></i>nueva receta
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


<!-- existen receta? -->
@if ($recetas->count() == 0)

<div class="alert alert-info">
  no existe ninguna receta, agrega uno.
</div>

@else
<!-- tabla -->
<div class="card bg-white rounded shadow">
  <div class="card-body">
    <h5 class="card-title gris">Recetas | administrar</h5>
    <p class="cantidad">Cantidad de Recetas: {{$recetas->total()}}</p>
    <div class="table-responsive table-striped">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($recetas as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->descripcion}}</td>
            <td class="td-btn">
              <a href="{{route('editarReceta', $item)}}" title="editar"><i class="fa fa-pen yellow"></i></a>
              <form action="{{route('bajaReceta',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $recetas->links() }}
    </div>
  </div>
</div>

<!-- descargar pdf -->
<div class="container-btn">
  <a href="" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>descargar pdf
  </a>
</div>

@endif
@endsection
