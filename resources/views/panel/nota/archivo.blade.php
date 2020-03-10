@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">misnotas</li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">archivo</li>
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

<!-- existen elementos? -->
@if ($notas->count() == 0)
<div class="alert alert-info">
  no existe ninguna tarea archivada.
</div>

@else
<!-- tabla -->
<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">Archivo | Notas</h6>
  </div>
  <div class="card-body">
    <p class="card-text">Cantidad de Notas Archivadas: {{$notas->total()}}</p>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">descripcion</th>
            <th scope="col">urgencia</th>
            <th scope="col">acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notas as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->urgencia}}</td>

            <td class="td-btn">
              <form action="{{route('bajaNota',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-link" type="submit"><i class="fa fa-trash red mb-2"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      {{ $notas->links() }}
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
