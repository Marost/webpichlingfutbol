<?php
//session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$titulo=$nombre." ".$apellidos;
$url=getUrlAmigable(eliminarTextoURL($titulo));
$fecha_nac=$_POST["fecha_nac"];
$nacionalidad=$_POST["nacionalidad"];
$posicion=$_POST["posicion"];
$perfil=$_POST["perfil"];
$peso=$_POST["peso"];
$estatura=$_POST["estatura"];
$club_actual=$_POST["club_actual"];
$seleccion=$_POST["seleccion"];
$posicion_fija=$_POST["posicion_fija"];
$publicar=1;

//POSICION EN LA CANCHA
$p_arquero=$_POST["arquero"];
$p_lateral_derecho=$_POST["lateral-derecho"];
$p_back_derecho=$_POST["back-derecho"];
$p_back_izquierdo=$_POST["back-izquierdo"];
$p_lateral_izquierdo=$_POST["lateral-izquierdo"];
$p_volante_derecho=$_POST["volante-derecho"];
$p_volante_central=$_POST["volante-central"];
$p_volante_izquierdo=$_POST["volante-izquierdo"];
$p_extremo_derecho=$_POST["extremo-derecho"];
$p_delantero=$_POST["delantero"];
$p_extremo_izquierdo=$_POST["extremo-izquierdo"];


//IMAGEN O VIDEO
if($_POST['filelist_0_tmpname']<>""){
	$imagen=$_POST["filelist_0_tmpname"];
	$imagen_carpeta=fechaCarpeta()."/";	
	$thumb=PhpThumbFactory::create("../../../upload/".$imagen_carpeta."".$imagen."");
	$thumb->adaptiveResize(300,280);
	$thumb->save("../../../upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
}else{
	$imagen=="";
	$imagen_carpeta="";
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_jugadores (url, nombre, apellidos, fecha_nac, nacionalidad, posicion, perfil, peso, estatura, club_actual, posicion_fija, publicar, seleccion, imagen, imagen_carpeta) VALUES('$url', '$nombre', '$apellidos', '$fecha_nac', '$nacionalidad', '$posicion', '$perfil', '$peso', '$estatura', '$club_actual', '$posicion_fija', $publicar, '$seleccion', '$imagen', '$imagen_carpeta');",$conexion);

if($rst_guardar){

	//EXTRAER ID DE JUGADOR
	$rst_id=mysql_query("SELECT * FROM ".$tabla_suf."_jugadores ORDER BY id DESC LIMIT 1;", $conexion);
	$fila_id=mysql_fetch_array($rst_id);
	$jugador_id=$fila_id["id"];

	$rst_posicion=mysql_query("INSERT INTO ".$tabla_suf."_posicion_cancha (jugador, arquero, lateral_derecho, back_central_derecho, back_central_izquierdo, defensa_central, lateral_izquierdo, volante_derecho, volante_central, volante_izquierdo, extremo_derecho, delantero, extremo_izquierdo) VALUES($jugador_id, $p_arquero, $p_lateral_derecho, $p_back_central_derecho, $p_back_central_izquierdo, $p_defensa_central, $p_lateral_izquierdo, $p_volante_derecho, $p_volante_central, $p_volante_izquierdo, $p_extremo_derecho, $p_delantero, $p_extremo_izquierdo)", $conexion);
}

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>