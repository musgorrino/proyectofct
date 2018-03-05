<?php 
include("../../funciones/funciones.php");

cabecera("Insertar Ciclo.","estilos.css");

?>
		<form method="post" action="insertar.php">
			<table>
				<tr>
					<th><label  for="nombre">Nombre:</label></th>
					<td><input id="nombre" type="text"  name="nombre" size="40" value="" /></td>
				</tr>
				<tr>
					<th><label  for="abreviatura">Abreviatura:</label></th>
					<td><input id="abreviatura" type="text"  name="abreviatura" size="20" value="" /></td>
				</tr>
				
				<tr>
					<th><label for="grado">Grado:</label></th>
					<td><select name="grado" id="grado">
						<option value="FPB">FPB</option>
						<option value="medio">Grado Medio</option>
						<option value="superior">Grado Superior</option>
					</select></td>
				</tr>				
				<tr>
					<th><label  for="curso">Curso:</label></th>
					<td><select name="curso" id="curso"><?php generar_select("historial","curso")?></td>
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
