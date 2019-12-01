@extends('layouts.app')

@section('content')

<!-- Mensaje Bienvenida Productos -->
<header class="bg-primary3 text-white">
    <div class="container text-center">
        <h1 class="mt-5 texto font-beyond">Nuestro Blog de Recetas Panzotti</h1>
        <p class="lead">Te compartimos algunas recetas para hacer con nuestras pastas!</p>
    </div>
</header>

<!-- recetas -->
<section class="bg-light">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <p class="pb-3 mb-4 font-italic border-bottom">
                    Recetas Panzotti.
                </p>

                <div class="blog-post">
                    <h2 class="blog-post-title font-beyond">Alfredo con mariscos</h2>
                    <p class="blog-post-meta">29/11/2019 <a href="#">Jefe Cocina Panzotti.</a></p>
                    <img src="img/fetuccini.jpeg" class="mb-3" alt="">
                    <p>Para el ajo asado: Precalienta el horno a 177 grados C. Usando una brocha para untar, unta el
                        ajo con el aceite de oliva,
                        coloca en una bandeja para hornear, cubre con papel aluminio y asa hasta que el ajo esté
                        ligeramente dorado y se ablande
                        al tacto, aproximadamente 1 ½ horas. Deja enfriar, y después corta el ajo grueso y coloca a un
                        lado.</p>
                    <p>Para la salsa: En una sartén grande (30- a -36-centímetros antiadherente preferiblemente) a
                        fuego medio-alto, añade
                        el ajo asado, la mantequilla y las cebollas y saltea hasta que las cebollas estén
                        translúcidas,
                        aproximadamente 2 minutos.</p>
                    <p> Agrega la crema para batir, el vino, las almejas, la sal y la pimienta y trae a un hervor. (No
                        te alejes porque la crema para batir tiende a rebosar).
                        Mientras la crema comienza a hervir, baja el fuego para prevenir que la crema se rebose. Hierve
                        la salsa suavemente hasta que más de la mitad de las
                        almejas se hayan abierto; la salsa se habrá reducido por casi la mitad y espesado. Añade la
                        carne de cangrejo, las vieiras y los langostinos y hierve
                        suavemente hasta que los langostinos comiencen a enroscarse y las vieiras se comiencen a
                        hinchar, aproximadamente 1 ½ minutos por lado. Agrega el Romano,
                        el Parmesano y las cebollas verdes. La salsa inmediatamente empezará a espesarse. Hierve
                        suavemente por justo 1 minuto para incorporar los quesos Romano y
                        Parmesano. Retira de la llama y sirve sobre tu pasta favorita.</p>
                    <hr>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title font-beyond">Pasta con Almejas, Vino Blanco y Salchicha Italiana Picante
                    </h2>
                    <p class="blog-post-meta">22/11/2019 <a href="#">Jefe Cocina Panzotti.</a></p>
                    <img src="img/fetuccini.jpeg" class="mb-3" alt="">
                    <p> Precalienta el horno a 177 grados centígrados.
                        Coloca las almejas en un tazón grande y cubre con agua fría del grifo. Añade bastante sal al
                        agua y remoja las almejas por 20 minutos a una hora para eliminar la arena y la mugre. Escurre y
                        lava las conchas bien debajo de agua fría que esté corriendo.
                        Coloca un recipiente para asar sobre dos fogones. Calienta el aceite de oliva a fuego
                        medio-alto. Añade las cebollas y el ajo y saltea por 2 a 3 minutos, o hasta que ablanden. Añade
                        el chile, el hinojo y la salchicha, y cocina por 3 a 4 minutos, mezclando ocasionalmente para
                        romper la salchicha.</p>
                    <p>Una vez la salchicha esté bien dorada. Desglasa el recipiente con el vino blanco. Añade las
                        almejas y mezcla todo hasta que esté bien combinado. Organiza los tomates encima, añade el
                        tomillo y espolvorea con sal y pimienta. Transfiere el recipiente al horno y cocina hasta que
                        las almejas se abran y los tomates cereza estén asados y jugosos, 10 a 12 minutos.
                        Mientras, en una olla grande llena de agua salada hirviendo cocina el linguine hasta que esté al
                        dente. Cuando las almejas estén listas, lleválas a la estufa a fuego alto. Hierve suavemente
                        para reducir el líquido excesivo y para abrir las almejas que aún estén cerradas (mezclando
                        vigorosamente con una cuchara de madera también ayuda)
                        Prueba la salsa y sazona con sal como sea necesario.</p>
                    <p>Escurre la pasta y transfiérela directamente al recipiente de asar. Añade la mantequilla, la
                        ralladura y el jugo de limón y el perejil. Con pinzas, mezcla todo junto para cubrir la pasta en
                        la salsa.
                        Sirve con bastante pecorino rallado encima</p>
                    <hr>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title font-beyond">Espagueti Mangiafuoco
                    </h2>
                    <p class="blog-post-meta">18/11/2019 <a href="#">Jefe Cocina Panzotti.</a></p>
                    <img src="img/fetuccini.jpeg" class="mb-3" alt="">
                    <p>Mezcla los tomates picados, los tomates cereza, el aceite de oliva, el ajo, las alcaparras, las anchoas, la albahaca, el perejil y el pimiento rojo en una sartén y cocina a fuego lento durante 5 minutos.
                            Llena una olla grande de agua salada y lleva a un hervor. Añade los espaguetis y cocina de acuerdo con las instrucciones del paquete. Escurre y coloca la pasta en la sartén con la salsa. Mezcla antes de servir.
                            Advertencias y declinación de responsabilidades:
                            Esta receta fue proporcionada por un chef, restaurante o profesional del arte culinario y fue reducida de una receta a mayor escala. Los chefs de Food Network Kitchen no la han probado para uso en el hogar y por lo tanto,
                             no pueden garantizar los resultados.</p>
                    <hr>
                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-danger" href="#">Recetas Antiguas</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Nuevas Recetas</a>
                </nav>
            </div>

            <!--sidebar-->
            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-white rounded">
                    <h4 class="font-italic">Acerca de este blog</h4>
                    <p class="mb-0">En este blog vas a encontrar todas nuestras
                        recetas recomendadas para que hagas con nuestras riquisimas
                        pastas caseras!.</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Archivos</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Noviembre 2019</a></li>
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Redes Sociales</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Instagram</a></li>
                        <li><a href="https://www.facebook.com/PanzottiPastasCaseras/?eid=ARBf-FK1BfpKZoKmGVBAN6wEunFpq0pLG6aG3wXcRsCkMAUgb4PrjHVwCS-lBQoiS_3szzNxgzi7zMwL">Facebook</a></li>
                    </ol>
                </div>
            </aside>
        </div>
    </main>
</section>
@endsection
