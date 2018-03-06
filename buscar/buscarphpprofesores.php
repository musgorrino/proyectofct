<?php 
include("../../funciones/funciones.php");

$codigointerprof=recoger($_Post['codigointerprof']);
$nombre=recoger($_Post['nombre']);
$busqueda=array();
if($codigointerprof==0){
$busqueda[]="codigointerprof";
}
if($nombre==0){
$busqueda[]="nombre";
}
preparar_busqueda("profesores",$busqueda);
?>
