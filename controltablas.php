<html>
<head>
<?php
$conexion=mysqli_connect("localhost","root","","mydb");
$recogida="select * from alumnos";
$datos=mysqli_query($conexion,$recogida);
$fila=mysqli_fetch_assoc($datos);
$totalfilas= mysqli_num_rows ($r);
?>
<h3>
<?php echo 'Numero total de alumnos: '.$totalfilas;?>
</h3>
<table border=1>
<tr><td>Nombre</td><td>Apellidos</td><td>curso</td><td>grupo</td></tr>
<?php
if ($totalfilas>0)
{
	$_fila=mysqli_fetch_assoc($r);
	while ($_fila)
	{
	?>
	<tr>
		<td><?php echo $_fila["nombre"];?></td>
		<td><?php echo $_fila["apellidos"];?></td>
		<td><?php echo $_fila["curso"];?></td>
		<td><?php echo $_fila["grupo"];?></td>
	<tr>	
	<?php
		$_fila=mysqli_fetch_assoc($r);
	}
}
?>
</table>
<?php
mysqli_close($_enlace);
?>
</body>
</html>