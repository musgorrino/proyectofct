<?php 
include("../../funciones/funciones.php");

cabecera("Insertar Profesor.","estilos.css");

?>
		<form method="post" action="insertar.php"> 
			<table>
				<tr>
					<th><label  for="codigointerprof">Codigo Interno:</label></th> 
					<td><input type="text" id="codigointerprof" name="codigointerprof" size="20" value="" /></td>
				
					<th><label  for="nombre">Nombre:</label></th>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label  for="apellidos">Apellidos:</label></th>
					<td><input id="apellidos" type="text"  name="apellidos" size="40" value="" /></td>
				
					<th><label  for="telefono">Telefono:</label></th>
					<td><input id="telefono"type="text"  name="telefono" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label  for="email">Email:</label></th>
					<td><input id="email" type="text"  name="email" size="20" value="" /></td>
				
					<td><input type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td><input type="submit" id="enviar" name="enviar" value="Guardar" /></td>
				
			</table>
	
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
</form>


</body>
</html>