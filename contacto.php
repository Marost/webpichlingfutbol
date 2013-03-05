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

        <?php require_once("w-script.php"); ?>

        <!-- FORMULARIO -->
        <link rel="stylesheet" href="libs/form-css3/contact/light/contact-light.css" />
        <!--[if lt IE 9]>
                <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <!--<script src="libs/form-css3/contact/light/placeholder.js"></script>-->
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

        <!-- ENVIO DE ARCHIVOS -->
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="libs/form-contacto/envio.js"></script>

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
                            <p> </p>

                            <section class="contacto-mapa">

                                <h2>Envianos un mensaje</h2>

                                <form id="form-contacto" class="contact-form" method="post">

                                    <label for="nombre">Nombre <span>(requerido)</span></label>
                                    <input type="text" name="nombre" id="nombre" class="form-input" required />
                                    
                                    <label for="email">Email <span>(requerido)</span></label>
                                    <input type="email" name="email" id="email" class="form-input" required />
                                    
                                    <label for="mensaje">Mensaje <span>(requerido)</span></label>
                                    <textarea name="mensaje" id="mensaje" class="form-input" required></textarea>
                                    
                                    <button class="form-btn" id="btn-enviar">Enviar mensaje</button>
                                    <img class="ocultar" id="form-progressbar" src="/imagenes/form-progressbar.gif" width="32" height="32" alt="Cargando...">

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
                                            <p>(511) 344-2459</p>
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