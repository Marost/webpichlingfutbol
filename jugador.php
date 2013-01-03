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
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50dcdc400c54dc87"></script>

        <!-- GALERIA DE JUGADOR -->
        <link rel="stylesheet" href="libs/swipe-effect-slider/js/pe.kenburns/themes/default/skin.min.css" />
        <link rel="stylesheet" href="libs/swipe-effect-slider/css/prettyPhoto.css" />
        <script src="libs/swipe-effect-slider/js/jquery-1.8.3.min.js"></script>
        <script src="libs/swipe-effect-slider/js/pe.kenburns/jquery.pixelentity.kenburnsSlider.min.js"></script>
        <script src="libs/swipe-effect-slider/js/jquery.prettyPhoto.min.js"></script>

        <script>
            var jGalJug = jQuery.noConflict();

            jGalJug(document).on("ready", startJugador);
            jGalJug(document).on("ready", startJugadorPos);

            function startJugador(){
                jGalJug(".info-jugador-nwder .menu ul li a").on("click", clickJugadorOpc);
                jGalJug(".videos .items article a").on("click", clickJugadorVideo);
            }

            function startJugadorPos(){
                jGalJug.ajax({
                    url: "jugador-datos.php", 
                    data: {tipo:"posicion"},
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
                    data: {tipo: tipo},
                    type: "POST",
                    success: function(data){
                        jGalJug("section.datos").html(data);
                        jGalJug(".info-jugador-nwder .menu ul li a#"+tipo).addClass("active");
                        jGalJug(document).on("ready", startJugadorGal(jGalJug));
                    }
                });
            }

            function clickJugadorVideo(datos){
                var dato = datos.currentTarget.id;
                jGalJug(".video .select iframe").attr("src", "http://www.youtube-nocookie.com/embed/"+dato+"?rel=0");
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

                    <section id="main-cont-icons" class="mci-interior">

                        <div id="icons-lista">

                            <ul>
                                <li>
                                    <a id="enl-lista-jugadores" href="javascript:;">Jugadores</a>
                                </li>
                                <li>
                                    <a id="enl-lista-entrevista" href="javascript:;">Entrevista</a>
                                </li>
                                <li class="last">
                                    <a id="enl-lista-galeria" href="javascript:;">Galería</a>
                                </li>
                            </ul>

                        </div>

                        <div id="icons-contenido">

                            <img id="progressbar" src="imagenes/progressbar.gif" width="220" height="19" class="ocultar">

                            <a href="javascript:;" id="cerrar-contenido" class="ocultar">
                                <img src="imagenes/icon-cerrar.png" width="970" height="28">
                            </a>

                            <div id="lista-jugadores" class="ic-contenido">

                                <aside>
                                    <h3>Arqueros</h3>
                                    <ul>
                                        <li><a href="">Cisneros, Jesús</a></li>
                                        <li><a href="">Goyoneche, Juan</a></li>
                                        <li><a href="">Guevara, Fisher</a></li>
                                        <li><a href="">Pinto, Joel</a></li>
                                        <li><a href="">Rodriguez, Leonardo</a></li>
                                        <li><a href="">Romucho, Jefferson</a></li>
                                        <li><a href="">Rosales, Exar</a></li>
                                    </ul>
                                </aside>

                                <aside>
                                    <h3>Defensas Centrales</h3>
                                    <ul>
                                        <li><a href="">Canova, Jose</a></li>
                                        <li><a href="">Lojas, Juan Diego</a></li>
                                        <li><a href="">Romero, Luis</a></li>
                                        <li><a href="">Solis, Carlos</a></li>
                                    </ul>
                                </aside>

                                <aside>
                                    <h3>Marcadores Izquierdos</h3>
                                    <ul>
                                        <li><a href="">Chumpitaz, Javier</a></li>
                                        <li><a href="">Garcia, Cristian</a></li>
                                        <li><a href="">Moisela, Jose</a></li>
                                        <li><a href="">Ojeda, Luis Roman</a></li>
                                        <li><a href="">Reyes, Jeickson</a></li>
                                    </ul>
                                </aside>

                                <aside>
                                    <h3>Marcadores Derechos</h3>
                                    <ul>
                                        <li><a href="">Arce, Juan</a></li>
                                        <li><a href="">Cancar, Jean Pierre</a></li>
                                        <li><a href="">Llanos, Miguel Angel</a></li>
                                        <li><a href="">Lopez, Andres</a></li>
                                    </ul>
                                </aside>

                                <aside>
                                    <h3>Volantes Contencion</h3>
                                    <ul>
                                        <li><a href="">Anicama, Saul</a></li>
                                        <li><a href="">Casas, Yancarlo</a></li>
                                        <li><a href="">Corcuera, Jose</a></li>
                                        <li><a href="">Fuentes, Jean Pierre</a></li>
                                        <li><a href="">Linares, Jaime</a></li>
                                        <li><a href="">Lizarbe, Antonio</a></li>
                                        <li><a href="">Quintanilla, Hector</a></li>
                                        <li><a href="">Santamaria, Anderson</a></li>
                                        <li><a href="">Seminario, Crifford</a></li>
                                    </ul>
                                </aside>

                                <aside>
                                    <h3>Volantes Mixtos</h3>
                                    <ul>
                                        <li><a href="">Morales, Juan</a></li>
                                        <li><a href="">Rivas, Jose</a></li>
                                        <li><a href="">Salazar, Ryan</a></li>
                                        <li><a href="">Vilchez, Oscar</a></li>
                                    </ul>
                                </aside>

                                <aside>
                                    <h3>Volantes Creación</h3>
                                    <ul>
                                        <li><a href="">Aliaga, Romario</a></li>
                                        <li><a href="">Chavez, Jesus</a></li>
                                        <li><a href="">Elias, Carlos</a></li>
                                        <li><a href="">Gomez, Rai</a></li>
                                        <li><a href="">Landauri, Julio</a></li>
                                        <li><a href="">Mariño, Juan Carlos</a></li>
                                        <li><a href="">Sheput, Renzo</a></li>
                                    </ul>
                                </aside>

                                <aside>
                                    <h3>Delanteros</h3>
                                    <ul>
                                        <li><a href="">Ascoy, Pedro</a></li>
                                        <li><a href="">Carranza, Christian</a></li>
                                        <li><a href="">Ibarra, Sergio</a></li>
                                        <li><a href="">Leiva, Jorge</a></li>
                                        <li><a href="">Lozada, Jorge</a></li>
                                        <li><a href="">Perez, Ricky</a></li>
                                        <li><a href="">Recalde, Francesco</a></li>
                                    </ul>
                                </aside>

                                <div>
                                    
                                </div>

                            </div>

                            <div id="lista-entrevista" class="ic-contenido">

                                <h2>Pedro Ascoy</h2>

                                <p style="text-align:center;">
                                <img src="imagenes/upload/pedro-ascoy.jpg" width="450" height="300"></p>

                                <p>En diálogo con Ovación Digital, Pedro Ascoy se mostró muy satisfecho con el presente que viene teniendo con Manta de Ecuador, en donde el fin de semana anotó su primer gol. En esta entrevista, el Burrito no ocultó su tristeza porque le hubiera gustado vivir esta experiencia un poco más joven y dijo sin pelos en la lengua que no entiende por qué Sergio Markarián nunca lo tomó en cuenta para la Selección.</p>

                                <p><strong>- Hasta que por fin se te abrió el arco...</strong></p>
                                <p>- Sí, demoró un poco, pero tengo la tranquilidad que vengo haciendo bien las cosas en Manta. Ahora tengo que seguir trabajando fuerte para seguir gozando de la confianza del técnico.</p>
                                 
                                <p><strong>- En Manta comenzaste como titular, pero luego el técnico te utilizaba como pieza de recambio, ¿por algo en especial?</strong></p>
                                <p>- No, simplemente fueron por disposiciones tácticas. Sucede que el 'profe' elige a los jugadores dependiendo de rival, pero lo importante que cuando me toma en cuenta trato de no desperdiciar mi oportunidad. Por ejemplo, ante Independiente de Terán ingresé y aseguré el triunfo.</p>
                                 
                                <p><strong>- En el gol que anotaste, el narrador se lo asignó a otro jugador...</strong></p>
                                <p>- (Risas) Sí, me confundió con otro jugador con quien me parezco mucho, incluso este compañero se abrazó con el asistente técnico y eso terminó por confundirlo.</p>
                                 
                                <p><strong>- ¿En qué posición vienes jugando?</strong></p>
                                <p>- Como volante por izquierda, como delantero por los costados..., yo realmente me ajusto a lo que me diga el entrenador.</p>
                                 
                                <p><strong>- ¿Qué torneo es más competitivo: el peruano o ecuatoriano?</strong></p>
                                <p>- Sinceramente me quedo con el ecuatoriano, porque casi todos los equipos tienen saneadas sus economías, los sueldos son buenos y, sobre todo, pagan puntual.</p>
                                 
                                <p><strong>- Y en la parte futbolística...</strong></p>
                                <p>- También. Acá se juega con mayor fuerza y dinámica, no es fácil acoplarte al fútbol ecuatoriano porque se juega mucho en ciudades de altura.</p>

                                <p><strong>- Pero, tú ya estás acoplado...</strong></p>
                                <p>- Sí, yo me siento muy feliz porque acá sigo creciendo como profesoional, aunque triste a la vez porque me hubiera gustado vivir esta experiencia más joven. Por lo demás, esta ciudad es muy parecida a Chiclayo, hay playa, sol y su gente es muy buena.</p>
                                 
                                <p><strong>- ¿A qué apunta Manta?</strong></p>
                                <p>- A seguir siendo protagonista en el campeonato, estamos sólo a cuatro puntos del puntero que es Emelec. La consigna es terminar entre los seis primeros para pelear también un cupo a un torneo internacional y creo que equipo tenemos para lograrlo. Ahora tenemos que ir a Ambato y esperamos sacar un buen resultado.</p>
                                 
                                <p><strong>- El tema de llegar a la Selección peruana sigue presente...</strong></p>
                                <p>- Eso lo veo cada vez más lejano.</p>
                                 
                                <p><strong>- ¿Por qué lo dices?</strong></p>
                                <p>- Porque cuando pude ser convocado, no me dieron la oportunidad. Recuerdo que hice una buena Copa Libertadores, jugué bien con Juan Aurich, pero el profesor Markarián nunca me tomó en cuenta. No me explico por qué, incluso mi amigo Chiroque y los diferentes entrenadores que pasaron por Aurich, como Juan Reynoso, me decían que Markarián me iba a llamar, pero eso jamás ocurrió. No sé qué pasaba por la cabeza de Markarián. Por ello, le deseo lo mejor a todos los que llegan a ser convocados, porque todos no gozan de ese privilegio. Yo simplemente trabajaré fuerte en mi equipo para seguir creciendo como profesional y a la distancia le daré las vibras positivas para que le vaya bien a la Selección peruana.</p>
                                 
                                <p>Fuente: OVACION</p>

                            </div>

                        </div>

                    </section>

                    <section id="news">
                        
                        <section id="nwizq" class="info-jugador-nwizq">
                            
                            <h2>Jesús Cisneros</h2>

                            <img src="" width="300" height="280" alt="Jesús Cisneros" title="Jesús Cisneros">

                            <table class="jugador-datos">
                                <tr>
                                    <td class="titulo">Nombre:</td>
                                    <td>Jesús</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Apellidos:</td>
                                    <td>Cisneros</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Fecha de Nac.:</td>
                                    <td>18 de Marzo de 1978</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Nacionalidad:</td>
                                    <td>Peruano</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Posición:</td>
                                    <td>Arquero</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Perfil:</td>
                                    <td>Derecha</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Peso:</td>
                                    <td>80 Kg.</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Estatura:</td>
                                    <td>1.83 mt</td>
                                </tr>
                                <tr>
                                    <td class="titulo">Club Actual:</td>
                                    <td>CNI</td>
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

        <div class="footer-container">
            <footer class="wrapper">
                <p>Cristobal de Peralta N° 110 - Oficina 1002 - Santiago de Surco</p>
                <p>Telefono: 4370297 / 4376855</p>
            </footer>
        </div>

    </body>
</html>
    