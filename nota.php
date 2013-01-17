<?php
require_once("panel@pichling/conexion/conexion.php");
require_once("panel@pichling/conexion/funciones.php");

//VARIABLES DE URL
$url_id=$_REQUEST["id"];

//NOTICIA
$rst_nota=mysql_query("SELECT * FROM pf_noticias WHERE id=$url_id;", $conexion);
$fila_nota=mysql_fetch_array($rst_nota);

//VARIABLES
$nota_id=$fila_nota["id"];
$nota_url=$fila_nota["url"];
$nota_titulo=$fila_nota["titulo"];
$nota_contenido=$fila_nota["contenido"];
$nota_imagen=$fila_nota["imagen"];
$nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
$nota_fecha_pub=$fila_nota["fecha_publicacion"];

//MAS NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM pf_noticias WHERE id<>$url_id;", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $nota_titulo; ?></title>
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
        <script>var addthis_config = {"data_track_addressbar":true};</script>
        <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50dcdc400c54dc87"></script>

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
                            <h2><?php echo $nota_titulo; ?></h2>
                            
                            <div id="nwizq-img">
                                <img src="upload/<?php echo $nota_imagen_carpeta."".$nota_imagen; ?>" alt="<?php echo $nota_titulo; ?>">
                            </div>
                            
                            <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                <a class="addthis_button_tweet" tw:count="horizontal"></a>
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="120"></a>
                                <a class="addthis_button_pinterest_pinit" 
                                pi:pinit:url="nota/<?php echo $nota_id."-".$nota_url; ?>" 
                                pi:pinit:media="upload/<?php echo $nota_imagen_carpeta."".$nota_imagen; ?>" 
                                pi:pinit:layout="horizontal"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>

                            <?php echo $nota_contenido; ?>
                        </section>

                        <section id="nwder">
                            
                            <aside>
                                <h3>Más noticias</h3>
                                <ul>
                                    <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
                                            $noticias_id=$fila_noticias["id"];
                                            $noticias_url=$fila_noticias["url"];
                                            $noticias_titulo=$fila_noticias["titulo"];
                                    ?>
                                    <li><a href="nota/<?php echo $noticias_id."-".$noticias_url; ?>" title="<?php echo $noticias_titulo; ?>">
                                        <?php echo $noticias_titulo; ?></a></li>
                                    <?php } ?>
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