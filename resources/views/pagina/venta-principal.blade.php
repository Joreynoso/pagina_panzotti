@extends('layouts.app')

@section('content')

{{-- <section class="bg-light">
	<div class="container">
		<div class="card">
			<div class="row">

				<aside class="col-sm-5 border-right p-4">
					<article class="gallery-wrap">
						<div class="img-big-wrap ">

							<!-- modal disparador -->
							<div>
								<button type="button" data-toggle="modal" data-target="#exampleModal">
									<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg">
								</button>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-body">
											<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"
												alt="">
										</div>
									</div>
								</div>
							</div>

						</div> <!-- slider-product.// -->
						<div class="img-small-wrap">
							<div class="item-gallery">
								<!-- Button trigger modal -->
								<button type="button" data-toggle="modal" data-target="#exampleModal">
									<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg">
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"
													alt="">
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="item-gallery">
								<!-- Button trigger modal -->
								<button type="button" data-toggle="modal" data-target="#exampleModal">
									<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg">
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"
													alt="">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="item-gallery">
								<!-- Button trigger modal -->
								<button type="button" data-toggle="modal" data-target="#exampleModal">
									<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg">
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"
													alt="">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="item-gallery">
								<!-- Button trigger modal -->
								<button type="button" data-toggle="modal" data-target="#exampleModal">
									<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg">
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"
													alt="">
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</article>
				</aside>

				<aside class="col-sm-7">
					<article class="card-body p-5">
						<h3 class="title mb-3">Spaguetti Panzotti</h3>

						<p class="price-detail-wrap">
							<span class="price h3 text-warning">
								<span class="currency">$</span><span class="num">150</span>
							</span>
							<span>/per kg</span>
						</p> <!-- price-detail-wrap .// -->
						<dl class="item-property">
							<dt>Description</dt>
							<dd>
								<p>Los espagueti Panzotti son un producto de elaboración propia. Están hechos con
									materia
									prima cien porcientos naturales. Contiene huevos caseros y harían 0000.</p>
							</dd>
						</dl>
						<!-- item-property-hor .// -->

						<hr>
						<div class="row">
							<div class="col-sm-5">
								<dl class="param param-inline">
									<dt>Kilos: </dt>
									<select class="form-control form-control-sm" style="width:70px;">
										<option> 1 </option>
										<option> 2 </option>
										<option> 3 </option>
									</select>
								</dl> <!-- item-property .// -->
							</div> <!-- col.// -->

						</div> <!-- row.// -->

						<div class="row">
							<div class="col-sm-5">
								<dl class="param param-inline">
									<dt>Fecha: </dt>

									<input class="form-control" type="date" value="2011-08-19" id="example-date-input">

								</dl> <!-- item-property .// -->
							</div> <!-- col.// -->

						</div> <!-- row.// -->
						<hr>
						<span class="price h3 text-warning">
							<span class="currency">total: </span><span class="num">$150</span>
						</span>
						<hr>

						<!-- Button trigger modal -->
						<a href="#" type="button" class="btn btn-lg btn-danger text-uppercase" data-toggle="modal"
							data-target="#staticBackdrop"> Hacer Pedido </a>

						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
							aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Esta seguro en hacer el pedido
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Ustes esta a punto de realizar un pedido esta seguro de finalizar</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"
											data-dismiss="modal">Cancelar</button>
										<button type="button" class="btn btn-primary">Aceptar</button>
									</div>
								</div>
							</div>
						</div>

						<a href="#" style="margin: 5px" class="btn btn-outline-primary text-uppercase"> <i
								class="fas fa-shopping-cart"></i> Agregar mas </a>

					</article>
				</aside>
			</div>
		</div>
	</div>
</section> --}}

<section class="bg-light">
	<div class="container">
		<div class="card">
			<div class="row">

				<!-- carousel -->
				<div class="col-5 p-4 border-right">
					<div class="card-body p-2">
						<div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="{{ asset('img/'.$producto->foto->ruta)}}"
										alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="img/fetuccini.jpeg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="img/fetuccini.jpeg" alt="Third slide">
								</div>
							</div>
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
						</div>
						<img class="img-fluid" alt="Responsive image" src="img/publicidad.jpeg">
					</div>
				</div>

				<!-- descripcion del producto -->
				<div class="col-7 p-4">
					<div class="card-body p-5">
						<form method="POST" action="{{route('pedido')}}">
							@csrf

							@error('fecha')
							<div class="alert alert-danger" role="alert">
								por favor seleccione una fecha.
							</div>
							@enderror

							<input type="hidden" name="id" value="{{$producto->id}}" />

							<h3 class="tittle mb-3">{{$producto->nombre}}</h3>

							<!-- detalle precio -->
							<p>
								<span class="price h3 text-warning">
									<span>$</span><input 
										class="input-precio price h3 noselect text-warning"
										name="precio" 
										value="{{$producto->productoprecio->precio}}" 
										readonly="true">
								</span>

								<span id="precio" style="font-size: 0">{{$producto->productoprecio->precio}}</span>

								<span class="price h5">p/kg</span>
							</p>

							<!-- descripcion del producto -->
							<p>Descripcion:</p>
							<p>{{$producto->descripcion}}</p>
							<p>Nuestras pastas son un producto de elaboración propia. Están hechos con materia
								prima cien porcientos naturales. Contiene huevos caseros y harína 0000.</p>

							<hr>
							<!-- cantidad de kilos -->
							<div class="form-group">
								<label for="exampleFormControlSelect1"><strong>cantidad kilos</strong></label>
								<select class="form-control" id="kilo" name="cantidad">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>

							<!-- fecha retiro producto -->
							<strong>que fecha que desea retirar el producto ?</strong>
							<div class="form-group">
								<input class="form-control" type="date" value="" id="example-date-input" name="fecha">
							</div>
							<hr>

							<!-- precio total -->
							<p>
								<span class="price h3 text-warning">
									<span>Total $ </span><span id="total">{{$producto->productoprecio->precio}}</span>
								</span>
							</p>

							<button title="hacer pedido" class="btn btn-rojo text-white mb-3" type="submit">hacer
								pedido</button>
							<a href="" title="agregar al carrito" class="btn btn-outline-primary mb-3">
								<i class="fa fa-shopping-cart"></i>
								agregar al carrito
							</a>

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