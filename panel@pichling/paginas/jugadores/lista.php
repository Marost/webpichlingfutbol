<?php 
//session_start();
require_once("../../conexion/conexion.php");
require_once("../../conexion/funciones.php");
//require_once("../../conexion/verificar_sesion.php");

//JUGADORES
$rst_jugadores=mysql_query("SELECT * FROM pf_jugadores ORDER BY nombre ASC;", $conexion);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Simplenso - Tables</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="ahoekie">
  <meta name="robots" content="noindex, nofollow">
  <base href="<?php echo $web."".$carpeta_admin."/"; ?>">

  <!-- Bootstrap -->
  <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" id="main-theme-script">
  <link href="/css/themes/default.css" rel="stylesheet" id="theme-specific-script">
  <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

  <!-- Full Calender -->
  <link rel="stylesheet" type="text/css" href="/scripts/fullcalendar/fullcalendar/fullcalendar.css" />

  <!-- Bootstrap Date Picker --> 
  <link href="/scripts/datepicker/css/datepicker.css" rel="stylesheet">
  
  <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
  <link rel="stylesheet" href="/scripts/blueimp-jQuery-File-Upload/css/jquery.fileupload-ui.css">
  
  <!-- Bootstrap Image Gallery styles -->
  <link rel="stylesheet" href="http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">
  
  <!-- Uniform -->
  <link rel="stylesheet" type="text/css" media="screen,projection" href="/scripts/uniform/css/uniform.default.css" />
  
  <!-- Chosen multiselect -->
  <link type="text/css" href="/scripts/chosen/chosen/chosen.intenso.css" rel="stylesheet" />   

  <!-- Simplenso -->
  <link href="/css/simplenso.css" rel="stylesheet">
  
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body id="tables">
<!-- Top navigation bar -->
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="index.html">Administrador</a>
      <div class="btn-group pull-right">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="icon-user"></i> John Doe
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Settings</a></li>
          <li class="divider"></li>
          <li><a href="login.html">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Main Content Area | Side Nav | Content -->    
<div class="container-fluid">
  <div class="row-fluid">
    <!-- Side Navigation -->
    <div class="span2">
      <div class="member-box round-all"> 
        <a><img src="images/member_ph.png" class="member-box-avatar" /></a>
        <span>
            <strong>Administrator</strong><br/>
            <a>John Doe</a><br/>
            <span class="member-box-links"><a>Settings</a> | <a>Logout</a></span>
        </span>
      </div>          
      <div class="sidebar-nav">
      	<div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list"> 
          <li class="nav-header">Main</li>        
          <li><a href="index.html"><i class="icon-home"></i> Dashboard</a></li>
          <li><a href="blogpost.html"><i class="icon-edit"></i> Add Blog Post</a></li>
          <li><a href="members.html"><i class="icon-user"></i> Members</a></li>
          <li><a href="comments.html"><i class="icon-comment"></i> Comments</a></li>
          <li><a href="gallery.html"><i class="icon-picture"></i> Gallery</a></li>
          <li><a href="calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
          <li class="nav-header">Typography</li>
          <li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
          <li><a href="grid.html"><i class="icon-th-large"></i> Grid</a></li>
          <li><a href="portlets.html"><i class="icon-th"></i> Portlets</a></li>
          <li><a href="forms.html"><i class="icon-th"></i> Forms</a></li>
          <li class="active"><a href="tables.html"><i class="icon-align-justify"></i> Tables</a></li>
          <li><a href="other.html"><i class="icon-gift"></i> Other</a></li>
          <li class="nav-header">Settings</li>
          <li><a class="cookie-delete" href="#"><i class="icon-wrench"></i> Delete Cookies</a></li>
          <li><a class="sidenav-style-1" href="#"><i class="icon-align-left"></i> Side Menu Style 1</a></li>
          <li><a class="sidenav-style-2" href="#"><i class="icon-align-right"></i> Side Menu Style 2</a></li>
          <li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
        </ul>
        </div>
      </div><!--/.well -->
    </div><!--/span-->
    
    <!-- Bread Crumb Navigation -->
	<div class="span10">
      <div>
        <ul class="breadcrumb">
          <li class="active">Jugadores</li>
        </ul>
      </div>

    <div class="row-fluid">
        <div class="span2 action-btn round-all">
          <a href="#">
                <div><i class="icon-pencil"></i></div>
                <div><strong>Agregar</strong></div>         
            </a>
        </div>
      </div>
      

 	    <div class="row-fluid">
      	 <!-- Portlet Set 4 -->
         <div class="span12">
         	 <!-- Portlet: Data Table -->
             <div class="box">
              <h4 class="box-header round-top">Jugadores</h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered bootstrap-datatable" id="datatable">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>Apellidos</th>
                              <th>Posición</th>
                              <th>Estado</th>
                              <th>Acciones</th>
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
                            <td><?php echo $jugadores_nombre; ?></td>
                            <td><?php echo $jugadores_apellidos; ?></td>
                            <td><?php echo $jugadores_posicion ?></td>
                            <td class="center">
                                <?php if ($jugadores_publicar==1){ ?>
                                  <span class="label label-success">Active</span>
                                <?php }else{ ?>
                                  <span class="label">Inactive</span>
                                <?php } ?>
                            </td>
                            <td class="center">
                                <a class="btn btn-info" href="#">
                                    <i class="icon-edit icon-white"></i>  
                                    Modificar
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="icon-trash icon-white"></i> 
                                    Eliminar
                                </a>
                            </td>
                        </tr>

                        <?php } ?>
                        
                      </tbody>
                  </table>            
                  </div>
              </div>
            </div><!--/span-->
         </div>
         <!-- Portlet Set 3 --> 
 
    </div><!--/span-->
  </div><!--/row-->

  <footer>
    <p class="pull-right">&copy; Simplenso 2012</p>
  </footer>
    <div id="box-config-modal" class="modal hide fade in" style="display: none;">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
        <h3>Adjust widget</h3>
      </div>
      <div class="modal-body">
        <p>This part can be customized to set box content specifix settings!</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary" data-dismiss="modal">Save Changes</a>
        <a href="#" class="btn" data-dismiss="modal">Cancel</a>
      </div>
    </div>
