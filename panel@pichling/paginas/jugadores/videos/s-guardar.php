<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$jugador_id=$_REQUEST["jugador"];
$titulo=$_POST["titulo"];
$youtube=$_POST["video"];
$publicar=1;

if($_POST['uploader_0_tmpname']<>""){
	$imagen=$_POST["uploader_0_tmpname"];
	$imagen_carpeta=fechaCarpeta()."/";	
}else{
	$imagen="";
	$imagen_carpeta="";
}

//GUARDAR
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_jugadores_videos (titulo, imagen, imagen_carpeta, youtube, publicar, jugador)
	VALUES ('".htmlspecialchars($titulo)."', '$imagen', '$imagen_carpeta', '$youtube', $publicar, $jugador_id)", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=ok");
}

?>