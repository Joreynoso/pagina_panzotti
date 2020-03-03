@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Stock</li>
  </ol>
</nav>

<!-- buscador -->
<div class="row">
  <div class="col-xl-12 col-sm-12 mb-3">
    <div class="search-box">
      <i class="fa fa-search"></i>
      <input type="text" class="form-control" placeholder="Buscar..">
    </div>
  </div>
</div>

<!-- mensaje -->
@if (Session::has('mensaje'))
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  {{Session::get('mensaje')}}
</div>
@endif

<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">Control | Stock</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#codigo producto</th>
            <th scope="col">materia prima</th>
            <th scope="col">stock</th>
            <th scope="col">Acciones</th>
            <th scope="col">fecha ultima modificacion</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($stock as $item)

          @if ($item->stock == 0) <tr style="background: #ffccbc">
            <td>{{$item->id}}</td>
            <td><b>{{$item->nombre}}</b></td>
            <td><b style="color: #5f4339">{{$item->stock}} </b><b><span class="badge badge-danger"><b>sin stock</b></span>
            </td>
            <td>
              <a href="{{route('mpplanillaingresoegresos_alta')}}" class="btn btn-light btn-sm">reponer</a>
              <a href="" class="btn btn-light btn-sm" title="agregar nota" data-toggle="modal"
                data-target="#exampleModal">
                <i class="fas fa-sticky-note" style="color: #ffd54f"></i>
              </a>
            </td>
            <td>{{$item->updated_at}}</td>

            @else
            @if ($item->stock <= 5)
            <tr style="background: #ffe0b2">
              <td>{{$item->id}}</td>
              <td><b>{{$item->nombre}}</b></td>
              <td><b style="color: #5f4339">{{$item->stock}} </b><b><span class="badge badge-danger"><b>bajo</b></span>
              </td>
              <td>
                <a href="{{route('mpplanillaingresoegresos_alta')}}" class="btn btn-light btn-sm">reponer</a>
                <a href="" class="btn btn-light btn-sm" title="agregar nota" data-toggle="modal"
                  data-target="#exampleModal">
                  <i class="fas fa-sticky-note" style="color: #ffd54f"></i>
                </a>
              </td>
              <td>{{$item->updated_at}}</td>

              @else
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->nombre}}</td>
              <td>{{$item->stock}}</td>
              <td>
                <a href="{{route('mpplanillaingresoegresos_alta')}}" class="btn btn-light btn-sm">reponer</a>
                <a href="" class="btn btn-light btn-sm" title="agregar nota" data-toggle="modal"
                  data-target="#exampleModal">
                  <i class="fas fa-sticky-note" style="color: #ffd54f"></i>
                </a>
              </td>
              <td>{{$item->updated_at}}</td>

              @endif
              @endif

              @endforeach
        </tbody>
      </table>

      {{-- {{ $planillas->links() }} --}}
    </div>
  </div>
</div>

<!-- exportar a pdf -->
<div class="container-btn">
  <a href="{{route('imprimir')}}" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>exportar a pdf
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card-body">
          <form class="form-group" action="{{route('notastock')}}" method="POST">
            @csrf

            @error('descripcion')
            <div class="alert alert-danger" role="alert">
              el apellido es obligatorio.
            </div>
            @enderror

            <label for="descripcion">descripcion</label>
            <input maxlength="150" type="text" name="descripcion" placeholder="describa su tarea.."
              class="form-control mb-3">

            <div class="form-group">
              <label for="exampleFormControlSelect1">Que tan urgente es su tarea ?</label>
              <select class="form-control" id="urgencia" name="urgencia">
                <option>alta</option>
                <option>baja</option>
              </select>
            </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success mt-2">agregar tarea</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection