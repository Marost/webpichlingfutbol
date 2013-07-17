<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$id=$_REQUEST["id"];
$titulo=$_POST["titulo"];
$jugador_id=$_REQUEST["jugador"];
$youtube=$_POST["video"];

//PUBLICAR
if ($_POST["publicar"]<>""){ $publicar=$_POST["publicar"]; }else{ $publicar=0; }

//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_jugadores_videos SET titulo='".htmlspecialchars($titulo)."',
youtube='$youtube', jugador=$jugador_id, publicar=$publicar WHERE id=$id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=ok");
}

?>