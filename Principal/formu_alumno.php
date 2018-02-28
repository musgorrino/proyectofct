<?php 
include("funciones.php");

cabecera("Buscar Alumno.","estilos.css");

$conexion=Conectarse(""); #Meter el nombre

$codigo=$_POST['codigo'];

$q = "select * from alumnos where codigo ='$codigo'";
$resultado = mysql_query($q,$conexion) or die(mysql_error());
$total= mysql_num_rows($resultado);

if ($total>0)
{
	$fila = mysql_fetch_assoc($resultado);
?>
		<form method="post" action="modifica.php">
			<table>
				<tr>
					<th><label id="nombre" for="nombre">Nombre:</label></th>
					<td><input type="text"  name="nombre" size="20" value="<?php echo $fila['nombre']; ?>" /></td>
				</tr>
				<tr>
					<th><label id="apellidos" for="apellidos">Apellidos:</label></th>
					<td><input type="text"  name="apellidos" size="40" value="<?php echo $fila['apellidos']; ?>" /></td>
				</tr>
				<tr>
					<th><label id="fecnac" for="fecnac">Fecha Nacimiento:</label></th>
					<td><input type="text"  name="fecnac" size="10" value="<?php echo $fila['fecnac']; ?>" /></td>
				</tr>
				<tr>
					<th><label id="telefono" for="telefono">Telefono:</label></th>
					<td><input type="text"  name="telefono" size="9" value="<?php echo $fila['telefono']; ?>" /></td>
				</tr>
				<tr>
					<th><label id="email" for="email">Email:</label></th>
					<td><input type="text"  name="email" size="20" value="<?php echo $fila['email']; ?>" /></td>
				</tr>
				<tr>
					<th></th>
				</tr>
				<tr>
					<th></th>
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
		<input type="hidden" name="idalumno" value="<?php echo $idalumno; ?>" />
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