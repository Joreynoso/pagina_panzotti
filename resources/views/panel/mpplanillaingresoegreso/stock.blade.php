@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Stock</li>
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
<div class="row">
  <div class="col-xl-12 col-sm-12 mb-3">
    <div class="search-box">
      <i class="fa fa-search"></i>
      <input type="text" class="form-control" placeholder="Buscar..">
    </div>
  </div>
</div>

<!-- existen elementos? -->
{{-- @if  ($planillas->count() == 0) --}}
<div class="alert alert-info">
  no existen materias primas en el stock aun.
</div>

{{-- @else --}}
<div class="card mb-3 shadow">
  <div class="card-header fondo-tabla text-white">
    <h6 class="text-uppercase mb-0">materia prima ingreso egreso | administrar</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#codigo producto</th>
            <th scope="col">materia prima</th>
            <th scope="col">stock</th>
            <th scope="col">fecha ultima modificacion</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($stock as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->stock}}</td>
            <td>{{$item->fecha}}</td>
          @endforeach
        </tbody>
      </table>

      {{-- {{ $planillas->links() }} --}}
    </div>
  </div>
</div>

<!-- exportar a pdf -->
<div class="container-btn">
  <a href="" class="btn btn-success mb-3 float-right" href="#" role="button">
    <i class="fa fa-file-alt mr-2 fa-xs"></i>exportar a pdf
  </a>
</div>

{{-- @endif --}}
@endsection
