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
<a href="{{route('nota_alta')}}" class="btn btn-info mb-4" href="#" role="button">
    <i class="fa fa-plus mr-2 fa-xs"></i>nuevo
</a>

<div id="outerContainer">
    <div id="container">
      <div id="item">

      </div>
    </div>
  </div>

<!-- existen clientes? -->
@if ($notas->count() == 0)

<div class="alert alert-info">
    no existe ninguna nota, agrega una.
</div>

@else

<!-- notas -->
<div class="row">
    @foreach ($notas as $item)

    <!-- urgencia = alta , nota color amarillo -->
    @if ($item->urgencia == 'alta')
    <div id='container' class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-paperclip text-white"></i></div>
            <p class="mb-0 mt-2 font-italic non-selectable">"{{$item->descripcion}}."</p>
            <footer class="blockquote-footer pt-4 mt-4 border-top non-selectable">urgencia: {{$item->urgencia}}
                <br>
                <a class="red mt-2" href="">eliminar esta nota</a>
            </footer>
        </blockquote>
    </div>

    @else

    <!-- urgencia = media , nota color rosa -->
    @if ($item->urgencia == 'media')
    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color2 p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-paperclip text-white"></i></div>
            <p class="mb-0 mt-2 font-italic non-selectable">"{{$item->descripcion}}."</p>
            <footer class="blockquote-footer text-black-50 pt-4 mt-4 border-top non-selectable">urgencia:
                {{$item->urgencia}}
                <br>
                <a class="red mt-2" href="">eliminar esta nota</a>
            </footer>
        </blockquote>
    </div>

    @else
    <!-- urgencia = baja , nota color verde -->
    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color3 p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-paperclip text-white"></i></div>
            <p class="mb-0 mt-2 font-italic non-selectable">"{{$item->descripcion}}."</p>
            <footer class="blockquote-footer pt-4 mt-4 border-top non-selectable">urgencia: {{$item->urgencia}}
                <br>
                <a class="red mt-2" href="">eliminar esta nota</a>
            </footer>
        </blockquote>
    </div>

    @endif
    @endif
    @endforeach
</div>

{{ $notas->links() }}

@endif
@endsection

