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

//POSICION EN LA CANCHA
if ($_POST["arquero"]<>""){ $p_arquero=$_POST["arquero"]; }else{ $p_arquero=0; }
if ($_POST["lateral-derecho"]<>""){ $p_lateral_derecho=$_POST["lateral-derecho"]; }else{ $p_lateral_derecho=0; }
if ($_POST["back-derecho"]<>""){ $p_back_derecho=$_POST["back-derecho"]; }else{ $p_back_derecho=0; }
if ($_POST["back-izquierdo"]<>""){ $p_back_izquierdo=$_POST["back-izquierdo"]; }else{ $p_back_izquierdo=0; }
if ($_POST["lateral-izquierdo"]<>""){ $p_lateral_izquierdo=$_POST["lateral-izquierdo"]; }else{ $p_lateral_izquierdo=0; }
if ($_POST["volante-derecho"]<>""){ $p_volante_derecho=$_POST["volante-derecho"]; }else{ $p_volante_derecho=0; }
if ($_POST["volante-central"]<>""){ $p_volante_central=$_POST["volante-central"]; }else{ $p_volante_central=0; }
if ($_POST["volante-izquierdo"]<>""){ $p_volante_izquierdo=$_POST["volante-izquierdo"]; }else{ $p_volante_izquierdo=0; }
if ($_POST["extremo-derecho"]<>""){ $p_extremo_derecho=$_POST["extremo-derecho"]; }else{ $p_extremo_derecho=0; }
if ($_POST["delantero"]<>""){ $p_delantero=$_POST["delantero"]; }else{ $p_delantero=0; }
if ($_POST["extremo-izquierdo"]<>""){ $p_extremo_izquierdo=$_POST["extremo-izquierdo"]; }else{ $p_extremo_izquierdo=0; }

//PUBLICAR
if ($_POST["publicar"]<>""){ $publicar=$_POST["publicar"]; }else{ $publicar=0; }

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
/*$rst_guardar=mysql_query("UPDATE ".$tabla_suf."*/ echo "_jugadores SET url='$url', 
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
	imagen_carpeta='$imagen_carpeta' WHERE id=$jugador_id;";//, $conexion);

/*if($rst_guardar){

	$rst_posicion=mysql_query("UPDATE ".$tabla_suf."*/ echo "_posicion_cancha SET arquero=$p_arquero,
		lateral_derecho=$p_lateral_derecho, 
		back_central_derecho=$p_back_derecho, 
		back_central_izquierdo=$p_back_izquierdo, 
		lateral_izquierdo=$p_lateral_izquierdo, 
		volante_derecho=$p_volante_derecho, 
		volante_central=$p_volante_central, 
		volante_izquierdo=$p_volante_izquierdo, 
		extremo_derecho=$p_extremo_derecho, 
		delantero=$p_delantero, 
		extremo_izquierdo=$p_extremo_izquierdo WHERE jugador=$jugador_id;"; /*, $conexion);
}

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}
*/
?>