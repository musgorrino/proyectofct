<?php 
include("../../funciones/funciones.php");

		cabecera("Modificar Ciclo.","estilos.css");

		$conexion=Conectarse("mydb"); 
		 
		$codigo=$_POST['codigo'];
		 
		$q = "select * from ciclos_formativos where codigo ='$codigo'";
		$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
		 
 
	if ($total>0){
    $fila = mysql_fetch_assoc($resultado);   
?>


		<form method="post" action="modificar.php">
			<table>
				<tr>
					<th><label for="nombre">Nombre:</label></th>
					<td><input id="nombre" type="text"  name="nombre" size="40" value="<?php echo $fila['nombre']; ?>" /></td>
				</tr>
				<tr>
					<th><label  for="abreviatura">Abreviatura:</label></th>
					<td><input id="abreviatura" type="text"  name="abreviatura" size="20" value="<?php echo $fila['abreviatura']; ?>" /></td>
				</tr>
				
				<tr>
					<th><label  for="grado">Grado:</label></th>
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
<?php
}
mysql_free_result($resultado);
mysql_close($conexion);
?>

</body>
</html>