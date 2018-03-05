<?php
// FORMULARIOS INSERTAR //
	
	// ALUMNOS //
	function insertar_alumno(){
?>
	<center></br><h3> INSERTAR UN NUEVO ALUMNO </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
		<div id="insertar_modificar">
	
			<form method="post" action="insertar.php">
			<table>
				<tr>
					<td><label for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				
					<td><label for="apellido">Apellido:</label></td>
					<td><input id="apellido" type="text"  name="apellido" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label for="fecnac">Fecha Nacimiento:</label></td>
					<td><input id="fecnac" type="text"  name="fecnac" size="20" value="" /></td>
				
					<td><label for="telefono">Telefono:</label></td>
					<td><input id="telefono" type="text"  name="telefono" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input id="email" type="text"  name="email" size="20" value="" /></td>
				
					<td><label  for="grupo">Grupo:</label></td>
					<td><select name="grupo" id="grupo"><?php generar_select("grupos","abreviatura")?></select></td>
				</tr>				
				<tr>
					<td> ¿Sabes Euskera?</td> 
					<td>  <label for="si">Si</label>
							<input type="radio" id="si" name="euskera" value="si">
						 <label for="no">No</label>
							 <input type="radio" id="no" name="euskera" value="no">
					</td>
				
					<td> ¿Tienes Carnet de conducir?</td> 
					<td>  <label for="si">Si</label>
							<input type="radio" id="si" name="carnet" value="si">
						 <label for="no">No</label>
							 <input type="radio" id="no" name="carnet" value="no">
					</td>
				</tr>
				<tr>
					<td><label  for="curso">Curso:</label></td>
					<td><select name="curso" id="curso"><?php generar_select("historial_alumnos","curso")?></select></td>
					<td><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
				</tr>
			</table>
			
					<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
			</form>
		</div>
	<?php
	}
	
	// INSERTAR PROFESORES //
	
	function insertar_profesor(){
	?>
	<center></br><h3> INSERTAR UN NUEVO ALUMNO </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
	<form method="post" action="insertar.php"> 
			<table>
				<tr>
					<td><label  for="codigointerprof">Codigo Interno:</label></td> 
					<td><input type="text" id="codigointerprof" name="codigointerprof" size="20" value="" /></td>
				
					<td><label  for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label  for="apellidos">Apellidos:</label></td>
					<td><input id="apellidos" type="text"  name="apellidos" size="20" value="" /></td>
				
					<td><label  for="telefono">Telefono:</label></td>
					<td><input id="telefono"type="text"  name="telefono" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label  for="email">Email:</label></td>
					<td><input id="email" type="text"  name="email" size="20" value="" /></td>
				
					<td><input type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td><input type="submit" id="enviar" name="enviar" value="Guardar" /></td>
				
			</table>
	
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
</form>
</div>
<?php
}
?>