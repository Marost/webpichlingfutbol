<?php
require_once("panel@pichling/conexion/conexion.php");
require_once("panel@pichling/conexion/funciones.php");

//NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM pf_noticias WHERE fecha_publicacion<='$fechaActual' ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);

//SLIDER
$rst_slider=mysql_query("SELECT * FROM pf_slider ORDER BY id DESC", $conexion);

//SLIDER DE OFICINA
$rst_slider_oficina=mysql_query("SELECT * FROM pf_slider_oficina ORDER BY id DESC", $conexion);

//VIDEO PRINCIPAL
$rst_videopr=mysql_query("SELECT * FROM pf_video_principal WHERE publicar=1 ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_videopr=mysql_fetch_array($rst_videopr);

//VARIABLES
$videopr_titulo=$fila_videopr["titulo"];
$videopr_video=$fila_videopr["youtube"];

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

        <!-- POPUP 
        <link href="libs/popup-reveal/reveal.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://code.jquery.com/jquery-1.6.min.js"></script>
        <script src="libs/popup-reveal/jquery.reveal.js"></script>
        <script>
            var jPopUp = jQuery.noConflict();
            jPopUp(document).ready(function(){
                jPopUp("#myModal").reveal({
                     animation: 'none',                   //fade, fadeAndPop, none
                     animationspeed: 300,                       //how fast animtions are
                     closeonbackgroundclick: true,              //if you click background will modal close?
                     dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
                });
            });
        </script>-->

        <?php require_once("w-script.php"); ?>

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

                <section id="main-slider">

                    <div id="slider" style="display:none;">
                        <ul class="allinone_bannerRotator_list">
                            <?php while($fila_slider=mysql_fetch_array($rst_slider)){
                                    $slider_imagen=$fila_slider["imagen"];
                                    $slider_imagen_carpeta=$fila_slider["imagen_carpeta"];
                            ?>
                            <li><img src="upload/<?php echo $slider_imagen_carpeta."".$slider_imagen; ?>" alt="" /></li>
                            <?php } ?>
                        </ul>            
                    </div>
                    
                    <div id="slider-oficina" style="display:none;">
                        <ul class="allinone_bannerRotator_list">
                            <?php while($fila_slider_oficina=mysql_fetch_array($rst_slider_oficina)){
                                    $slider_of_imagen=$fila_slider_oficina["imagen"];
                                    $slider_of_imagen_carpeta=$fila_slider_oficina["imagen_carpeta"];
                            ?>
                            <li><img src="upload/<?php echo $slider_of_imagen_carpeta."".$slider_of_imagen; ?>" alt="" /></li>
                            <?php } ?>
                        </ul>            
                    </div>

                </section>

                <section id="main-contenido">

                    <section id="main-cont-bienvenido">
                        <h2>Bienvenido</h2>
                        <p>Bienvenidos a la Pagina Web de Pichling Representaciones. Somos una empresa de representación de Jugadores y Técnicos de futbol, que trabaja con Agentes asociados en Chile, Argentina, Colombia e Israel. 
                            Caracterizados, todos, por la seriedad, confiabilidad y transparencia en sus operaciones.
                            Esperamos que la información que mostramos sea de su interés y les sirvan como base para iniciar conversaciones sobre futuros negocios con nuestros representados.</p>

                        <p>Muchas gracias por su visita y estamos a su disposición para cualquier consulta.</p>

                    </section>

                    <?php require_once("w-icons.php"); ?>

                    <section id="main-news">
                        
                        <section id="mnew-video">
                            <h2><?php echo $videopr_titulo; ?></h2>

                            <div>
                                <iframe width="455" height="256" src="http://www.youtube.com/embed/<?php echo $videopr_video; ?>?rel=0" 
                                frameborder="0" allowfullscreen></iframe>
                            </div>

                        </section>

                        <section id="mnew-noticias">
                            <h2>Noticias</h2>

                            <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
                                    $noticias_id=$fila_noticias["id"];
                                    $noticias_url=$fila_noticias["url"];
                                    $noticias_titulo=$fila_noticias["titulo"];
                                    $noticias_contenido=primerParrafo($fila_noticias["contenido"]);
                                    $noticias_imagen=$fila_noticias["imagen"];
                                    $noticias_imagen_carpeta=$fila_noticias["imagen_carpeta"];
                            ?>
                            <article>
                                <img width="125" height="125" src="upload/<?php echo $noticias_imagen_carpeta."thumb/".$noticias_imagen; ?>" alt="<?php echo $noticias_titulo; ?>">
                                <div>
                                    <h3><a href="nota/<?php echo $noticias_id."-".$noticias_url; ?>" title="<?php echo $noticias_titulo; ?>">
                                        <?php echo $noticias_titulo; ?></a></h3>
                                    <p><?php echo $noticias_contenido; ?>
                                </div>                                
                            </article>
                            <?php } ?>

                        </section>

                    </section>

                </section>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

        <?php require_once("w-footer.php"); ?>

        <!--
        <div id="myModal" data-reveal-id="myModal" data-animation="none" class="reveal-modal">
            <img src="imagenes/navidad-2013.jpg" alt="">
            <a class="close-reveal-modal">&#215;</a>
        </div>
        -->

    </body>
</html>
    