<?php
session_start();
include("../../conexion/conexion.php");

foreach ($_GET['listItem'] as $position => $item):
	$sql[] = mysql_query("UPDATE ".$tabla_suf."_slider SET orden=$position WHERE id=$item", $conexion);
endforeach;

?>