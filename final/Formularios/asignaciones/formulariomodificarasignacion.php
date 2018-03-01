<?php 
include("../../funciones/funciones.php");

	cabecera("Modificar asignacion.","estilos.css");

	$conexion=Conectar("localhost","root","","mydb"); 
 
		$codigo=$_POST['codigo'];
 
			$q = "select * from asignaciones where codigo ='$codigo'";
			$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
 
	if ($total>0){
		$fila = mysql_fetch_assoc($resultado);   
?>
<form action="" method="post">
	<table>
		<tr>
			<td>
				<label for="empresa">Empresa: </label>
			</td>
			<td>
				<select name="empresa" id="empresa">
				<?php
				generar_select('empresas','nombre')
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="alumnos">Alumno: </label>
			</td>
			<td>
				<select name="alumnos" id="alumnos">
				<?php
				generar_select('alumnos','nombre')
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="curso">Curso: </label>
			</td>
			<td>
				<input type="text" name="curso" value="<?php echo $Post['curso']; ?>" id="curso">
			</td>
		</tr>
		<tr>
			<td>
				<label for="horario">Horario: </label>
			</td>
			<td>
				<input type="text" name="horario" value="<?php echo $Post['horario']; ?>" id="horario">
			</td>
		</tr>
		<tr>
			<td>
				<label for="observaciones">Observaciones: </label>
			</td>
			<td>
				<textarea name="observaciones" id="observaciones"><?php echo $Post['observaciones']; ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label for="trabajodesempenado">trabajo desempeñado: </label>
			</td>
			<td>
				<textarea name="trabajodesempenado" id="trabajodesempenado"><?php echo $Post['trabajodesempenado']; ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Contratacion del alumno:
			</td>
			<td>
				
					<label for="contratacionsi">si </label>
					<input type="radio" name="contratacionsi" value="si" id="contratacionsi">
				
					<label for="contratacionno">no </label>
					<input type="radio" name="contratacionno" value="no" id="contratacionno">
				
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