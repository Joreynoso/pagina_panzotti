@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="{{ route('principal')}}" class="text-uppercase">Panel</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">MisNotas</li>
    </ol>
</nav>

<!-- nuevo -->
<a href="{{route('nota_alta')}}" class="btn btn-info mb-4" href="#" role="button">
    <i class="fa fa-plus mr-2 fa-xs"></i>nuevo
</a>

<!-- filtros -->
<form class="form-inline mb-4">
    <select name="tipo" class="form-control mr-sm-2" style="width: 200px;" id="exampleFormControlSelect1">
        <option>todas las notas</option>
        <option>mas reciente</option>
        <option>menos reciente</option>
        <option>mas urgente</option>
        <option>menos urgente</option>
    </select>

    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">mostrar</button>
</form>

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
                <p class="mb-0 mt-2 font-italic non-selectable texto-nota">
                    {{$item->created_at->format('d M Y - H:i:s')}}</p>
                <br>
                <form action="{{route('bajaNota',$item)}}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf
                    <button title="borarr" class="btn btn-link red" type="submit">eliminar esta nota</button>
                </form>
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
                <p class="mb-0 mt-2 font-italic non-selectable texto-nota">
                    {{$item->created_at->format('d M Y - H:i:s')}}</p>
                <br>
                <form action="{{route('bajaNota',$item)}}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf
                    <button title="borarr" class="btn btn-link red" type="submit">eliminar esta nota</button>
                </form>
            </footer>
        </blockquote>
    </div>

    @endif
    @endforeach
</div>

{{ $notas->links() }}

@endif
@endsection
