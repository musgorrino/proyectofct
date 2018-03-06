<?php 
include("../../funciones/funciones.php");

$nombre=recoger($_Post['nombre']);
$empresa=recoger($_Post['empresa']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($empresa==0){
$busqueda[]="empresa";
}
preparar_busqueda("responsable",$busqueda);
?>
