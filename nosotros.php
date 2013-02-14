<?php
require_once("panel@pichling/conexion/conexion.php");
require_once("panel@pichling/conexion/funciones.php");

//NOSOTROS
$rst_nota=mysql_query("SELECT * FROM pf_nosotros ORDER BY fecha_publicacion DESC;", $conexion);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Nosotros</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <base href="<?php echo $web; ?>">

        <?php require_once("w-script.php"); ?>
        
        <!-- ALTO DE DIV -->
        <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
        <script type="text/javascript">
        var jald = jQuery.noConflict();

        function equalHeight(group) {
           tallest = 0;
           group.each(function() {
              thisHeight = jald(this).height();
              if(thisHeight > tallest) {
                 tallest = thisHeight;
              }
           });
           group.height(tallest);
        }

        jald(document).ready(function() {
           equalHeight(jald("article.team"));
        });

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
                        
                        <section id="nwizq" class="an100">

                            <section id="nosotros">

                                <article>
                                    <h3>Nosotros</h3>
                                    <p>Bienvenidos a la Pagina Web de Pichling Representaciones. Somos una empresa de representación de Jugadores y Técnicos de futbol, que trabaja con Agentes asociados en Argentina, Colombia y España. Caracterizados, todos, por la seriedad, confiabilidad y transparencia en sus operaciones. Esperamos que la información que mostramos sea de su interés y les sirvan como base para iniciar conversaciones sobre futuros negocios con nuestros representados.</p>
                                </article>

                                <blockquote>
                                    <h3>Misión</h3>
                                    <p>Buscar permanentemente el desarrollo personal de nuestros representados, base fundamental para el éxito deportivo.</p>
                                    <p>Trabajar para cubrir las expectativas  de forma profesional, honesta, responsable y realista.</p>
                                    <p>Negociar con las instituciones deportivas nacionales e internacionales transparentemente para lograr relaciones a largo plazo, teniendo la confianza como base  clave de nuestro trabajo.</p>
                                </blockquote>

                            </section>

                            <?php while($fila_nota=mysql_fetch_array($rst_nota)){
                                    $nota_titulo=$fila_nota["titulo"];
                                    $nota_contenido=$fila_nota["contenido"];
                                    $nota_imagen=$fila_nota["imagen"];
                                    $nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
                            ?>

                            <article class="team">

                                <div class="artsup">

                                    <div class="imagen">
                                        <img src="upload/<?php echo $nota_imagen_carpeta."".$nota_imagen; ?>" alt="<?php echo $nota_titulo; ?>">
                                    </div>

                                    <div class="datos">
                                        <h3><?php echo $nota_titulo; ?></h3>
                                    </div>

                                </div>

                                <div class="artinf">
                                    <?php echo $nota_contenido; ?>
                                </div>

                            </article>

                            <?php } ?>

                        </section>

                    </section>

                </section>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

        <?php require_once("w-footer.php"); ?>

    </body>
</html>