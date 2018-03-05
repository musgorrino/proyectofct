<?php 
include("../../funciones/funciones.php");

cabecera("Insertar Familia.","estilos.css");

?>
		<form method="post" action="insertar.php">
			<table>
				<tr>
					<th><label  for="nombre">Nombre:</label></th>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				</tr>
				<tr>
					<th><label  for="coordinador">Coordinador:</label></th>
					<td><select name="coordinador" id="coordinador"><?php generar_select("profesores","nombre")?></td>
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