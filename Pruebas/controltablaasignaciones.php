<html>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","mydb");
$recogida="select * from mydb.asignaciones";
$datos=mysqli_query($conexion,$recogida);
$totalfilas= mysqli_num_rows($datos);
?>
<h3>
asignaciones
</h3>
<table border=1>
<tr><td>codigo</td><td>Codigo Empresa</td><td>Codigo Alumno</td><td>curso</td><td>horario</td><td>observaciones</td><td>trabajo desempeñado</td><td>contratacion del alumno</td></tr>

<?php
if ($totalfilas>0){
 $_fila=mysqli_fetch_assoc($datos);
	while ($_fila)
	{
	?>
	<tr>
		<td><?php echo $_fila["codigo"];?></td>
		<td><?php echo $_fila["codigoempresa"];?></td>
		<td><?php echo $_fila["codigoalumno"];?></td>
		<td><?php echo $_fila["curso"];?></td>
		<td><?php echo $_fila["horario"];?></td>
		<td><?php echo $_fila["observaciones"];?></td>
		<td><?php echo $_fila["trabajodesempenado"];?></td>
		<td><?php echo $_fila["contratacionalumno"];?></td>
		
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