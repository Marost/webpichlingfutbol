<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$jugador_id=$_REQUEST["jugador"];
$club=$_POST["club"];
$anio=$_POST["anio"];

//GUARDAR
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_jugadores_club (club, anio, jugador)
	VALUES ('$club', '$anio', $jugador_id)", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=ok");
}

?>