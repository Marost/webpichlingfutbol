<?php
require_once("panel@pichling/conexion/conexion.php");
require_once("panel@pichling/conexion/funciones.php");

//VARIABLES DE URL
$url_id=$_REQUEST["id"];

//MAS NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM pf_noticias WHERE fecha_publicacion<='$fechaActual' ORDER BY fecha_publicacion DESC", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Noticias</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <base href="<?php echo $web; ?>">

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

                <section id="main-contenido">

                    <?php require_once("w-icons.php"); ?>

                    <section id="news">
                        
                        <section id="nwizq">
                            
                            <h2>Noticias</h2>

                            <?php while($fila_noticias=mysql_fetch_array($rst_noticias)){
                                    $nota_id=$fila_noticias["id"];
                                    $nota_url=$fila_noticias["url"];
                                    $nota_titulo=$fila_noticias["titulo"];
                                    $nota_contenido=soloDescripcion($fila_noticias["contenido"]);
                                    $nota_imagen=$fila_noticias["imagen"];
                                    $nota_imagen_carpeta=$fila_noticias["imagen_carpeta"];
                            ?>
                            <article class="nota-item">

                                <div class="imagen">
                                    <img src="upload/<?php echo $nota_imagen_carpeta."thumb/".$nota_imagen; ?>" alt="<?php echo $nota_titulo; ?>">
                                </div>

                                <div class="datos">
                                    <h3><a href="nota/<?php echo $nota_id."-".$nota_url; ?>">
                                        <?php echo $nota_titulo; ?></a></h3>
                                    <?php echo $nota_contenido; ?>
                                </div>

                            </article>
                            <?php } ?>

                        </section>

                        <section id="nwder">
                            
                            <aside class="publicidad">
                                <script type="text/javascript"><!--
                                    google_ad_client = "ca-pub-3674889010429322";
                                    /* PR - 336x280 */
                                    google_ad_slot = "8453072747";
                                    google_ad_width = 336;
                                    google_ad_height = 280;
                                    //-->
                                    </script>
                                    <script type="text/javascript"
                                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                                </script>
                            </aside>

                        </section>

                    </section>

                </section>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

        <?php require_once("w-footer.php"); ?>

    </body>
</html>