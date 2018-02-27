<html>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","mydb");
$recogida="select * from mydb.alumnos";
$datos=mysqli_query($conexion,$recogida);
$totalfilas= mysqli_num_rows($datos);
?>
<h3>
alumnos
</h3>
<table border=1>
<tr><td>codigo</td><td>Nombre</td><td>Apellidos</td><td>dni</td><td>fechanac</td><td>telefono</td><td>email</td><td>euskera</td><td>carnet</td><td>otros</td></tr>

<?php
if ($totalfilas>0){
 $_fila=mysqli_fetch_assoc($datos);
	while ($_fila)
	{
	?>
	<tr>
		<td><?php echo $_fila["codigo"];?></td>
		<td><?php echo $_fila["nombre"];?></td>
		<td><?php echo $_fila["apellidos"];?></td>
		<td><?php echo $_fila["dni"];?></td>
		<td><?php echo $_fila["fechanac"];?></td>
		<td><?php echo $_fila["telefono"];?></td>
		<td><?php echo $_fila["email"];?></td>
		<td><?php echo $_fila["euskera"];?></td>
		<td><?php echo $_fila["carnet"];?></td>
		<td><?php echo $_fila["otros"];?></td>
	<tr>	
	<?php
		$_fila=mysqli_fetch_assoc($datos);
	}
}
?>
</table>
<?php
mysqli_close($conexion);
?>
</body>
</html>