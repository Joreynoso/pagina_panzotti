@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-bullet">
    <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
    <li aria-current="page" class="breadcrumb-item active text-uppercase">Clientes</li>
  </ol>
</nav>

<!-- mensaje de bienvenida -->
<div class="jumbotron jumbotron-fluid panzotti-card overflow">
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

<!-- tarjetas -->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-users"></i>
        </div>
        <div class="mr-5">26 Nuevos Clientes!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
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
        <div class="mr-5">11 New Tasks!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">View Details</span>
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
        <div class="mr-5">15 Pedidos Nuevos!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">View Details</span>
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
        <div class="mr-5">13 Nuevos Comentarios!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>

@endsection