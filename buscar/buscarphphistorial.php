<?php 
include("../../funciones/funciones.php");

$grupo=recoger($_Post['grupo']);
$alumno=recoger($_Post['alumno']);
$curso=recoger($_Post['curso']);
$busqueda=array();
if($grupo==0){
$busqueda[]="grupo";
}
if($alumno==0){
$busqueda[]="alumno";
}
if($curso==0){
$busqueda[]="curso";
}
preparar_busqueda("historial_alumnos",$busqueda);
?>
