@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Clientes</li>
    </ol>
</nav>

<!-- nuevo -->
<a href="" class="btn btn-info mb-4" href="#" role="button">
    <i class="fa fa-plus mr-2 fa-xs"></i>nuevo
</a>


<!-- notas -->
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-paperclip text-white"></i></div>
            <p class="mb-0 mt-2 font-italic">"comprar 2 bolsas de harina de 50kg para el martes."</p>
            <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                <cite title="Source Title">Source Title</cite>
                <br>
                <a class="red" href="">eliminar esta nota</a>
            </footer>
        </blockquote>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color2 p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-paperclip text-white"></i></div>
            <p class="mb-0 mt-2 font-italic">"comprar 2 bolsas de harina de 50kg para el martes."</p>
            <footer class="blockquote-footer text-black-50 pt-4 mt-4 border-top">Someone famous in
                <cite title="Source Title">Source Title</cite>
                <br>
                <a class="red" href="">eliminar esta nota</a>
            </footer>
        </blockquote>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color3 p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-paperclip text-white"></i></div>
            <p class="mb-0 mt-2 font-italic">"comprar 2 bolsas de harina de 50kg para el martes."</p>
            <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                <cite title="Source Title">Source Title</cite>
                <br>
                <a class="red" href="">eliminar esta nota</a>
            </footer>
        </blockquote>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-paperclip text-white"></i></div>
            <p class="mb-0 mt-2 font-italic">"comprar 2 bolsas de harina de 50kg para el martes."</p>
            <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                <cite title="Source Title">Source Title</cite>
                <br>
                <a class="red" href="">eliminar esta nota</a>
            </footer>
        </blockquote>
    </div>
</div>

@endsection