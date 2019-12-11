@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">panel de mensaje</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (auth()->check() && auth()->user()->is_admin)
                    iniciaste como administrador
                     @else
                         @if (auth()->check() && auth()->user()->is_empleado)
                         iniciaste como empleado
                      @else
                      Bienvenido a panzotti!
                     @endif
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection