<?php $tipo=$_POST["tipo"]; ?>

<?php if($tipo=="posicion"){ ?>
<div class="posicion">
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

    <iframe width="600" height="450" src="http://www.youtube-nocookie.com/embed/7EHAEX0EpYU?rel=0" frameborder="0" allowfullscreen></iframe>

</div>
<?php  ?>