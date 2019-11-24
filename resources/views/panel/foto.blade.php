@extends('panel.plantilla_admin')

@section('section_admin')

<!-- ruta  -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="#" class="text-uppercase">Panel</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Foto</li>
    </ol>
</nav>

<!-- nuevo -->
<a href="{{route('foto_alta')}}" class="btn btn-info mb-4" href="#" role="button">
    <i class="fa fa-plus mr-2 fa-xs"></i>nuevo
</a>

<!-- existen clientes? -->
@if ($fotos->count() == 0)

<div class="alert alert-info">
    no existe ninguna foto, agrega una.
</div>

@else

<!-- notas -->
<div style="margin: 5px" class="row">
    @foreach ($fotos as $item)

        <div class="card text-center" style="width: 18rem; margin: 5px">
            <img class="card-img-top" src="{{ asset('img/'.$item->ruta) }}">
            <div class="card-body">
                <h5 class="card-title">{{$item->producto->nombre}}</h5>

                <a href="{{route('editarFoto', $item)}}" title="editar" class="btn btn-info mb-4">Editar</i></a>

                <form action="{{route('bajaFoto',$item)}}" class="d-inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button title="borarr" class="btn btn-info mb-4" type="submit">Eliminar</button>
                </form>

            </div>
        </div>

    @endforeach
</div>

{{ $fotos->links() }}

@endif
@endsection
