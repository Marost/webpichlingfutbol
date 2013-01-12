<?php 
//session_start();
require_once("../../conexion/conexion.php");
require_once("../../conexion/funciones.php");
//require_once("../../conexion/verificar_sesion.php");

//VARIABLES
$id_url=$_REQUEST["id"];

//EDITAR
$rst_nota=mysql_query("SELECT * FROM ".$tabla_suf."_jugadores WHERE id=$id_url;", $conexion);
$fila_nota=mysql_fetch_array($rst_nota);

//VARIABLES
$nota_nombre=$fila_nota["nombre"];
$nota_apellidos=$fila_nota["apellidos"];
$nota_fecha_nac=$fila_nota["fecha_nac"];
$nota_nacionalidad=$fila_nota["nacionalidad"];
$nota_posicion=$fila_nota["posicion"];
$nota_perfil=$fila_nota["perfil"];
$nota_peso=$fila_nota["peso"];
$nota_estatura=$fila_nota["estatura"];
$nota_club_actual=$fila_nota["club_actual"];
$nota_posicion_fija=$fila_nota["posicion_fija"];
$nota_publicar=$fila_nota["publicar"];
$nota_seleccion=$fila_nota["seleccion"];
$nota_imagen=$fila_nota["imagen"];
$nota_imagen_carpeta=$fila_nota["imagen_carpeta"];

//POSICION FIJA
$rst_posicion_fija=mysql_query("SELECT * FROM ".$tabla_suf."_posicion_fija ORDER BY posicion ASC;", $conexion);

//POSICION CANCHA
$rst_posicion_cancha=mysql_query("SELECT * FROM ".$tabla_suf."_posicion_cancha WHERE jugador=$id_url;", $conexion);
$fila_posicion_cancha=mysql_fetch_array($rst_posicion_cancha);

