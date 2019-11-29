@extends('layouts.app')

@section('content')

<!-- Mensaje Bienvenida Productos -->
<header class="bg-primary3 text-white">
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
                        <h1 class="text-center">Alfredo con mariscos</h1>
                      <img class="img-fluid mb-3" src="img/receta1.jpg">
                    </div>
                    <div style="text-align: justify" class="text">
                        <p>Para el ajo asado: Precalienta el horno a 177 grados C. Usando una brocha para untar, unta el ajo con el aceite de oliva,
                            coloca en una bandeja para hornear, cubre con papel aluminio y asa hasta que el ajo esté ligeramente dorado y se ablande
                             al tacto, aproximadamente 1 ½ horas. Deja enfriar, y después corta el ajo grueso y coloca a un lado.
                                Para la salsa: En una sartén grande (30- a -36-centímetros antiadherente preferiblemente) a fuego medio-alto, añade
                                el ajo asado, la mantequilla y las cebollas y saltea hasta que las cebollas estén translúcidas, aproximadamente 2 minutos.
                                 Agrega la crema para batir, el vino, las almejas, la sal y la pimienta y trae a un hervor. (No te alejes porque la crema para batir tiende a rebosar).
                                  Mientras la crema comienza a hervir, baja el fuego para prevenir que la crema se rebose. Hierve la salsa suavemente hasta que más de la mitad de las
                                  almejas se hayan abierto; la salsa se habrá reducido por casi la mitad y espesado. Añade la carne de cangrejo, las vieiras y los langostinos y hierve
                                   suavemente hasta que los langostinos comiencen a enroscarse y las vieiras se comiencen a hinchar, aproximadamente 1 ½ minutos por lado. Agrega el Romano,
                                    el Parmesano y las cebollas verdes. La salsa inmediatamente empezará a espesarse. Hierve suavemente por justo 1 minuto para incorporar los quesos Romano y
                                    Parmesano. Retira de la llama y sirve sobre tu pasta favorita.
                                Equipo especial:
                                Nota del cocinero:
                                Esta receta fue administrada por un chef, restaurante o profesional culinario. No ha sido probada para uso en casa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="recetas" class="bg-light">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <div class="mb-4">
                    <!-- Dotted divider -->
                    <hr class="dotted">
                </div>
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <div class="intro">
                            <h1 class="text-center">Pasta con Almejas, Vino Blanco y Salchicha Italiana Picante</h1>
                            <img class="img-fluid mb-3" src="img/receta2.jpg">
                        </div>
                        <div style="text-align: justify" class="text">
                            <p>Precalienta el horno a 177 grados centígrados.
                                    Coloca las almejas en un tazón grande y cubre con agua fría del grifo. Añade bastante sal al agua y remoja las almejas por 20 minutos a una hora para eliminar la arena y la mugre. Escurre y lava las conchas bien debajo de agua fría que esté corriendo.
                                    Coloca un recipiente para asar sobre dos fogones. Calienta el aceite de oliva a fuego medio-alto. Añade las cebollas y el ajo y saltea por 2 a 3 minutos, o hasta que ablanden. Añade el chile, el hinojo y la salchicha, y cocina por 3 a 4 minutos, mezclando ocasionalmente para romper la salchicha.
                                    Una vez la salchicha esté bien dorada. Desglasa el recipiente con el vino blanco. Añade las almejas y mezcla todo hasta que esté bien combinado. Organiza los tomates encima, añade el tomillo y espolvorea con sal y pimienta. Transfiere el recipiente al horno y cocina hasta que las almejas se abran y los tomates cereza estén asados y jugosos, 10 a 12 minutos.
                                    Mientras, en una olla grande llena de agua salada hirviendo cocina el linguine hasta que esté al dente. Cuando las almejas estén listas, lleválas a la estufa a fuego alto. Hierve suavemente para reducir el líquido excesivo y para abrir las almejas que aún estén cerradas (mezclando vigorosamente con una cuchara de madera también ayuda)
                                    Prueba la salsa y sazona con sal como sea necesario.
                                    Escurre la pasta y transfiérela directamente al recipiente de asar. Añade la mantequilla, la ralladura y el jugo de limón y el perejil. Con pinzas, mezcla todo junto para cubrir la pasta en la salsa.
                                    Sirve con bastante pecorino rallado encima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="recetas" class="bg-light">
            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <div class="mb-4">
                        <!-- Dotted divider -->
                        <hr class="dotted">
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                            <div class="intro">
                                <h1 class="text-center">Espagueti Mangiafuoco</h1>
                               <img class="img-fluid mb-3" src="img/receta3.jpg">
                            </div>
                            <div style="text-align: justify" class="text">
                                <p>Mezcla los tomates picados, los tomates cereza, el aceite de oliva, el ajo, las alcaparras, las anchoas, la albahaca, el perejil y el pimiento rojo en una sartén y cocina a fuego lento durante 5 minutos.
                                        Llena una olla grande de agua salada y lleva a un hervor. Añade los espaguetis y cocina de acuerdo con las instrucciones del paquete. Escurre y coloca la pasta en la sartén con la salsa. Mezcla antes de servir.
                                        Advertencias y declinación de responsabilidades:
                                        Esta receta fue proporcionada por un chef, restaurante o profesional del arte culinario y fue reducida de una receta a mayor escala. Los chefs de Food Network Kitchen no la han probado para uso en el hogar y por lo tanto,
                                         no pueden garantizar los resultados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
