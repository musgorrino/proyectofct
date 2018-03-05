<?php 
include("funciones.php");
 
cabecera("","estilos.css");
 
$conexion=Conectarse("mydb"); 
 
$codigo=$_POST['codigo'];
 
$q = "select * from alumnos where codigo ='$codigo'";
$resultado = mysql_query($q,$conexion) or die(mysql_error());
$total= mysql_num_rows($resultado);
 
 
if ($total>0)
{
    $fila = mysql_fetch_assoc($resultado);   
?>

<?php
}
mysql_free_result($resultado);
mysql_close($conexion);
?>