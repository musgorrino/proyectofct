<?php 
include("../../funciones/funciones.php");

$nombre=recoger($_Post['nombre']);
$coordinador=recoger($_Post['convenio']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($coordinador==0){
$busqueda[]="coordinador";
}
preparar_busqueda("familias_profesionales",$busqueda);
?>
