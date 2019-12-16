@extends('layouts.app')

@section('content')

<section class=" bg-light">
	<div class="container">
		<div class="card">
			<div class="row">

				<!-- carousel -->
				<div class="col-5 p-4 border-right">
					<div class="card-body p-2" style="width: 100%;">

						<div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
							<div class="carousel-inner">

								@foreach ($fotos as $item)
								<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
									<img class="d-block w-100 cover" src="{{ asset('img/'.$item->ruta)}}" alt="First slide">
								</div>
								@endforeach

								@foreach ($fotos as $item)
								<div class="carousel-item">
									<img class="d-block w-100 cover" src="{{ asset('img/'.$item->ruta)}}" alt="Second slide">
								</div>
								@endforeach

							</div>

							<!-- botones adelante, atras -->
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
								data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button"
								data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div><!-- final carrusel -->
					</div>
				</div>

				<!-- descripcion del producto -->
				<div class="col-7 p-4">
					<div class="card-body p-5">
						<form method="POST" action="{{route('pedido')}}">
							@csrf

							@error('fecha')
							<div class="alert alert-danger" role="alert">
								por favor seleccione una fecha valida.
							</div>
							@enderror

							<input type="hidden" name="id" value="{{$producto->id}}" />

							<h3 class="mb-3 carrito-producto2">{{$producto->nombre}}</h3>

							<!-- detalle precio -->
							<p>
								<span class="price h5 monserrat">p/kg</span>
								<span class="price h3 text-warning">
									<span class="monserrat h5">$</span><input
										class="input-precio price h5 noselect text-warning" name="precio"
										value="{{$producto->productoprecio->precio}}" readonly="true">
								</span>
								<span id="precio" style="font-size: 0">{{$producto->productoprecio->precio}}</span>
							</p>

							<!-- descripcion del producto -->
							<p class=""><strong>Descripcion:</strong></p>
							<p class="carrito-kilos">{{$producto->descripcion}}</p>
							<p class="carrito-kilos">Nuestras pastas son un producto de elaboración propia. Están
								hechos
								con materia
								prima cien porcientos naturales. Contiene huevos caseros y harína 0000.</p>

							<hr>
							<!-- cantidad de kilos -->
							<div class="form-group">
								<label for="exampleFormControlSelect1" class="carrito-kilos2"><strong>cantidad
										kilos</strong></label>
								<select class="form-control" id="kilo" name="cantidad">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>

							<!-- fecha retiro producto -->
							<strong class="carrito-kilos2">que fecha que desea retirar el producto ?</strong>
							<div class="form-group">
								<input class="form-control" type="date" value="" id="example-date-input" name="fecha">
							</div>
							<hr>

							<!-- precio total -->
							<p>
								<span class="price h3 text-warning">
									<span class="monserrat h5">Total $ </span><span class="monserrat h5"
										id="total">{{$producto->productoprecio->precio}}</span>
								</span>
							</p>

							<button title="hacer pedido" class="btn btn-rojo text-white mb-3 largo" type="submit">
								hacer pedido
								<i class="fas fa-shopping-cart mr-1"></i>
							</button>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')

<script>
	$(document).ready(function() {
		  $('#kilo').on('change', function() {
			var precioPorKilo = $('#precio').text();
			var cantidad = this.value;
			var total = precioPorKilo * cantidad;
			$('#total').text(total);

		  });
	});

</script>

@endsection