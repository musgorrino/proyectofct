<?php 
include("../../funciones/funciones.php");

cabecera("Insertar Familia.","estilos.css");

?>
		<form method="post" action="insertar.php">
			<table>
				<tr>
					<td><label  for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				
					<tD><label  for="coordinador">Coordinador:</label></tD>
					<td><select name="coordinador" id="coordinador"><?php generar_select("profesores","nombre")?></td>
				</tr>
				<tr>
					<td colspan="2"> <input type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td colspan="2"><input type="submit" id="enviar" name="enviar" value="Guardar" /></td>
				</tr>
			</table>
	
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
	
</form>


</body>
</html>