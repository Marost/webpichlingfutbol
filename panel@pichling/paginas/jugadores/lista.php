<?php 
//session_start();
require_once("../../conexion/conexion.php");
require_once("../../conexion/funciones.php");
//require_once("../../conexion/verificar_sesion.php");

//JUGADORES
$rst_jugadores=mysql_query("SELECT * FROM pf_jugadores ORDER BY nombre ASC;", $conexion);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Administrador</title>
<base href="<?php echo $web."".$carpeta_admin."/"; ?>">

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<!--[if IE]> <link href="css/ie.css" rel="stylesheet" type="text/css"> <![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/plugins/tables/jquery.sortable.js"></script>
<script type="text/javascript" src="js/plugins/tables/jquery.resizable.js"></script>

<script type="text/javascript" src="js/plugins/forms/jquery.autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.uniform.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.autotab.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.ibutton.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>

<script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="js/plugins/wizards/jquery.form.wizard.js"></script>
<script type="text/javascript" src="js/plugins/wizards/jquery.validate.js"></script>
<script type="text/javascript" src="js/plugins/wizards/jquery.form.js"></script>

<script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.fileTree.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="js/plugins/others/jquery.fullcalendar.js"></script>
<script type="text/javascript" src="js/plugins/others/jquery.elfinder.js"></script>

<script type="text/javascript" src="js/plugins/forms/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="js/files/bootstrap.js"></script>
<script type="text/javascript" src="js/files/functions.js"></script>

</head>

<body>

<!-- Top line begins -->
<div id="top">
    <div class="wrapper">
        <a href="index.html" title="" class="logo"><img src="images/logo.png" alt="" /></a>
        
        <!-- Right top nav -->
        <div class="topNav">
            <a title="" class="iButton"></a>
        </div>
        
        <!-- Responsive nav -->
        <ul class="altMenu">
            <li><a href="index.html" title="">Dashboard</a></li>
            <li><a href="ui.html" title="" class="exp">Entrevistas</a>
                <ul>
                    <li><a href="tables.html">Lista</a></li>
                    <li><a href="tables_dynamic.html">Agregar</a></li>
                </ul>
            </li>

            <li><a href="ui.html" title="" class="exp">Noticias</a>
                <ul>
                    <li><a href="tables.html">Lista</a></li>
                    <li><a href="tables_dynamic.html">Agregar</a></li>
                </ul>
            </li>

            <li><a href="tables.html" title="" class="exp" id="current">Jugadores</a>
                <ul>
                    <li><a href="tables.html" class="active">Jugadores</a></li>
                    <li><a href="tables_dynamic.html">Posiciones</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Top line ends -->


<!-- Sidebar begins -->
<div id="sidebar">
    <div class="mainNav">
        <div class="user">
            <a title="" class="leftUserDrop"><img src="images/user.png" alt="" /><span><strong>3</strong></span></a><span>Eugene</span>
        </div>
        
        <!-- Main nav -->
        <ul class="nav">
            <li><a href="index.html" title=""><img src="images/icons/mainnav/dashboard.png" alt="" /><span>Dashboard</span></a></li>
            
            <li><a href="tables.html" title=""><img src="images/icons/mainnav/tables.png" alt="" /><span>Entrevistas</span></a>
                <ul>
                    <li><a href="tables.html" title=""><span class="icol-frames"></span>Lista</a></li>
                    <li><a href="tables.html" title=""><span class="icol-create"></span>Agregar</a></li>
                </ul>
            </li>

            <li><a href="tables.html" title=""><img src="images/icons/mainnav/tables.png" alt="" /><span>Noticias</span></a>
                <ul>
                    <li><a href="tables.html" title=""><span class="icol-frames"></span>Lista</a></li>
                    <li><a href="tables.html" title=""><span class="icol-create"></span>Agregar</a></li>
                </ul>
            </li>

            <li><a href="tables.html" title="" class="active"><img src="images/icons/mainnav/tables.png" alt="" /><span>Jugadores</span></a>
                <ul>
                    <li><a href="tables.html" title=""><span class="icol-frames"></span>Jugadores</a></li>
                    <li><a href="tables.html" title=""><span class="icol-create"></span>Posiciones</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
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
                <li><a href="tables.html" title="" class="this"><span class="icos-frames"></span>Jugadores</a></li>
                <li><a href="agregar.html" title=""><span class="icos-frames"></span>Posiciones</a></li>
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
            <li><a href="f-agregar.php" title="Agregar" class="tipN"><img src="images/icons/middlenav/create.png" alt="" /></a></li>
        </ul>

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
                                    <li><a href="#" class=""><span class="icos-pencil"></span>Modificar</a></li>
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
