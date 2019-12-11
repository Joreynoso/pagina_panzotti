@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
  </ol>
</nav>

<!-- tarjetas -->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3 ">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-users"></i>
        </div>
        <!-- existen usuarios? -->
        @if ($usuarios->count() == 0)

        <div class="mr-5">No hay clientes registrados!</div>

        @else

        <div class="mr-5">Clientes registrados: {{$usuarios->total()}}</div>

        @endif
      </div>
      <a class="card-footer text-white clearfix small z-1" href="{{route('user')}}">
        <span class="float-left">Ver Detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-user-plus"></i>
        </div>

        <!-- existen notas? -->
        @if ($notas->count() == 0)

        <div class="mr-5">No hay tareas pendientes!</div>

        @else

        <div class="mr-5">Tareas pendientes: {{$notas->total()}}</div>

        @endif

      </div>
      <a class="card-footer text-white clearfix small z-1" href="{{route('notas')}}">
        <span class="float-left">Ver detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-shopping-cart"></i>
        </div>

        <!-- existen pedidos? -->
        @if ($pedidos->count() == 0)

        <div class="mr-5">No hay nuevos pedidos!</div>

        @else

        <div class="mr-5">Pedidos nuevos: {{$pedidos->total()}}</div>

        @endif
      </div>
      <a class="card-footer text-white clearfix small z-1" href="{{route('productoventa')}}">
        <span class="float-left">Ver detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>

        <!-- existen comentarios? -->
        @if ($comentarios->count() == 0)

        <div class="mr-5">No hay nuevos comentarios!</div>

        @else

        <div class="mr-5">Cantidad comentarios: {{$comentarios->total()}}</div>

        @endif
      </div>
      <a class="card-footer text-white clearfix small z-1" href="{{route('comentario')}}">
        <span class="float-left">Ver detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>

<!-- mensaje de bienvenida -->
<div class="jumbotron jumbotron-fluid bg-white overflow card">
  <div class="container">
    <h1 class="display-3 text-responsive">Administracion Panzotti!</h1>
    <p class="lead">Desde este panel podras administrar todas las secciones de la pagina!.</p>
    <hr class="my-4">
    <p>si tenes alguna duda sobre el funcionamiento de este panel de administracion no dudes en escribirnos.</p>
    <a href="">joreynoso@institutosanmartin.edu.ar</a>
    <br>
    <a href="">jalbornos@institutosanmartin.edu.ar</a>
  </div>
</div>



<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-shopping-cart"></i>
        </div>

        <!-- existen pedidos? -->
        @if ($pedidos->count() == 0)

        <div class="mr-5">No hay nuevos pedidos!</div>

        @else

        <div class="mr-5">Pedidos nuevos: {{$pedidos->total()}}</div>

        @endif
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">Ver detalles</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>

  <div class="col-xl-9 col-sm-6 mb-3">
    <div class="card text-white bg-info o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-receipt"></i>
        </div>

        <div class="mr-5 mb-1">Pedido express!</div>

        <form action="" class="form-group">
          <input type="text" name="" id="" placeholder="ingrese nombre cliente..">
          <input type="text" name="" id="" placeholder="ingrese nombre cliente..">
          <input type="text" name="" id="" placeholder="ingrese nombre cliente..">
          <input type="text" name="" id="" placeholder="ingrese nombre cliente..">
        </form>

      </div>
      <a class="card-footer text-white clearfix small z-1 text-center" href="#">
        Confirmar pedido
      </a>
    </div>
  </div>

</div>

<!-- mensaje de bienvenida empleado -->
<div class="jumbotron jumbotron-fluid bg-white overflow card">
  <div class="container">
    <h1 class="display-3 text-responsive">Bienvenido Empleado de Panzotti!!</h1>
    <p class="lead">Desde este panel podras administrar todas tus tareas!.</p>
    <hr class="my-4">
    <p>si tenes alguna duda sobre el funcionamiento de este panel de administracion no dudes en escribirnos.</p>
    <a href="">joreynoso@institutosanmartin.edu.ar</a>
    <br>
    <a href="">jalbornos@institutosanmartin.edu.ar</a>
  </div>
</div>

@endsection
