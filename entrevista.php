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

        <!-- ESTILOS -->
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/estilos.css">

        <!-- FUENTE -->
        <link href='http://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Exo:400,600,700,800' rel='stylesheet' type='text/css'>

        <!-- MODERNIZR -->
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

        <!-- BANNER -->
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

        <!-- ADDTHIS -->
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50dcdc400c54dc87"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                
                <section id="header-izq">
                    <h1>
                        <a class="title" href="#">
                        Pichling Representaciones</a></h1>
                </section>

                <section id="header-der">
                    <nav>
                        <ul>
                            <li><a href="#">Inicio</a></li>
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

                <section id="main-contenido">

                    <?php require_once("w-icons.php"); ?>

                    <section id="news">
                        
                        <section id="nwizq">
                            <h2>Paolo Guerrero en el once ideal de Sudamérica, según encuesta de "El País"</h2>
                            <p>El delantero peruano fue el segundo más votado de todo el sondeo, solo por detrás del brasileño Neymar en la delantera</p>

                            <div id="nwizq-img">
                                <img src="http://elcomercio.e3.pe/66/ima/0/0/5/5/2/552505.jpg" alt="">
                            </div>
                            
                            <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                <a class="addthis_button_tweet" tw:count="horizontal"></a>
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="120"></a>
                                <a class="addthis_button_pinterest_pinit" pi:pinit:url="" pi:pinit:media="" pi:pinit:layout="horizontal"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>

                            <p>La obtención del título del Mundial de Clubes con el Corinthians fue determinante para el ascenso en la carrera del peruano Paolo Guerrero. En medio de la discusión sobre si se le deben o no entregar los Laureles Deportivos, el delantero fue considerado en el once ideal de Sudamérica en la tradicional encuesta que realiza el diario “El País” de Uruguay, que por primera vez le dio la chance a sus lectores de votar.</p>
 
                            <p>Guerrero hace dupla con el brasileño Neymar en la delantera. De hecho, el ‘Depredador’ fue el segundo jugador más votado de la encuesta con 43.843, solo por detrás de la joya brasileña, quien sumó 53.958 votos de la gente.</p>
                             
                            <p>Matías Rodríguez, lateral argentino de la Universidad de Chile, quedó en tercer lugar con 43.188 votos, mientras que Ronaldinho cuarto con 40.305 votos. En tanto, José Perkerman fue votado como el mejor técnico.</p>
                             
                            <p>El mejor futbolista del continente, denominado premio “Rey de América”, será elegido por los periodistas de América y los resultados se divulgarán cuando finalice el año (se dice que el 30 de diciembre).</p>
                             
                            <p>EL ONCE DE LA GENTE:</p>
                            Agustín Orión (Boca Juniors)
                            Matías Rodríguez (Universidad de Chile)
                            Osvaldo González (Universidad de Chile)
                            Aquivaldo Mosquera (América de México)
                            Eugenio Mena (Santos)
                            Charles Aranguiz (Universidad de Chile)
                            Pablo Guiñazú (Inter de Porto Alegre)
                            Walter Montillo (Cruzeiro)
                            Ronaldinho (Atlético Mineiro)
                            Paolo Guerrero (Corinthians)
                            Neymar (Santos)
                        </section>

                        <section id="nwder">
                            
                            <aside>
                                <h3>Más noticias</h3>
                                <ul>
                                    <li>Fernando Allocco confirmó su fichaje por Universitario de Deportes</li>
 
                                    <li>Mario Leguizamón confirmó que jugará en Universitario de Deportes</li>
                                     
                                    <li>Universitario canceló la gira a Europa y viajaría a Arequipa</li>
                                     
                                    <li>El DT de la ‘U’ Ángel Comizzo llegó a Lima y recibió bienvenida de hinchas</li>
                                     
                                    <li>Guerrero haría dupla con Pato: Corinthians confirmó negociaciones</li>
                                     
                                    <li>Cristal: "Nuestro grupo en Libertadores es muy duro, pero pudo ser peor"</li>
                                     
                                    <li>Copa Libertadores 2012, la campaña que los clubes peruanos no deben repetir</li>
                                     
                                    <li>Rivales de Cristal en la Libertadores: así llegan Palmeiras y Libertad</li>
                                     
                                    <li>Copa Libertadores: Entérate cómo llegan los rivales de Real Garcilaso</li>
                                </ul>
                            </aside>

                            <aside class="publicidad">
                                <img src="https://www.google.com/help/hc/images/adsense/adsense_185665_adformat-text_336x280_en.png" alt="">
                            </aside>

                        </section>

                    </section>

                </section>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

        <?php require_once("w-footer.php"); ?>

    </body>
</html>
    