</div><!--/.fluid-container-->
	<!-- javascript Templates
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Google API -->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
     
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    <!-- Data Tables -->
    <script src="/scripts/DataTables/media/js/jquery.dataTables.js"></script>
    
    <!-- jQuery UI Sortable -->
    <script src="/scripts/jquery-ui/ui/minified/jquery.ui.core.min.js"></script>
	<script src="/scripts/jquery-ui/ui/minified/jquery.ui.widget.min.js"></script>
	<script src="/scripts/jquery-ui/ui/minified//jquery.ui.mouse.min.js"></script>
	<script src="/scripts/jquery-ui/ui/minified/jquery.ui.sortable.min.js"></script>
    <script src="/scripts/jquery-ui/ui/minified/jquery.ui.widget.min.js"></script>
    
    <!-- jQuery UI Draggable & droppable -->
    <script src="/scripts/jquery-ui/ui/minified/jquery.ui.draggable.min.js"></script>
    <script src="/scripts/jquery-ui/ui/minified/jquery.ui.droppable.min.js"></script>

    <!-- Bootstrap -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/scripts/bootbox/bootbox.min.js"></script>

	<!-- Bootstrap Date Picker -->
    <script src="/scripts/datepicker/js/bootstrap-datepicker.js"></script>

		
    <!-- jQuery Cookie -->    
    <script src="/scripts/jquery.cookie/jquery.cookie.js"></script>
    
    <!-- Full Calender -->
    <script type='text/javascript' src="/scripts/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    
    <!-- CK Editor -->
	<script type="text/javascript" src="/scripts/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/scripts/ckeditor/adapters/jquery.js"></script>
    
    <!-- Chosen multiselect -->
    <script type="text/javascript" language="javascript" src="/scripts/chosen/chosen/chosen.jquery.min.js"></script>  
    
    <!-- Uniform -->
    <script type="text/javascript" language="javascript" src="/scripts/uniform/jquery.uniform.min.js"></script>
    
    <!-- MultiFile Upload -->
    <!-- Error messages for the upload/download templates -->
	<script>
    var fileUploadErrors = {
        maxFileSize: 'File is too big',
        minFileSize: 'File is too small',
        acceptFileTypes: 'Filetype not allowed',
        maxNumberOfFiles: 'Max number of files exceeded',
        uploadedBytes: 'Uploaded bytes exceed file size',
        emptyResult: 'Empty file upload result'
    };
    </script>
    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/html">
    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
        <tr class="template-upload fade">
            <td class="preview"><span class="fade"></span></td>
            <td class="name">{%=file.name%}</td>
            <td class="size">{%=o.formatFileSize(file.size)%}</td>
            {% if (file.error) { %}
                <td class="error" colspan="2"><span class="label label-important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
            {% } else if (o.files.valid && !i) { %}
                <td>
                    <div class="progress progress-success progress-striped active"><div class="bar" style="width:0%;"></div></div>
                </td>
                <td class="start">{% if (!o.options.autoUpload) { %}
                    <button class="btn btn-primary">
                        <i class="icon-upload icon-white"></i> Start
                    </button>
                {% } %}</td>
            {% } else { %}
                <td colspan="2"></td>
            {% } %}
            <td class="cancel">{% if (!i) { %}
                <button class="btn btn-warning">
                    <i class="icon-ban-circle icon-white"></i> Cancel
                </button>
            {% } %}</td>
        </tr>
    {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/html">
    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
        <tr class="template-download fade">
            {% if (file.error) { %}
                <td></td>
                <td class="name">{%=file.name%}</td>
                <td class="size">{%=o.formatFileSize(file.size)%}</td>
                <td class="error" colspan="2"><span class="label label-important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
            {% } else { %}
                <td class="preview">{% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery"><img src="{%=file.thumbnail_url%}"></a>
                {% } %}</td>
                <td class="name">
                    <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}">{%=file.name%}</a>
                </td>
                <td class="size">{%=o.formatFileSize(file.size)%}</td>
                <td colspan="2"></td>
            {% } %}
            <td class="delete">
                <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">
                    <i class="icon-trash icon-white"></i> Delete
                </button>
                <input type="checkbox" name="delete" value="1">
            </td>
        </tr>
    {% } %}
    </script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="http://blueimp.github.com/JavaScript-Templates/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js"></script>
    <script src="http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="/scripts/blueimp-jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
	<script src="/scripts/blueimp-jQuery-File-Upload/js/jquery.fileupload.js"></script>
    <!-- The File Upload image processing plugin -->
    <script src="/scripts/blueimp-jQuery-File-Upload/js/jquery.fileupload-ip.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="/scripts/blueimp-jQuery-File-Upload/js/jquery.fileupload-ui.js"></script>
    <!-- The main application script -->
    <script src="/scripts/blueimp-jQuery-File-Upload/js/main.js"></script>
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
    <!--[if gte IE 8]><script src="/scripts/blueimp-jQuery-File-Upload/js/cors/jquery.xdr-transport.js"></script><![endif]-->
    
    <!-- Simplenso Scripts -->
    <script src="/scripts/simplenso/simplenso.js"></script>
  </body>
</html>