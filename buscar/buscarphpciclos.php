<?php 
include("../../funciones/funciones.php");


$abreviatura=recoger($_Post['abreviatura']);
$nivel=recoger($_Post['nivel']);
$familia=recoger($_Post['familia']);
$busqueda=array();
if($abreviatura==0){
 $busqueda[]="abreviatura";
}
if($nivel==0){
 $busqueda[]="nivel";
}
if($familia==0){
 $busqueda[]="familia";
}
preparar_busqueda("ciclos_formativos",$busqueda);
?>
