<?php 
include("../../funciones/funciones.php");

	cabecera("Modificar empresa.","estilos.css");

	$conexion=Conectarse("mydb"); 
 
		$codigo=$_POST['codigo'];
 
			$q = "select * from empresas where codigo ='$codigo'";
			$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
 
	if ($total>0){
		$fila = mysql_fetch_assoc($resultado);   
?>
<form action="" method="post">
	<table>
		<tr>
			<td>
				<label for="nombre">Nombre: </label>
			</td>
			<td>
				<input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" id="nombre">
			</td>
		</tr>
		<tr>
			<td>
				<label for="nif">Nif: </label>
			</td>
			<td>
				<input type="text" name="nif" value="<?php echo $fila['nif']; ?>" id="nif">
			</td>
		</tr>
		<tr>
			<td>
				<label for="titularidad">titularidad: </label>
			</td>
			<td>
				<input type="text" name="titularidad" value="<?php echo $fila['titularidad']; ?>" id="titularidad">
			</td>
		</tr>
		<tr>
			<td>
				<label for="direccion">direccion: </label>
			</td>
			<td>
				<input type="text" name="direccion" value="<?php echo $fila['direccion']; ?>" id="direccion">
			</td>
		</tr>
		<tr>
			<td>	
				<label for="poblacion">poblacion: </label>
			</td>
			<td>
				<input type="text" name="poblacion" value="<?php echo $fila['poblacion']; ?>" id="poblacion">
			</td>
		</tr>
		<tr>
			<td>
				<label for="provincia">provincia: </label>
			</td>
			<td>
				<input type="text" name="provincia" value="<?php echo $fila['provincia']; ?>" id="provincia">
			</td>
		</tr>
		<tr>
			<td>
				<label for="cp">Codigo Postal: </label>
			</td>
			<td>
				<input type="text" name="cp" value="<?php echo $fila['cp']; ?>" id="cp">
			</td>
		</tr>
		<tr>
			<td>
				<label for="telefono">telefono: </label>
			</td>
			<td>
				<input type="text" name="telefono" value="<?php echo $fila['telefono']; ?>" id="telefono">
			</td>
		</tr>
		<tr>
			<td>
				<label for="fax">fax: </label>
			</td>
			<td>
				<input type="text" name="fax" value="<?php echo $fila['fax']; ?>" id="fax">
			</td>
		</tr>	
		<tr>
			<td>
				<label for="repempresa">representante de la empresa: </label>
			</td>
			<td>
				<input type="text" name="repempresa" value="<?php echo $fila['repempresa']; ?>" id="repempresa">
			</td>
		</tr>
		<tr>
			<td>
				<label for="personacontacto">persona de contacto: </label>
			</td>						<td>
				<input type="text" name="personacontacto" value="<?php echo $fila['personacontacto']; ?>" id="personacontacto">
			</td>
		</tr>
		<tr>
			<td>
				<label for="actividadempresa">actividad de la empresa: </label>
			</td>
			<td>
				<input type="text" name="actividadempresa" value="<?php echo $fila['actividadempresa']; ?>" id="actividadempresa">
			</td>
		</tr>
		<tr>
			<td>
				<label for="numtrabajadores">numero de trabajadores: </label>
			</td>
			<td>
				<input type="text" name="numtrabajadores" value="<?php echo $fila['numtrabajadores']; ?>" id="numtrabajadores">
			</td>
		</tr>
		<tr>
			<td>
				<label for="kmscentro">kilometros desde el centro: </label>
			</td>
			<td>
				<input type="text" name="kmscentro" value="<?php echo $fila['kmscentro']; ?>" id="kmscentro">
			</td>
		</tr>	
		<tr>
			<td>
				<label for="horariopracticas">horario de las practicas: </label>
			</td>	
			<td>
				<input type="text" name="horariopracticas" value="<?php echo $fila['horariopracticas']; ?>" id="horariopracticas">
			</td>
		</tr>	
		<tr>
			<td>
				convenio:
			</td>
			<td>
				
					<label for="conveniosi">si </label>
					<input type="radio" <?php ponerc('convenio','si')?> name="convenio" value="si" id="conveniosi">
				
					<label for="conveniono">no </label>
					<input type="radio" <?php ponerc('convenio','no')?> name="convenio" value="no" id="conveniono" >
				
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