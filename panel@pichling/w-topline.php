<div id="top">
    <div class="wrapper">
        <a href="<?php echo $url_admin; ?>index.php" title="" class="logo"><img src="<?php echo $url_admin; ?>images/logo.png" alt="" /></a>
        
        <!-- Right top nav -->
        <div class="topNav">
            <a title="" class="iButton"></a>
        </div>
        
        <!-- Responsive nav -->
        <ul class="altMenu">
            <li><a href="<?php echo $url_admin; ?>index.html" title="">Dashboard</a></li>
            <li><a href="<?php echo $url_admin; ?>entrevistas/lista.php" title="" class="exp">Entrevistas</a>
                <ul>
                    <li><a href="<?php echo $url_admin; ?>entrevistas/lista.php">Lista</a></li>
                    <li><a href="<?php echo $url_admin; ?>entrevistas/f-agregar.php">Agregar</a></li>
                </ul>
            </li>

            <li><a href="<?php echo $url_admin; ?>noticias/lista.php" title="" class="exp">Noticias</a>
                <ul>
                    <li><a href="<?php echo $url_admin; ?>noticias/lista.php">Lista</a></li>
                    <li><a href="<?php echo $url_admin; ?>noticias/f-agregar.php">Agregar</a></li>
                </ul>
            </li>

            <li><a href="<?php echo $url_admin; ?>jugadores/lista.php" title="" class="exp" id="current">Jugadores</a>
                <ul>
                    <li><a href="<?php echo $url_admin; ?>jugadores/lista.php" class="active">Jugadores</a></li>
                    <li><a href="<?php echo $url_admin; ?>posiciones/lista.php">Posiciones</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>