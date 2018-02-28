<?php 
include("../../funciones/funciones.php");

cabecera("Insertar Alumno.","estilos.css");

?>
		<form method="post" action="insertar.php">
			<table>
				<tr>
					<th><label for="nombre">Nombre:</label></th>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label for="apellido">Apellido:</label></th>
					<td><input id="apellido" type="text"  name="apellido" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label for="fecnac">Fecha Nacimiento:</label></th>
					<td><input id="fecnac" type="text"  name="fecnac" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label for="telefono">Telefono:</label></th>
					<td><input id="telefono" type="text"  name="telefono" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label for="email">Email:</label></th>
					<td><input id="email" type="text"  name="email" size="20" value="" /></td>
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


</body>
</html>