<?php 
include("../../funciones/funciones.php");

cabecera("Modificar Grupo.","estilos.css");
 
$conexion=Conectarse("mydb"); 
 
$codigo=$_POST['codigo'];
 
$q = "select * from grupos where codigo ='$codigo'";
$resultado = mysql_query($q,$conexion) or die(mysql_error());
$total= mysql_num_rows($resultado);
 
 
if ($total>0){
    $fila = mysql_fetch_assoc($resultado);   
?>

		<form method="post" action="modificar.php">
			<table>
				<tr>
					<th><label for="abreviatura">Abreviatura:</label></th>
					<td><input  id="abreviatura" id="abreviatura" type="text"  name="nombre" size="20" value="<?php echo $fila['abreviatura']; ?>" /></td>
				</tr>
				<tr>
					<th><label for="denominacion">Denominacion:</label></th>
					<td><input id="denominacion" type="text"  name="denominacion" size="40" value="<?php echo $fila['denominacion']; ?>" /></td>
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

<?php
}
mysql_free_result($resultado);
mysql_close($conexion);
?>
</body>
</html>