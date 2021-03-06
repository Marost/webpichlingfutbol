<?php 
session_start();
require_once("../../conexion/conexion.php");
require_once("../../conexion/funciones.php");
require_once("../../conexion/verificar_sesion.php");

//POSICION FIJA
$rst_posicion_fija=mysql_query("SELECT * FROM ".$tabla_suf."_posicion_fija ORDER BY posicion ASC;", $conexion);

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

        <form id="submit-form" class="main" method="POST" action="s-guardar.php">

            <fieldset>
                <div class="widget fluid">
                    
                    <div class="whead"><h6>Agregar</h6></div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Nombre:</label></div>
                        <div class="grid9"><input type="text" name="nombre" /></div>
                    </div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Apellidos:</label></div>
                        <div class="grid9"><input type="text" name="apellidos" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Fecha de Nacimiento:</label></div>
                        <div class="grid9"><input type="text" name="fecha_nac" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Nacionalidad:</label></div>
                        <div class="grid9"><input type="text" name="nacionalidad" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posición:</label></div>
                        <div class="grid9"><input type="text" name="posicion" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Perfil:</label></div>
                        <div class="grid9"><input type="text" name="perfil" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Peso:</label></div>
                        <div class="grid9"><input type="text" name="peso" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Estatura:</label></div>
                        <div class="grid9"><input type="text" name="estatura" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Club actual:</label></div>
                        <div class="grid9"><input type="text" name="club_actual" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Selección:</label></div>
                        <div class="grid9"><input type="text" name="seleccion" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posición fija:</label></div>
                        <div class="grid9">
                            <select data-placeholder="Selecciona una opción..." name="posicion_fija" class="select" tabindex="2">
                                <option value=""></option> 
                                <?php while($fila_posicion_fija=mysql_fetch_array($rst_posicion_fija)){
                                        $posicion_id=$fila_posicion_fija["id"];
                                        $posicion_posicion=$fila_posicion_fija["posicion"];
                                ?>
                                <option value="<?php echo $posicion_id ?>"><?php echo $posicion_posicion; ?></option>
                                <?php } ?>
                            </select>
                        </div>             
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posicíón en la cancha: </label></div>
                        <div class="grid9 on_off">
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="arquero" />Arquero</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="lateral-derecho" />Lateral derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="back-derecho" />Back central derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="back-izquierdo" />Back central izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="lateral-izquierdo" />Lateral izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="volante-derecho" />Volante derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="volante-central" />Volante central</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="volante-izquierdo" />Volante izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="extremo-derecho" />Extremo derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="delantero" />Delantero</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" value="1" name="extremo-izquierdo" />Extremo izquierdo</div>
                        </div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Imagen:</label> </div>
                        <div class="grid9">
                            <div class="widget nomargin">    
                                <div id="uploader">Tu navegador no soporta HTML5.</div>                    
                            </div>
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
