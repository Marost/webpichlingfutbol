<?php
session_start();
include("../../../conexion/conexion.php");
include("../../../conexion/funciones.php");
require_once('../../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$jugador_id=$_REQUEST["jugador"];
$imagen_carpeta=fechaCarpeta()."/";

//CONSULTA PARA SABER SI EXISTEN IMAGENES
$rst_notgaleria=mysql_query("SELECT * FROM ".$tabla_suf."_jugadores_galeria WHERE jugador=$jugador_id", $conexion);
$num_notgaleria=mysql_num_rows($rst_notgaleria);


if($num_notgaleria>0){
	$cont=0;
	$cont_img=$num_notgaleria;
	while($_POST['uploader_'.$cont.'_tmpname']<>""){
		$imagen=$_POST['uploader_'.$cont.'_tmpname'];
		$thumb{$cont}=PhpThumbFactory::create("../../../../upload/".$imagen_carpeta."".$imagen."");
		$thumb{$cont}->adaptiveResize(110,110);
		$thumb{$cont}->save("../../../../upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
		mysql_query("INSERT INTO ".$tabla_suf."_jugadores_galeria(imagen, imagen_carpeta, ordenar, jugador) VALUES ('$imagen', '$imagen_carpeta', $cont_img, $jugador_id)",$conexion);
		$cont++; $cont_img++;
	}
}elseif($num_notgaleria==0){
	$cont=0;
	while($_POST['uploader_'.$cont.'_tmpname']<>""){
		$imagen=$_POST['uploader_'.$cont.'_tmpname'];
		$thumb{$cont}=PhpThumbFactory::create("../../../../upload/".$imagen_carpeta."".$imagen."");
		$thumb{$cont}->adaptiveResize(110,110);
		$thumb{$cont}->save("../../../../upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
		$imagen=$_POST['uploader_'.$cont.'_tmpname'];
		mysql_query("INSERT INTO ".$tabla_suf."_jugadores_galeria(imagen, imagen_carpeta, ordenar, jugador) VALUES ('$imagen', '$imagen_carpeta', $cont, $jugador_id)",$conexion);
		$cont++;
	}
}

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?jugador=$jugador_id&msj=ok");
}

?>