//VARIABLES
$cancha_arquero=$fila_posicion_cancha["arquero"];
$cancha_lateral_derecho=$fila_posicion_cancha["lateral_derecho"];
$cancha_back_derecho=$fila_posicion_cancha["back_central_derecho"];
$cancha_back_izquierdo=$fila_posicion_cancha["back_central_izquierdo"];
$cancha_defensa_central=$fila_posicion_cancha["defensa_central"];
$cancha_lateral_izquierdo=$fila_posicion_cancha["lateral_izquierdo"];
$cancha_volante_derecho=$fila_posicion_cancha["volante_derecho"];
$cancha_volante_central=$fila_posicion_cancha["volante_central"];
$cancha_volante_izquierdo=$fila_posicion_cancha["volante_izquierdo"];
$cancha_extremo_derecho=$fila_posicion_cancha["extremo_derecho"];
$cancha_delantero=$fila_posicion_cancha["delantero"];
$cancha_extremo_izquierdo=$fila_posicion_cancha["extremo_izquierdo"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Administrador</title>

<?php require_once("../../w-scripts.php"); ?>

</head>

<body>

<!-- Top line begins -->
<?php require_once("../../w-topline.php"); ?>
<!-- Top line ends -->


<!-- Sidebar begins -->
<div id="sidebar">
    
    <?php require_once("../../w-sidebarmenu.php"); ?>
    
    <!-- Secondary nav -->
    <div class="secNav">
        <div class="secWrapper">
            <div class="secTop">
                <div class="balance">                    
                </div>
            </div>
            
            <div class="divider"><span></span></div>
            
            <!-- Sidebar subnav -->
            <ul class="subNav">
                <li><a href="lista.php" title="" class="this"><span class="icos-frames"></span>Jugadores</a></li>
                <li><a href="../posiciones/lista.php" title=""><span class="icos-frames"></span>Posiciones</a></li>
            </ul>
            
            <div class="divider"><span></span></div>
                    
        </div> 
    </div>
</div>
<!-- Sidebar ends -->    
	
    
<!-- Content begins -->
<div id="content">
    <div class="contentTop">
        <span class="pageTitle"><span class="icon-screen"></span>Jugadores</span>

    </div>
    
    <!-- Breadcrumbs line -->
    <div class="breadLine">
        <div class="bc">
        </div>
    </div>
    
    <!-- Main content -->
    <div class="wrapper">

        <form id="submit-form" class="main" method="POST" action="s-editar.php">

            <fieldset>
                <div class="widget fluid">
                    
                    <div class="whead"><h6>Agregar</h6></div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Nombre:</label></div>
                        <div class="grid9"><input type="text" name="nombre" value="<?php echo $nota_nombre; ?>" /></div>
                    </div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Apellidos:</label></div>
                        <div class="grid9"><input type="text" name="apellidos" value="<?php echo $nota_apellidos; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Fecha de Nacimiento:</label></div>
                        <div class="grid9"><input type="text" name="fecha_nac" value="<?php echo $nota_fecha_nac; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Nacionalidad:</label></div>
                        <div class="grid9"><input type="text" name="nacionalidad" value="<?php echo $nota_nacionalidad; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posición:</label></div>
                        <div class="grid9"><input type="text" name="posicion" value="<?php echo $nota_posicion; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Perfil:</label></div>
                        <div class="grid9"><input type="text" name="perfil" value="<?php echo $nota_perfil; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Peso:</label></div>
                        <div class="grid9"><input type="text" name="peso" value="<?php echo $nota_peso; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Estatura:</label></div>
                        <div class="grid9"><input type="text" name="estatura" value="<?php echo $nota_estatura; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Club actual:</label></div>
                        <div class="grid9"><input type="text" name="club_actual" value="<?php echo $nota_club_actual; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Selección:</label></div>
                        <div class="grid9"><input type="text" name="seleccion" value="<?php echo $nota_seleccion; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posición fija:</label></div>
                        <div class="grid9">
                            <select data-placeholder="Selecciona una opción..." class="select" name="posicion_fija" tabindex="2">
                                <option value=""></option> 
                                <?php while($fila_posicion_fija=mysql_fetch_array($rst_posicion_fija)){
                                        $posicion_id=$fila_posicion_fija["id"];
                                        $posicion_posicion=$fila_posicion_fija["posicion"];

                                        if ($nota_posicion_fija==$posicion_id){
                                ?>
                                <option selected="selected" value="<?php echo $posicion_id; ?>"><?php echo $posicion_posicion; ?></option>
                                <?php }else{ ?>
                                <option value="<?php echo $posicion_id; ?>"><?php echo $posicion_posicion; ?></option>
                                <?php }} ?>
                            </select>
                        </div>             
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posicíón en la cancha: </label></div>
                        <div class="grid9 on_off">
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_arquero==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Arquero</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_lateral_derecho==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Lateral derecho</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_back_derecho==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Back central derecho</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_back_izquierdo==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Back central izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_lateral_izquierdo==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Lateral izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_volante_derecho==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Volante derecho</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_volante_central==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Volante central</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_volante_izquierdo==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Volante izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_extremo_derecho==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Extremo derecho</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_delantero==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Delantero</div>
                            <div class="floatL mr10"><input type="checkbox" <?php if($cancha_extremo_izquierdo==1){ ?>checked<?php } ?> id="check21" name="chbox1" />Extremo izquierdo</div>
                        </div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Imagen:</label> </div>
                        <div class="grid9">
                            <div class="without floatL">
                                <img src="../../../upload/<?php echo $nota_imagen_carpeta."thumb/".$nota_imagen; ?>" width="100" >
                            </div>
                            <div class="widget floarL width60 margin1020">    
                                <div id="uploader">Tu navegador no soporta HTML5.</div>
                                <input type="hidden" name="imagen" value="<?php echo $nota_imagen; ?>">
                                <input type="hidden" name="imagen_carpeta" value="<?php echo $nota_imagen_carpeta; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="formRow">
                            <div class="grid3"><label>Publicar: </label></div>
                            <div class="grid9 enabled_disabled">
                                <div class="floatL mr10"><input type="checkbox" id="check4" <?php if($nota_publicar==1){ ?>checked<?php } ?> value="1" name="publicar" /></div>
                            </div>
                        </div>

                    <div class="formRow">
                        <div class="body" align="center">
                            <a href="lista.php" class="buttonL bBlack">Cancelar</a>
                            <input type="submit" class="buttonL bGreen" name="btn-guardar" value="Guardar datos">
                        </div>
                    </div>
                    
                </div>
            </fieldset>

        </form>

    </div>
  <!-- Main content ends -->
    
</div>
<!-- Content ends -->    
   
        
</body>
</html>