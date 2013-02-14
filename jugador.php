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

        <?php require_once("w-script.php"); ?>
        
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
    