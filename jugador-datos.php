<?php
/* LIBRERIA DE CONEXION A YOUTUBE */
include("libs/ssdtube/SSDTube.php");

/* VARIABLES DE POST */
$tipo=$_POST["tipo"];

?>

<?php if($tipo=="posicion"){ ?>
<div class="posicion">
    <div id="arquero"></div>
    <div id="lateral_derecho"></div>
    <div id="defensa_central_derecha"></div>
    <div id="defensa_central_izquierda"></div>
    <div id="lateral_izquierdo"></div>
    <div id="volante_derecho"></div>
    <div id="volante_central"></div>
    <div id="volante_izquierdo"></div>
    <div id="extremo_derecho"></div>
    <div id="delantero"></div>
    <div id="extremo_izquierdo"></div>
    <img src="imagenes/jugador-cancha.jpg" width="600" height="430">
</div>                                
<?php } ?>

<?php if($tipo=="galeria"){ ?>
<div class="galeria">

    <div class="slider noShadow">
        <a rel="prettyPhoto" href="imagenes/upload/galeria1.jpg">
            <img class="peKbGallery" data-delay="5" src="imagenes/upload/galeria1.jpg" /></a>
    </div>
            
            
    <div class="slider noShadow">
        <a rel="prettyPhoto" href="imagenes/upload/galeria2.jpg">
            <img class="peKbGallery" data-delay="5" src="imagenes/upload/galeria2.jpg" /></a>
    </div>
            
            
    <div class="slider noShadow">
        <a rel="prettyPhoto" href="imagenes/upload/galeria3.jpg">
            <img class="peKbGallery" data-delay="5" src="imagenes/upload/galeria3.jpg" /></a>
    </div>
    
</div>
<?php } ?>

<?php if($tipo=="videos"){ ?>
<div class="videos">

    <div class="select">
        <iframe width="600" height="350" src="http://www.youtube.com/embed/7EHAEX0EpYU?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="items">

        <article>
            <a id="NTp-bcpBsDs" href="javascript:;">
                <img class="play" src="imagenes/icon-play.png" alt="Play" width="48" height="48">
                <?php $youtube_ramonrodriguez1 = new SSDTube(); $youtube_ramonrodriguez1->identify("http://www.youtube.com/watch?v=NTp-bcpBsDs", true); ?>
                <img src="<?php echo $youtube_ramonrodriguez1->thumbnail_1_url; ?>" width="120" height="90" alt="Edson Uribe" /></a>
        </article>

        <article>
            <a id="7EHAEX0EpYU" href="javascript:;">
                <img class="play" src="imagenes/icon-play.png" alt="Play" width="48" height="48">
                <?php $youtube_ramonrodriguez2 = new SSDTube(); $youtube_ramonrodriguez2->identify("http://www.youtube.com/watch?v=7EHAEX0EpYU", true); ?>
                <img src="<?php echo $youtube_ramonrodriguez2->thumbnail_1_url; ?>" width="120" height="90" alt="Edson Uribe" /></a>
        </article>

    </div>

</div>
<?php  }?>