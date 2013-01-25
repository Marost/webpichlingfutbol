<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$jugador_id=$_REQUEST["id"];
$nombre=$_POST["nombre"];

//IMAGEN
if($_POST['uploader_0_tmpname']<>""){
	$imagen=$_POST["uploader_0_tmpname"];
	$imagen_carpeta=fechaCarpeta()."/";	
	$thumb=PhpThumbFactory::create("../../../upload/".$imagen_carpeta."".$imagen."");
	$thumb->adaptiveResize(300,280);
	$thumb->save("../../../upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
}else{
	$imagen=$_POST["imagen"];
	$imagen_carpeta=$_POST["imagen_carpeta"];
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_jugadores_galeria SET url='$url', 
	nombre='$nombre', 
	apellidos='$apellidos', 
	fecha_nac='$fecha_nac', 
	nacionalidad='$nacionalidad', 
	posicion='$posicion', 
	perfil='$perfil', 
	peso='$peso', 
	estatura='$estatura', 
	club_actual='$club_actual', 
	posicion_fija='$posicion_fija', 
	publicar=$publicar, 
	seleccion='$seleccion', 
	imagen='$imagen', 
	imagen_carpeta='$imagen_carpeta' WHERE id=$jugador_id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>