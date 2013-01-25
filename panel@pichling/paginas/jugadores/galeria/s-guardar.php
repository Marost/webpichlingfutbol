<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$nombre=$_POST["nombre"];

//IMAGEN
if($_POST['uploader_0_tmpname']<>""){
	$imagen=$_POST["uploader_0_tmpname"];
	$imagen_carpeta=fechaCarpeta()."/";	
	$thumb=PhpThumbFactory::create("../../../upload/".$imagen_carpeta."".$imagen."");
	$thumb->adaptiveResize(300,280);
	$thumb->save("../../../upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
}else{
	$imagen="";
	$imagen_carpeta="";
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_jugadores_galeria (url, nombre, apellidos, fecha_nac, nacionalidad, posicion, perfil, peso, estatura, club_actual, posicion_fija, publicar, seleccion, imagen, imagen_carpeta) VALUES('$url', '$nombre', '$apellidos', '$fecha_nac', '$nacionalidad', '$posicion', '$perfil', '$peso', '$estatura', '$club_actual', '$posicion_fija', $publicar, '$seleccion', '$imagen', '$imagen_carpeta');",$conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?jugador=&msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>