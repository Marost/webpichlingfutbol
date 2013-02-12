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
        <title>Contacto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <base href="<?php echo $web; ?>">

        <!-- ESTILOS -->
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/icons.css">

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
        <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
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
        <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
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

        <!-- FORMULARIO -->
        <link rel="stylesheet" href="libs/form-css3/contact/light/contact-light.css" />
        <!--[if lt IE 9]>
                <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="libs/form-css3/contact/light/placeholder.js"></script>
        <script>
            var jForm = jQuery.noConflict();
            jForm(function(){
                if( jForm.browser.msie && jForm.browser.version <= 9 ) {
                    jForm('html').addClass('ie');
                    
                    jForm('form.msgtop.nolabel').find('p').append('<span class="before"/>');
                }
                
                // add 'invalid' class when HTML5 form valiation fails
                if( !jForm.browser.firefox ) {
                    jForm('form.contact-form').each(function(){
                        jForm(this).find('input.form-input').bind('invalid', function(){
                            jForm(this).addClass('invalid');
                        });
                    });
                }
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

                            <h2>Contacto</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer velit enim, consequat pellentesque pellentesque ac, rutrum sed enim. Pellentesque interdum pharetra urna, vitae dapibus metus vulputate sed.</p>

                            <section class="contacto-mapa">

                                <h2>Envianos un mensaje</h2>

                                <form action="" class="contact-form" method="POST">

                                    <label for="name">Nombre <span>(requerido)</span></label>
                                    <input type="text" name="name" class="form-input" required />
                                    
                                    <label for="email">Email <span>(requerido)</span></label>
                                    <input type="email" name="email" class="form-input" required />
                                    
                                    <label for="message">Mensaje <span>(requerido)</span></label>
                                    <textarea name="message" class="form-input" required></textarea>
                                    
                                    <input class="form-btn" type="submit" value="Enviar mensaje" />   

                                </form>
                                
                            </section>

                            <section class="contacto-mapa">

                                <h2>Encuentranos en:</h2>

                                <iframe width="495" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.pe/maps/ms?msa=0&amp;msid=217338416310728973847.0004c1d8fdb4ead94c443&amp;ie=UTF8&amp;t=m&amp;ll=-12.107925,-76.969496&amp;spn=0.003147,0.0053&amp;z=17&amp;output=embed"></iframe>

                                <div>
                                    <ul>
                                        <li>
                                            <span class="icon icon-home"></span>
                                            <p>Av. Primavera 1796 - Torre Alpha Of. 701 - Surco</p>
                                        </li>

                                        <li>
                                            <span class="icon icon-phone"></span>
                                            <p>(511) 437-6855</p>
                                        </li>

                                        <li>
                                            <span class="icon icon-email"></span>
                                            <p>contacto@pichlingfutbol.com</p>
                                        </li>
                                    </ul>
                                </div>

                            </section>

                        </section>

                    </section>

                </section>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

        <?php require_once("w-footer.php"); ?>

    </body>
</html>