<div class="mainNav">
    <div class="user">
        <a title="" class="leftUserDrop">
            <img src="<?php echo $url_admin; ?>images/user.png" alt="" /></a><span>Eugene</span>
    </div>
    
    <!-- Main nav -->
    <ul class="nav">
        <li><a href="<?php echo $url_admin; ?>index.html" title="">
            <img src="<?php echo $url_admin; ?>images/icons/mainnav/dashboard.png" alt="" /><span>Dashboard</span></a></li>
        
        <li><a href="<?php echo $url_admin; ?>entrevistas/lista.php" title="">
            <img src="<?php echo $url_admin; ?>images/icons/mainnav/tables.png" alt="" /><span>Entrevistas</span></a>
            <ul>
                <li><a href="<?php echo $url_admin; ?>entrevistas/lista.php" title=""><span class="icol-frames"></span>Lista</a></li>
                <li><a href="<?php echo $url_admin; ?>entrevistas/f-agregar.php" title=""><span class="icol-create"></span>Agregar</a></li>
            </ul>
        </li>

        <li><a href="<?php echo $url_admin; ?>noticias/lista.php" title="">
            <img src="<?php echo $url_admin; ?>images/icons/mainnav/tables.png" alt="" /><span>Noticias</span></a>
            <ul>
                <li><a href="<?php echo $url_admin; ?>noticias/lista.php" title=""><span class="icol-frames"></span>Lista</a></li>
                <li><a href="<?php echo $url_admin; ?>noticias/f-agregar.php" title=""><span class="icol-create"></span>Agregar</a></li>
            </ul>
        </li>

        <li><a href="<?php echo $url_admin; ?>jugadores/lista.php" title="" class="active">
            <img src="<?php echo $url_admin; ?>images/icons/mainnav/tables.png" alt="" /><span>Jugadores</span></a>
            <ul>
                <li><a href="<?php echo $url_admin; ?>jugadores/lista.php" title=""><span class="icol-frames"></span>Jugadores</a></li>
                <li><a href="<?php echo $url_admin; ?>posiciones/lista.php" title=""><span class="icol-create"></span>Posiciones</a></li>
            </ul>
        </li>
    </ul>
</div>