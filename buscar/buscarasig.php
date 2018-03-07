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
			<h3> Buscar informacion de las Asignaciones </h3>
			<center>
			<table>
				<form action="buscarasig.php" method="post">
					<tr>
						
						<td><label id="empresa">Empresa </label></td>
						<td><input type="text" name="empresa" value="<?php echo $_POST['empresa']; ?>" placeholder="empresa"></td>
					
						<td><label id="contratacionalumno">Alumnx Contratadx</label></td>
						<td>	<input type="text"	name="contratacionalumno" value="<?php echo $_POST['contratacionalumno']; ?>" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label id="codigoalumno"> Alumno </label></td>
						<td><input type="text" name="codigoalumno" value="<?php echo $_POST['codigoalumno']; ?>"	placeholder="Nombre"/></td>
						
						<td><label  id="abreviatura"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura" value="<?php echo $_POST['abreviatura']; ?>"	placeholder="Inserta abreviatura"/></td>
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
		<div><?php 

$empresa=recoger($_POST['empresa']);
$contratacionalumno=recoger($_POST['contratacionalumno']);
$codigoalumno=recoger($_POST['codigoalumno']);
$abreviatura=recoger($_POST['abreviatura']);
$busqueda=array();
if($empresa==0){
$busqueda[]="empresa";
}
if($contratacionalumno==0){
$busqueda[]="contratacionalumno";
}
if($codigoalumno==0){
$busqueda[]="codigoalumno";
}
if($abreviatura==0){
$busqueda[]="abreviatura";
}
preparar_busqueda("asignacion",$busqueda);
?>
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
			<h3> Buscar informacion de las Asignaciones </h3>
			<center>
			<table>
				<form action="buscarasig.php" method="post">
					<tr>
						
						<td><label id="empresa">Empresa </label></td>
						<td><input type="text" name="empresa" value="" placeholder="empresa"></td>
					
						<td><label id="contratacionalumno">Alumnx Contratadx</label></td>
						<td>	<input type="text"	name="contratacionalumno" value="" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label id="codigoalumno"> Alumno </label></td>
						<td><input type="text" name="codigoalumno" value=""	placeholder="Nombre"/></td>
						
						<td><label id="abreviatura"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura" value=""	placeholder="Inserta abreviatura"/></td>
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