<?php 
session_start();
require_once("../../../conexion/conexion.php");
require_once("../../../conexion/funciones.php");
require_once("../../../conexion/verificar_sesion.php");

//VARIABLES
$id_url=$_REQUEST["id"];
$jugador_id=$_REQUEST["jugador"];

//EDITAR
$rst_nota=mysql_query("SELECT * FROM ".$tabla_suf."_jugadores_videos WHERE id=$id_url;", $conexion);
$fila_nota=mysql_fetch_array($rst_nota);

//VARIABLES
$nota_titulo=$fila_nota["titulo"];
$nota_youtube=$fila_nota["youtube"];
$nota_publicar=$fila_nota["publicar"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Administrador</title>

<?php require_once("../../../w-scripts.php"); ?>

</head>

<body>

<!-- Top line begins -->
<?php require_once("../../../w-topline.php"); ?>
<!-- Top line ends -->


<!-- Sidebar begins -->
<div id="sidebar">
    
    <?php require_once("../../../w-sidebarmenu.php"); ?>
    
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

        <form id="submit-form" class="main" method="POST" action="s-editar.php?jugador=<?php echo $jugador_id; ?>&id=<?php echo $id_url; ?>">

            <fieldset>
                <div class="widget fluid">
                    
                    <div class="whead"><h6>Editar</h6></div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Titulo:</label></div>
                        <div class="grid9"><input type="text" name="titulo" value="<?php echo $nota_titulo; ?>" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Video:</label></div>
                        <div class="grid9">
                            <input type="text" name="video" value="<?php echo $nota_youtube; ?>" />
                            <span class="note">http://www.youtube.com/watch?v=<strong>5HCaW4Oddro</strong></span>
                        </div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Publicar:</label></div>
                        <div class="grid9 enabled_disabled">
                            <div class="floatL mr10"><input type="checkbox" id="check4" <?php if($nota_publicar==1){ ?>checked<?php } ?> value="1" name="publicar" /></div>
                        </div>
                    </div>

                    <div class="formRow">
                        <div class="body" align="center">
                            <a href="lista.php?jugador=<?php echo $jugador_id; ?>" class="buttonL bBlack">Cancelar</a>
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