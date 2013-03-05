<?php
//POSICION DE JUGADORES
$rst_posicion=mysql_query("SELECT * FROM pf_posicion_fija ORDER BY id ASC;", $conexion);

//ENTREVISTA DEL MES
$rst_entrevista=mysql_query("SELECT * FROM pf_entrevista WHERE fecha_publicacion<='$fechaActual' AND publicar=1 ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_entrevista=mysql_fetch_array($rst_entrevista);
$entrevista_titulo=$fila_entrevista["titulo"];
$entrevista_contenido=$fila_entrevista["contenido"];
$entrevista_imagen=$fila_entrevista["imagen"];
$entrevista_imagen_carpeta=$fila_entrevista["imagen_carpeta"];

?>
<section id="main-cont-icons">

    <div id="icons-lista">

        <ul>
            <li>
                <a id="enl-lista-jugadores" href="javascript:;">Jugadores</a>
            </li>
            <li>
                <a id="enl-lista-entrevista" href="javascript:;">Entrevistas</a>
            </li>
            <li class="last">
                <a id="enl-lista-galeria" href="videos">Galería</a>
            </li>
        </ul>

    </div>

    <div id="icons-contenido">

        <img id="progressbar" src="imagenes/progressbar.gif" width="220" height="19" class="ocultar">

        <a href="javascript:;" id="cerrar-contenido" class="ocultar">
            <img src="imagenes/icon-cerrar.png" width="970" height="28">
        </a>

        <div id="lista-jugadores" class="ic-contenido">

            <?php while($fila_posicion=mysql_fetch_array($rst_posicion)){
                $posicion_id=$fila_posicion["id"];
                $posicion_titulo=$fila_posicion["posicion"];
                
                //LISTA DE JUGADORES
                $rst_jugadores=mysql_query("SELECT * FROM pf_jugadores WHERE posicion_fija=$posicion_id AND publicar=1 ORDER BY apellidos ASC;", $conexion);
            ?>

            <aside>
                <h3><?php echo $posicion_titulo; ?></h3>
                <ul>
                    <?php while($fila_jugadores=mysql_fetch_array($rst_jugadores)){
                        $jugadores_id=$fila_jugadores["id"];
                        $jugadores_url=$fila_jugadores["url"];
                        $jugadores_nombre=$fila_jugadores["nombre"];
                        $jugadores_apellidos=$fila_jugadores["apellidos"];
                    ?>
                    <li><a href="jugador/<?php echo $jugadores_id."-".$jugadores_url; ?>">
                        <?php echo $jugadores_apellidos.", ".$jugadores_nombre; ?></a></li>
                    <?php } ?>
                </ul>
            </aside>

            <?php } ?>

        </div>

        <div id="lista-entrevista" class="ic-contenido">                                

            <!-- <h2>?php echo $entrevista_titulo; ?></h2>

            <p style="text-align:center;">
                <img src="upload/?php echo $entrevista_imagen_carpeta."".$entrevista_imagen; ?>" 
                alt="?php echo $entrevista_titulo; ?>">
            </p>

            ?php echo $entrevista_contenido; ?> -->

            <h2 style="text-align: center;">¡Pronto nuevas entrevistas!</h2>

        </div>

    </div>

</section>