<?php
require_once("panel@pichling/conexion/conexion.php");
require_once("panel@pichling/conexion/funciones.php");

//VARIABLES DE URL
$id_jugador=$_REQUEST["id"];

//JUGADOR SELECCIONADO
$rst_jugador=mysql_query("SELECT * FROM pf_jugadores WHERE id=$id_jugador", $conexion);
$fila_jugador=mysql_fetch_array($rst_jugador);

$jugador_nombre=$fila_jugador["nombre"];
$jugador_apellidos=$fila_jugador["apellidos"];
$jugador_fecha_nac=$fila_jugador["fecha_nac"];
$jugador_nacionalidad=$fila_jugador["nacionalidad"];
$jugador_posicion=$fila_jugador["posicion"];
$jugador_perfil=$fila_jugador["perfil"];
$jugador_peso=$fila_jugador["peso"];
$jugador_estatura=$fila_jugador["estatura"];
$jugador_posicion_fija=$fila_jugador["posicion_fija"];
$jugador_club_actual=$fila_jugador["club_actual"];
$jugador_imagen=$fila_jugador["imagen"];
$jugador_imagen_carpeta=$fila_jugador["imagen_carpeta"];

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

        <!-- GALERIA DE JUGADOR -->
        <link rel="stylesheet" href="libs/swipe-effect-slider/js/pe.kenburns/themes/default/skin.min.css" />
        <link rel="stylesheet" href="libs/swipe-effect-slider/css/prettyPhoto.css" />
        <script src="libs/swipe-effect-slider/js/jquery-1.8.3.min.js"></script>
        <script src="libs/swipe-effect-slider/js/pe.kenburns/jquery.pixelentity.kenburnsSlider.min.js"></script>
        <script src="libs/swipe-effect-slider/js/jquery.prettyPhoto.min.js"></script>

        <script>
            var jGalJug = jQuery.noConflict();
            var jugador = <?php echo $id_jugador; ?>;

            jGalJug(document).on("ready", startJugador);
            jGalJug(document).on("ready", startJugadorPos);

            function startJugador(){
                jGalJug(".info-jugador-nwder .menu ul li a").on("click", clickJugadorOpc);
            }

            function startJugadorPos(){
                jGalJug.ajax({
                    url: "jugador-datos.php", 
                    data: {tipo: "posicion", jugador: jugador},
                    type: "POST",
                    success: function(data){
                        jGalJug("section.datos").html(data);
                        jGalJug(".info-jugador-nwder .menu ul li a#posicion").addClass("active");
                    }
                });
            }

            function clickJugadorOpc(datos){
                jGalJug(".info-jugador-nwder .menu ul li a").removeClass("active");
                var tipo = datos.currentTarget.id;
                jGalJug(".info-jugador-nwder .menu ul li a#"+tipo).addClass("active");
                jGalJug.ajax({
                    url: "jugador-datos.php", 
                    data: {tipo: tipo, jugador: jugador},
                    type: "POST",
                    success: function(data){
                        jGalJug("section.datos").html(data);
                        jGalJug(".info-jugador-nwder .menu ul li a#"+tipo).addClass("active");
                        jGalJug(document).on("ready", startJugadorGal(jGalJug));
                        jGalJug(".videos .items article a").on("click", clickJugadorVideo);
                    }
                });
            }

            function clickJugadorVideo(datos){
                var vid = datos.currentTarget.id;
                jGalJug(".videos .items article a").removeClass("active");
                jGalJug(".videos .select iframe").attr("src", "http://www.youtube.com/embed/"+vid+"?rel=0");
                jGalJug(".videos .items article a#"+vid).addClass("active");
            }

            function startJugadorGal(datoJQ){
                datoJQ("a[rel^='prettyPhoto']").prettyPhoto();
                datoJQ(".peKbGallery").peKenburnsSlider();
            }
        
        </script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                
                <?php require_once("w-header.php"); ?>

            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <section id="main-contenido">

                    <?php require_once("w-icons.php"); ?>

                    <section id="news">
                        
                        <section id="nwizq" class="info-jugador-nwizq">
                            
                            <h2><?php echo $jugador_nombre." ".$jugador_apellidos; ?></h2>

                            <div>
                                <img src="upload/<?php echo $jugador_imagen_carpeta."thumb/".$jugador_imagen; ?>" 
                                alt="<?php echo $jugador_nombre." ".$jugador_apellidos; ?>">
                            </div>

                            <table class="jugador-datos">
                                <tr>
                                    <td class="titulo">Nombre:</td>
                                    <td><?php echo $jugador_nombre; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Apellidos:</td>
                                    <td><?php echo $jugador_apellidos; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Fecha de Nac.:</td>
                                    <td><?php echo $jugador_fecha_nac; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Nacionalidad:</td>
                                    <td><?php echo $jugador_nacionalidad; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Posición:</td>
                                    <td><?php echo $jugador_posicion; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Perfil:</td>
                                    <td><?php echo $jugador_perfil; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Peso:</td>
                                    <td><?php echo $jugador_peso; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Estatura:</td>
                                    <td><?php echo $jugador_estatura; ?></td>
                                </tr>
                                <tr>
                                    <td class="titulo">Club Actual:</td>
                                    <td><?php echo $jugador_club_actual; ?></td>
                                </tr>
                            </table>

                        </section>

                        <section id="nwder" class="info-jugador-nwder">
                            
                            <section class="menu">
                                <ul>
                                    <li><a id="posicion" href="javascript:;" class="active">Posición</a></li>
                                    <li><a id="galeria" href="javascript:;">Galería</a></li>
                                    <li><a id="videos" href="javascript:;">Videos</a></li>
                                    <li><a id="clubes" href="javascript:;">Clubes</a></li>
                                </ul>
                            </section>

                            <section class="datos"></section>

                        </section>

                    </section>

                </section>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

        <?php require_once("w-footer.php"); ?>

    </body>
</html>
    