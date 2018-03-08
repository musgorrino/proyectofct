<?php 
include("../funciones.php");
 
cabecera("Gestion FCT", "../Web/estilo.css");

if(isset($_POST['enviar'])){
?>
<div id="contenedor">
	<div id="cabecera">
		<div id="login">
		</div>
		<div id="logo">
			<?php ver_logo("../imagenes/logo.png");?>
		</div>
		<div id="menu">
			<?php ver_menu();?>				
		</div>
	</div>
	
	<div id="contenido">
		<center><?php ver_buscar("asignaciones","Asignaciones","las asignaciones","una asignacion");?></center>
		<div id="formbuscar">
		<center>	<h3> Buscar informacion de las Asignaciones </h3>
			<table>
				<form action="buscarasig.php" method="post">
					<tr>
						
						<td><label for="empresa">Empresa </label></td>
						<td><input type="text" name="empresa" id="empresa" value="<?php echo $_POST['empresa']; ?>" placeholder="empresa"></td>
					
						<td><label for="contratado">Alumnx Contratadx</label></td>
						<td><input type="text"	name="contratado" id="contratado" value="<?php echo $_POST['contratado']; ?>" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label for="alumno"> Alumno </label></td>
						<td><input type="text" name="alumno" id="alumno" value="<?php echo $_POST['alumno']; ?>"	placeholder="Nombre"/></td>
						
						<td><label  for="abreviatura"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura" id="abreviatura" value="<?php echo $_POST['abreviatura']; ?>"	placeholder="Inserta abreviatura"/></td>
					</tr>
					<tr>
					<tr>		<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/></td>
					</tr>
				</form>
			</table>
			</center>
		</div>
		<div><center><?php 

$empresa=recoger($_POST['empresa']);
$contratacionalumno=recoger($_POST['contratado']);
$alumno=recoger($_POST['alumno']);
$abreviatura=recoger($_POST['abreviatura']);
$busqueda=array();
if($empresa==0){
$busqueda[]="empresa";
}
if($contratacionalumno==0){
$busqueda[]="contratado";
}
if($alumno==0){
$busqueda[]="alumno";
}
if($abreviatura==0){
$busqueda[]="abreviatura";
}
preparar_busqueda("asignacion",$busqueda);
?></center>
		</div>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>


<?php
}
else {
?>
<div id="contenedor">
	<div id="cabecera">
		<div id="login">
		</div>
		<div id="logo">
			<?php ver_logo("../imagenes/logo.png");?>
		</div>
		<div id="menu">
			<?php ver_menu();?>				
		</div>
	</div>
	
	<div id="contenido">
	<center>	<?php ver_buscar("asignaciones","Asignaciones","las asignaciones","una asignacion");?></center>
		<div id="formbuscar">
		<center><h3> Buscar informacion de las Asignaciones </h3>
			
			<table>
				<form action="buscarasig.php" method="post">
					<tr>
						
						<td><label for="empresa">Empresa </label></td>
						<td><input type="text" name="empresa" id="empresa" value="" placeholder="empresa"></td>
					
						<td><label for="contratado">Alumnx Contratadx</label></td>
						<td>	<input type="text"	name="contratado" id="contratado" value="" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label for="alumno"> Alumno </label></td>
						<td><input type="text" name="alumno" id="alumno" value=""	placeholder="Nombre"/></td>
						
						<td><label for="abreviatura"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura" id="abreviatura" value=""	placeholder="Inserta abreviatura"/></td>
					</tr>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/></td>
					</tr>
				</form>
			</table>
			</center>
		</div>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>
<?php
}
?>
</body>
</html>