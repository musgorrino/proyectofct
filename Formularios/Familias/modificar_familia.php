<?php 
include("../../funciones/funciones.php");

	cabecera("Modificar Familia.","estilos.css");
	 
	$conexion=Conectarse("mydb"); 
	 
	$codigo=$_POST['codigo'];
	 
	$q = "select * from familias_profesionales where codigo ='$codigo'";
	$resultado = mysql_query($q,$conexion) or die(mysql_error());
	$total= mysql_num_rows($resultado);
	 
 
if ($total>0){
    $fila = mysql_fetch_assoc($resultado);   
?>


		<form method="post" action="modificar.php">
			<table>
				<tr>
					<th><label for="nombre">Nombre:</label></th>
					<td><input id="nombre" type="text"  name="nombre" size="30" value="<?php echo $fila['nombre']; ?>" /></td>
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

<?php
}
mysql_free_result($resultado);
mysql_close($conexion);
?>
</body>
</html>