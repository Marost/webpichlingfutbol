<?php
require_once("../../panel@pichling/conexion/conexion.php");
require_once("../../panel@pichling/conexion/funciones.php");

//VARIABLES
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];
$fecha=$fechaActual;

//GUARDAR EN LA BASE DE DATOS
mysql_query("INSERT INTO pf_contacto (nombre,
email,
mensaje,
fecha) VALUES ('$nombre',
'$email',
'".htmlspecialchars($mensaje)."',
'$fecha')", $conexion);
	
$body = '<!DOCTYPE HTML> <html lang="es"> <head> <meta charset="utf-8">
<title>Mensaje</title>
<style type="text/css">
	body{ font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
	body{ margin:0;}
</style>
</head>
<body>
<h2>Contacto</h2>
<p><strong>Nombre:</strong> '.$nombre.'</p>
<p><strong>E-mail:</strong> '.$email.'</p>
<p><strong>Mensaje:</strong> '.$mensaje.'</p>

</body>
</html>';
	
$from="contacto@pichlingfutbol.com";
$asunto="Pichling Representaciones | Contacto";
$headers= "From: ".$nombre." <".strip_tags($email)."> \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

mail($from, $asunto, $body, $headers);

?>