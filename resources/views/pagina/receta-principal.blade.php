@extends('layouts.app')

@section('content')

<!-- Mensaje Bienvenida Productos -->
<header class="bg-primary2 text-white">
    <div class="container text-center">
        <h1 class="mt-5 texto">Recetas Panzotti</h1>
        <p class="lead">Te invitamos a conocer todos nuestros productos!</p>
    </div>
</header>

<!-- recetas -->
<section id="recetas" class="bg-light">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="heading">
                <img class="heading-img" src="img/heading_logo.png" alt="">
                <h2>Nuestras Recetas</h2>
                <p class="lead text-center">elegi el producto que mas te guste y hace un pedido! </p>
            </div>

            <div class="mb-4">
                <!-- Dotted divider -->
                <hr class="dotted">
            </div>
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">Receta Fetuccines con queso</h1>
                        <p class="text-center"><span class="by">by</span> <a href="#">Author Name</a><span
                                class="date">Sept 8th, 2016 </span></p><img class="img-fluid mb-3" src="img/1574600669.jpeg">
                    </div>
                    <div class="text">
                        <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span
                                style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus
                            elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in
                            justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                            Curae.</p>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut
                                vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget
                            velit <em>pulvinar dict</em> vel in justo. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection