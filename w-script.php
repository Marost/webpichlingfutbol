<!-- ESTILOS -->
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/estilos.css">

<!-- FUENTE -->
<link href='http://fonts.googleapis.com/css?family=Homenaje' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- MODERNIZR -->
<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

<!-- BANNER OFICINA -->
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

<!-- BANNER JUGADORES -->
<link href="libs/allinone_banner/sidebar/allinone_bannerRotator.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="libs/allinone_banner/sidebar/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="libs/allinone_banner/sidebar/js/allinone_bannerRotator.js" type="text/javascript" charset="utf-8"></script>
<!--[if IE]><script src="/libs/allinone_banner/sidebar/js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<script>
    var jBanJug=jQuery.noConflict();

    jBanJug(document).ready(function() {
        jBanJug('#slider').allinone_bannerRotator({
            skin: 'universal',
            width: 580,
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