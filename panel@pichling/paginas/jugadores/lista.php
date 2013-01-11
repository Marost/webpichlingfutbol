<?php 
//session_start();
require_once("../../conexion/conexion.php");
require_once("../../conexion/funciones.php");
//require_once("../../conexion/verificar_sesion.php");

//VARIABLES DE URL
$mensaje=$_REQUEST["msj"];

//JUGADORES
$rst_jugadores=mysql_query("SELECT * FROM ".$tabla_suf."_jugadores ORDER BY nombre ASC;", $conexion);

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

        <ul class="middleNavR">
            <li><a href="f-agregar.php" title="Agregar" class="tipN"><img src="../../images/icons/middlenav/create.png" alt="" /></a></li>
        </ul>

        <?php if($mensaje=="ok"){ ?>
        <div class="nNote nSuccess">
            <p>El registro se guardo correctamente</p>
        </div>
        <?php }elseif($mensaje=="er"){ ?>
        <div class="nNote nFailure">
            <p>Se produjo un error al guardar el registro</p>
        </div>
        <?php } ?>

        <!-- Media table sample -->
        <div class="widget">
            <div class="whead"><h6>Jugadores</h6></div>
            <table cellpadding="0" cellspacing="0" width="100%" border="0" class="dTable">
                <thead>
                    <tr>
                        <td class="sortCol"><div>Titulo</div></td>
                        <td width="200" class="sortCol"><div>Posicion</div></td>
                        <td width="100">Estado</td>
                        <td width="100">Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila_jugadores=mysql_fetch_array($rst_jugadores)) {
                          $jugadores_id=$fila_jugadores["id"];
                          $jugadores_nombre=$fila_jugadores["nombre"];
                          $jugadores_apellidos=$fila_jugadores["apellidos"];
                          $jugadores_posicion=$fila_jugadores["posicion"];
                          $jugadores_publicar=$fila_jugadores["publicar"];
                    ?>
                    <tr>
                        <td class="textL"><?php echo $jugadores_nombre." ".$jugadores_apellidos; ?></td>
                        <td><?php echo $jugadores_posicion; ?></td>
                        <td>
                            <?php if($jugadores_publicar==1){ ?>
                            <span class="label label-success">Activo</span>
                            <?php }else{ ?>
                            <span class="label">Inactivo</span>
                            <?php } ?>
                        </td>
                        <td class="tableActs">
                            <div class="btn-group" style="display: inline-block; margin-bottom: -4px;">
                                <a class="buttonS bDefault" data-toggle="dropdown" href="#">Acción<span class="caret"></span></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><span class="icos-trash"></span>Eliminar</a></li>
                                    <li><a href="f-editar.php?id=<?php echo $jugadores_id; ?>" class=""><span class="icos-pencil"></span>Modificar</a></li>
                                    <li><a href="#" class=""><span class="icos-photos"></span>Fotos</a></li>
                                    <li><a href="#" class=""><span class="icos-youtube"></span>Videos</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
  <!-- Main content ends -->
    
</div>
<!-- Content ends -->    
   
        
</body>
</html>
