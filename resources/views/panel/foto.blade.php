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

<!-- foto producto -->
<div class="row">
    @foreach ($fotos as $item)

    <div class="col-xl-3 col-lg-4 col-md-6 mb-4" style="">
        <div class="bg-white shadow rounded overflow p-3 tarjeta">
            <img src="{{asset('img/logo_pdf.png')}}" alt="ft_producto" class="img-fluid card-img-top">
            <p class="text-muted mb-2 mt-2">nombre: {{$item->producto->nombre}}</p>
            <a href="{{route('editarFoto', $item)}}" title="editar" class="btn btn-sm btn-warning text-white mb-3">
                <i class="fa fa-pen"></i>
                Editar
            </a>
            <form action="{{route('bajaFoto',$item)}}" class="d-inline" method="POST">
                @method('DELETE')
                @csrf
                <button title="borarr" class="btn btn-danger btn-sm" type="submit">
                    <i class="fa fa-trash"></i>
                    Eliminar
                </button>
            </form>
        </div>
    </div>

    @endforeach
</div>

{{ $fotos->links() }}

@endif
@endsection