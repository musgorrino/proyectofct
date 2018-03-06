<?php 
include("../../funciones/funciones.php");

	cabecera("Modificar Alumno.","estilos.css");

	$conexion=Conectarse("mydb"); 
 
		$codigo=$_POST['codigo'];
 
		$q = "select * from alumnos where codigo ='$codigo'";
		$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
 
	if ($total>0){
		$fila = mysql_fetch_assoc($resultado);   
?>

		<form method="post" action="modificar.php">
			<table>
				<tr>
					<th><label for="nombre">Nombre:</label></th>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="<?php echo $fila['nombre']; ?>" /></td>
				</tr>
				<tr>
					<th><label for="apellidos">Apellidos:</label></th>
					<td><input id="apellidos"type="text"  name="apellidos" size="20" value="<?php echo $fila['apellidos']; ?>" /></td>
				</tr>
				<tr>
					<th><label for="fecnac">Fecha Nacimiento:</label></th>
					<td><input id="fecnac" type="text"  name="fecnac" size="20" value="<?php echo $fila['fecnac']; ?>" /></td>
				</tr>
				<tr>
					<th><label for="telefono">Telefono:</label></th>
					<td><input id="telefono" type="text"  name="telefono" size="20" value="<?php echo $fila['telefono']; ?>" /></td>
				</tr>
				<tr>
					<th><label  for="email">Email:</label></th>
					<td><input id="email" type="text"  name="email" size="20" value="<?php echo $fila['email']; ?>" /></td>
				</tr>
				<tr>
					<th><label  for="grupo">Grupo:</label></th>
					<td><select name="grupo" id="grupo"><?php generar_select("grupos","abreviatura")?></td>
				</tr>				
				<tr>
					<th><label  for="curso">Curso:</label></th>
					<td><select name="curso" id="curso"><?php generar_select("historial","curso")?></td>
				</tr>
				<tr>
					<th> ¿Sabes Euskera?</th> 
					<td>  <label for="si">Si</label>
							<input type="radio" id="si" name="euskera" value="si">
						 <label for="no">No</label>
							 <input type="radio" id="no" name="euskera" value="no">
					</td>
				</tr>
				<tr>
					<th> ¿Tienes Carnet de conducir?</th> 
					<td>  <label for="si">Si</label>
							<input type="radio" id="si" name="carnet" value="si">
						 <label for="no">No</label>
							 <input type="radio" id="no" name="carnet" value="no">
					</td>
				</tr>
			</table>
			<p>
				<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
			</p>
			<p>
				<input type="reset" id="limpiar" name="limpiar" value="Limpiar" />
				<input type="submit" id="enviar" name="enviar" value="Guardar" />
			</p>
		</form>

<?php
}
	mysql_free_result($resultado);
		mysql_close($conexion);
?>

</body>
</html>