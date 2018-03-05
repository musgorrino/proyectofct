<?php 
include("../../funciones/funciones.php");

cabecera("Insertar Grupo.","estilos.css");

?>
		<form method="post" action="insertar.php">
			<table>
				<tr>
					<th><label for="abreviatura">Abreviatura:</label></th>
					<td><input id="abreviatura" id="abreviatura" type="text"  name="nombre" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label  for="denominacion">Denominacion:</label></th>
					<td><input id="denominacion" type="text"  name="denominacion" size="40" value="" /></td>
				</tr>
			
				<tr>
					<th><label  for="tutor">Tutor:</label></th>
					<td><select name="tutor" id="tutor"><?php generar_select("profesores","tutor")?></td>
				</tr>				
				<tr>
					<th><label  for="tutorpracticas">Tutor Practicas:</label></th>
					<td><select name="tutorpracticas" id="tutorpracticas"><?php generar_select("profesores","tutorpracticas")?></td>
				</tr>
				<tr>
					<th><label  for="ciclo">Ciclo:</label></th>
					<td><select name="ciclo" id="ciclo"><?php generar_select("ciclo","nombre")?></td>
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