<?php
require_once("panel@pichling/conexion/conexion.php");
require_once("panel@pichling/conexion/funciones.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Pichling Representaciones</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <base href="<?php echo $web; ?>">

        <!-- ESTILOS -->
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/estilos.css">

        <!-- FUENTE -->
        <link href='http://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Exo:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- MODERNIZR -->
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

        <!-- BANNER OFICINA -->
        <link href="libs/allinone_banner/sidebar/allinone_bannerRotator.css" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
        <script src="libs/allinone_banner/sidebar/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
        <script src="libs/allinone_banner/sidebar/js/allinone_bannerRotator.js" type="text/javascript" charset="utf-8"></script>
        <!--[if IE]><script src="/libs/allinone_banner/sidebar/js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
        <script>
            var jFotOfic=jQuery.noConflict();

            jFotOfic(document).ready(function() {
                jFotOfic('#slider-oficina').allinone_bannerRotator({
                    skin: 'universal',
                    width: 350,
                    height: 360,
                    numberOfStripes:4,
                    numberOfRows:5,
                    numberOfColumns:5,              
                    showAllControllers:true,
                    showBottomNav:false,
                    showCircleTimer:false
                });
            });
        </script>

        <!-- BANNER JUGADORES -->
        <link rel="stylesheet" href="libs/swipe-effect-slider/js/pe.kenburns/themes/neutral_light/skin.min.css" />
        <script src="libs/swipe-effect-slider/js/jquery-1.5.2.min.js"></script>
        <script src="libs/swipe-effect-slider/js/pe.kenburns/jquery.pixelentity.kenburnsSlider.min.js"></script>
        <script>
        var jBanJug=jQuery.noConflict();
        jBanJug(document).on("ready", startBannerJugador(jBanJug));

        function startBannerJugador(datoJQ){
            datoJQ(".peKenBurns").peKenburnsSlider();
        }
        </script>

        <!-- LISTA JUGADORES -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
        var jLisJug=jQuery.noConflict();
        jLisJug(document).on("ready", startJugadores);

        function startJugadores(){
            jLisJug("#enl-lista-jugadores").on("click", MostrarJugadores);
            jLisJug("#cerrar-contenido").on("click", OcultarJugadores);
        }

        function MostrarJugadores(){            
            jLisJug("#progressbar").removeClass("ocultar");
            jLisJug("#cerrar-contenido").removeClass("ocultar");
            jLisJug("#lista-entrevista").slideUp(500);
            jLisJug("#lista-jugadores").slideDown(1000).show();
            equalHeight(jLisJug("#lista-jugadores aside"));
            jLisJug("#enl-lista-jugadores").addClass("active");
            jLisJug("#progressbar").addClass("ocultar");            
            jLisJug("#cerrar-contenido").addClass("cerrar-jugadores");
        }

        function OcultarJugadores(){
            jLisJug("#cerrar-contenido").addClass("ocultar");
            jLisJug("#lista-jugadores").slideUp(1000);
        }

        function equalHeight(group) {
           tallest = 0;
           group.each(function() {
              thisHeight = jLisJug(this).height();
              if(thisHeight > tallest) {
                 tallest = thisHeight;
              }
           });
           group.height(tallest);
        }

        </script>

        <!-- LISTA ENTREVISTA -->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
        var jLisEnt=jQuery.noConflict();
        jLisEnt(document).on("ready", startEntrevista);

        function startEntrevista(){
            jLisEnt("#enl-lista-entrevista").on("click", clickEntrevista);
            jLisJug("#cerrar-contenido").on("click", OcultarEntrevista);
        }

        function clickEntrevista(){
            jLisEnt("#progressbar").removeClass("ocultar");
            jLisJug("#cerrar-contenido").removeClass("ocultar");
            jLisEnt("#lista-jugadores").slideUp(500);
            jLisEnt("#lista-entrevista").slideDown(1000).show();
            jLisEnt("#enl-lista-entrevista").addClass("active");
            jLisEnt("#progressbar").addClass("ocultar");
            jLisJug("#cerrar-contenido").addClass("cerrar-entrevista");
        }

        function OcultarEntrevista(){
            jLisJug("#cerrar-contenido").addClass("ocultar");
            jLisJug("#lista-entrevista").slideUp(1000);
        }
        </script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                
                <section id="header-izq">
                    <h1>
                        <a class="title" href="/">
                        Pichling Representaciones</a></h1>
                </section>

                <section id="header-der">
                    <nav>
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Galería</a></li>
                            <li><a href="#">Entrevistas</a></li>
                            <li><a href="#">Noticias</a></li>
                            <li><a href="#">Contactenos</a></li>
                        </ul>
                    </nav>

                    <aside>
                        <img src="imagenes/header-representante.png" widht="432" height="61" >
                    </aside>

                </section>

            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <section id="main-slider">

                    <div id="slider" class="peKenBurns" data-controls="over" data-logo="disabled" data-shadow="disabled">

                        <div data-thumb="imagenes/slider/img1.jpg">
                            <img src="imagenes/slider/img1.jpg" alt="Banner Image 1" />
                        </div>

                        <div data-thumb="imagenes/slider/img2.jpg">
                            <img src="imagenes/slider/img2.jpg" alt="Banner Image 1" />
                        </div>

                        <div data-thumb="imagenes/slider/img3.jpg">
                            <img src="imagenes/slider/img3.jpg" alt="Banner Image 1" />
                        </div>

                        <div data-thumb="imagenes/slider/img4.jpg">
                            <img src="imagenes/slider/img4.jpg" alt="Banner Image 1" />
                        </div>

                        <div data-thumb="imagenes/slider/img5.jpg">
                            <img src="imagenes/slider/img5.jpg" alt="Banner Image 1" />
                        </div>

                    </div>
                    
                    <div id="slider-oficina" style="display:none;">
                        <ul class="allinone_bannerRotator_list">
                            <li><img src="imagenes/oficina/img1.jpg" alt="" /></li>
                            <li><img src="imagenes/oficina/img2.jpg" alt="" /></li>
                            <li><img src="imagenes/oficina/img3.jpg" alt="" /></li>
                            <li><img src="imagenes/oficina/img4.jpg" alt="" /></li>
                            <li><img src="imagenes/oficina/img5.jpg" alt="" /></li>
                            <li><img src="imagenes/oficina/img6.jpg" alt="" /></li>
                            <li><img src="imagenes/oficina/img7.jpg" alt="" /></li>
                            <li><img src="imagenes/oficina/img8.jpg" alt="" /></li>
                        </ul>            
                    </div>

                </section>

                <section id="main-contenido">

                    <section id="main-cont-bienvenido">
                        <h2>Bienvenido</h2>
                        <p>Bienvenidos a la Pagina Web de Pichling Representaciones. Somos una empresa de representación de Jugadores y Técnicos de futbol, que trabaja con Agentes asociados en Argentina, Colombia y España. 
                            Caracterizados, todos, por la seriedad, confiabilidad y transparencia en sus operaciones.
                            Esperamos que la información que mostramos sea de su interés y les sirvan como base para iniciar conversaciones sobre futuros negocios con nuestros representados.</p>

                        <p>Muchas gracias por su visita y estamos a su disposición para cualquier consulta.</p>

                    </section>

                    <?php require_once("w-icons.php"); ?>

                    <section id="main-news">
                        
                        <section id="mnew-video">
                            <h2>Videos</h2>

                            <div>
                                <iframe width="455" height="256" src="http://www.youtube.com/embed/SiRMXc18X2A?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>

                        </section>

                        <section id="mnew-noticias">
                            <h2>Noticias</h2>

                            <article>
                                <img width="125" height="125" src="" alt="">
                                <div>
                                    <h3>Well, the way they make shows is, they make one show</h3>
                                    <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>    
                                </div>                                
                            </article>

                            <article>
                                <img width="125" height="125" src="" alt="">
                                <div>
                                    <h3>Well, the way they make shows is, they make one show</h3>
                                    <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>    
                                </div>                                
                            </article>

                        </section>

                    </section>

                </section>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

        <?php require_once("w-footer.php"); ?>

    </body>
</html>
    