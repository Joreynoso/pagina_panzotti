@extends('layouts.app')

@section('content')

<div class="container">

<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap">
<div class="img-big-wrap ">
  <div> <a href="#"><img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"> </div>
  <div class="item-gallery"> <img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"> </div>
  <div class="item-gallery"> <img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"> </div>
  <div class="item-gallery"> <img class="img-fluid" alt="Responsive image" src="img/fetuccini.jpeg"> </div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
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
  <dd><p>Los espagueti Panzotti son un producto de elaboración propia. Están hechos con materia prima cien porcientos naturales. Contiene huevos caseros y harían 0000.</p></dd>
</dl>
  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Kilos: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		<option> 1 </option>
			  		<option> 2 </option>
			  		<option> 3 </option>
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->

	</div> <!-- row.// -->
    <hr>

     <!-- Button trigger modal -->
    <a href="#" type="button" style="margin: 5px" class="btn btn-lg btn-primary text-uppercase"  data-toggle="modal" data-target="#staticBackdrop"> Hacer Pedido </a>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Esta seguro en hacer el pedido</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Ustes esta a punto de realizar un pedido esta seguro de finalizar</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
              </div>
            </div>
          </div>

    <a href="#" style="margin: 5px" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Agregar mas </a>







</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->

@endsection


