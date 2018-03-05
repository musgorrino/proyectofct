<?php 
include("../../funciones/funciones.php");

	cabecera("Modificar historial de alumno.","estilos.css");

	$conexion=Conectarse("mydb"); 
 
		$codigo=$_POST['codigo'];
 
			$q = "select * from historial_alumnos where codigo ='$codigo'";
			$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
 
	if ($total>0){
		$fila = mysql_fetch_assoc($resultado);   
?>
<form action="" method="post">
	<table>
		<tr>
			<td>
				<label for="grupo">Grupo: </label>
			</td>
			<td>
				<select id="grupo">
				<?php
				generar_selectmod('grupos','abreviatura')
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="alumnos">Alumno: </label>
			</td>
			<td>
				<select id="alumnos">
				<?php
				generar_selectmod('alumnos','nombre')
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="Curso">curso: </label>
			</td>
			<td>
				<input type="text" name="curso" value="<?php echo $Post['curso']; ?>" id="curso">
			</td>
		</tr>
</table>
		<input type="reset" id="limpiar" name="limpiar" value="Limpiar" />
		<input type="submit" id="enviar" name="enviar" value="Guardar" />
</form>
<?php
}
	mysql_free_result($resultado);
		mysql_close($conexion);
?>
</body>
</html>