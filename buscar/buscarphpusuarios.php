<?php 
include("../../funciones/funciones.php");

$nombre=recoger($_Post['nombre']);
$tipo=recoger($_Post['tipo']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($tipo==0){
$busqueda[]="tipo";
}
preparar_busqueda("usuarios",$busqueda);
?>
