<?php 
//session_start();
require_once("../../conexion/conexion.php");
require_once("../../conexion/funciones.php");
//require_once("../../conexion/verificar_sesion.php");
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

        <form action="" class="main">

            <fieldset>
                <div class="widget fluid">
                    
                    <div class="whead"><h6>Agregar</h6></div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Nombre:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>
                    
                    <div class="formRow">
                        <div class="grid3"><label>Apellidos:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Fecha de Nacimiento:</label></div>
                        <div class="grid9"><input type="text" class="maskDate" id="maskDate" value="value" /><span class="note">99/99/9999</span></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Nacionalidad:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posición:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Perfil:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Peso:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Estatura:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Club actual:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Selección:</label></div>
                        <div class="grid9"><input type="text" name="regular" /></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posición fija:</label></div>
                        <div class="grid9">
                            <select data-placeholder="Selecciona una opción..." class="select" tabindex="2">
                                <option value=""></option> 
                                <option value="Cambodia">Arquero</option> 
                                <option value="Cameroon">Defensas centrales</option> 
                                <option value="Canada">Delanteros</option> 
                                <option value="Cape Verde">Marcadores derechos</option> 
                                <option value="Cape Verde">Marcadores izquierdos</option> 
                            </select>
                        </div>             
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Posicíón en la cancha: </label></div>
                        <div class="grid9 on_off">
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Arquero</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Lateral derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Back central derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Back central izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Lateral izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Volante derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Volante central</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Volante izquierdo</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Extremo derecho</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Delantero</div>
                            <div class="floatL mr10"><input type="checkbox" id="check21" name="chbox1" />Extremo izquierdo</div>
                        </div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Imagen:</label> </div>
                        <div class="grid9">
                            <input type="file" class="styled" id="fileInput" />
                        </div>
                    </div>

                    <div class="formRow">
                        <div class="body" align="center">
                            <a href="lista.php" class="buttonL bBlack">Cancelar</a>
                            <a href="javascript:;" class="buttonL bGreen">Guardar datos</a>
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
