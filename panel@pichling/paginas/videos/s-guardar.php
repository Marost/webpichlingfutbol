<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$titulo=$_POST["titulo"];
$video=$_POST["video"];
$pub_fecha=$_POST["pub_fecha"];
$pub_hora=$_POST["pub_hora"];
$fecha_publicacion=$pub_fecha." ".$pub_hora;
$publicar=1;

if($_POST['uploader_0_tmpname']<>""){
	$imagen=$_POST["uploader_0_tmpname"];
	$imagen_carpeta=fechaCarpeta()."/";	
}else{
	$imagen="";
	$imagen_carpeta="";
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_videos (titulo, imagen, imagen_carpeta, youtube, fecha_publicacion, publicar) 
	VALUES('".htmlspecialchars($titulo)."', '$imagen', '$imagen_carpeta', '$video', '$fecha_publicacion', $publicar);",$conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>