<?php
/* LIBRERIA DE CONEXION A YOUTUBE */
include("libs/ssdtube/SSDTube.php");

/* VARIABLES DE POST */
$tipo=$_POST["tipo"];
$jugador=$_POST["jugador"];

//POSICION FIJA EN LA CANCHA
$rst_poscancha=mysql_query("SELECT * FROM pf_posicion_cancha WHERE jugador=$jugador", $conexion);
$fila_poscancha=mysql_fetch_array($rst_poscancha);

//VARIABLES
$poscancha_arquero=$fila_poscancha["arquero"];
$poscancha_lateral_derecho=$fila_poscancha["lateral_derecho"];
$poscancha_back_central_derecho=$fila_poscancha["back_central_derecho"];
$poscancha_back_central_izquierdo=$fila_poscancha["back_central_izquierdo"];
$poscancha_lateral_izquierdo=$fila_poscancha["lateral_izquierdo"];
$poscancha_volante_derecho=$fila_poscancha["volante_derecho"];
$poscancha_volante_central=$fila_poscancha["volante_central"];
$poscancha_volante_izquierdo=$fila_poscancha["volante_izquierdo"];
$poscancha_extremo_derecho=$fila_poscancha["extremo_derecho"];
$poscancha_delantero=$fila_poscancha["delantero"];
$poscancha_extremo_izquierdo=$fila_poscancha["extremo_izquierdo"];

?>

<?php if($tipo=="posicion"){ ?>
<div class="posicion">
    <?php if ($poscancha_arquero==1){ ?>                <div id="arquero"></div>                    <?php } ?>
    <?php if ($poscancha_lateral_derecho==1){ ?>        <div id="lateral_derecho"></div>            <?php } ?>
    <?php if ($poscancha_back_central_derecho==1){ ?>   <div id="defensa_central_derecha"></div>    <?php } ?>
    <?php if ($poscancha_back_central_izquierdo==1){ ?> <div id="defensa_central_izquierda"></div>  <?php } ?>
    <?php if ($poscancha_lateral_izquierdo==1){ ?>      <div id="lateral_izquierdo"></div>          <?php } ?>
    <?php if ($poscancha_volante_derecho==1){ ?>        <div id="volante_derecho"></div>            <?php } ?>
    <?php if ($poscancha_volante_central==1){ ?>        <div id="volante_central"></div>            <?php } ?>
    <?php if ($poscancha_volante_izquierdo==1){ ?>      <div id="volante_izquierdo"></div>          <?php } ?>
    <?php if ($poscancha_extremo_derecho==1){ ?>        <div id="extremo_derecho"></div>            <?php } ?>
    <?php if ($poscancha_delantero==1){ ?>              <div id="delantero"></div>                  <?php } ?>
    <?php if ($poscancha_extremo_izquierdo==1){ ?>      <div id="extremo_izquierdo"></div>          <?php } ?>
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
            <a id="7EHAEX0EpYU" href="javascript:;">
                <img class="play" src="imagenes/icon-play.png" alt="Play" width="48" height="48">
                <?php $youtube_ramonrodriguez2 = new SSDTube(); $youtube_ramonrodriguez2->identify("http://www.youtube.com/watch?v=7EHAEX0EpYU", true); ?>
                <img src="<?php echo $youtube_ramonrodriguez2->thumbnail_1_url; ?>" width="120" height="90" alt="Edson Uribe" /></a>
        </article>

    </div>

</div>
<?php  }?>