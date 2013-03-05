<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$id=$_REQUEST["id"];
$club=$_POST["club"];
$anio=$_POST["anio"];
$jugador_id=$_REQUEST["jugador"];

//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_jugadores_club SET 
	club='$club', anio='$anio' WHERE id=$id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=ok");
}

?>