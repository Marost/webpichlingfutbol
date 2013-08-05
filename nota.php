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

//URL
$url_final=$web."nota/".$nota_id."-".$nota_url;
$url_imagen=$web."upload/".$nota_imagen_carpeta."".$nota_imagen;

//MAS NOTICIAS
$rst_noticias=mysql_query("SELECT * FROM pf_noticias WHERE id<>$url_id AND publicar=1 AND fecha_publicacion<='$fechaActual' ORDER BY fecha_publicacion DESC", $conexion);

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
        <base href="<?php echo $web; ?>">

        <!-- OPEN GRAPH -->
        <meta property="og:title" content="<?php echo $nota_titulo; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $url_final; ?>" />
        <meta property="og:image" content="<?php echo $url_imagen; ?>" />
        <meta property="og:site_name" content="<?php echo $web_nombre; ?>" />
        <meta property="og:description" content="<?php echo soloDescripcion($nota_contenido); ?>" />
        <meta property="fb:admins" content="1376286793" />

        <?php require_once("w-script.php"); ?>
        
        <!-- ADDTHIS -->
        <script>var addthis_config = {"data_track_addressbar":true};</script>
        <script>var addthis_config = {"data_track_clickback":false}</script>
        <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50dcdc400c54dc87"></script>

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
                            <h2><?php echo $nota_titulo; ?></h2>
                            
                            <div id="nwizq-img">
                                <img width="620" src="upload/<?php echo $nota_imagen_carpeta."".$nota_imagen; ?>" alt="<?php echo $nota_titulo; ?>">
                            </div>
                            
                            <div class="addthis_toolbox addthis_default_style ">
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                <a class="addthis_button_tweet" tw:count="horizontal"></a>
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="120"></a>
                                <a class="addthis_button_pinterest_pinit" 
                                pi:pinit:url="<?php echo $web; ?>nota/<?php echo $nota_id."-".$nota_url; ?>" 
                                pi:pinit:media="<?php echo $web; ?>upload/<?php echo $nota_imagen_carpeta."".$nota_imagen; ?>" 
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