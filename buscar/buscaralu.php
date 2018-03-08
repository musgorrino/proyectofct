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
		<center><?php ver_buscar("alumnos","Alumnos","los alumnos","un alumno nuevo");?></center>
		<div id="formbuscar">
			<center><h3> Buscar informacion de alumnxs </h3>
		
			<table>
				<form action="buscaralu.php" method="post">
					<tr>
						
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="<?php echo $_POST['nombre']; ?>" placeholder="Nombre"></td>
					
						<td><label for="euskera">Conocimiento de Euskera</label></td>
						<td><input type="text" id="euskera"	name="euskera" value="<?php echo $_POST['euskera']; ?>" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label for="carnet"> Dispone de carnet de conducir </label></td>
						<td><input type="text" id="carnet" name="carnet" value="<?php echo $_POST['carnet']; ?>"	placeholder="¿Si o No?"/></td>
						
						<td><label for="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" id="ciclo" name="abreviatura" value="<?php echo $_POST['abreviatura']; ?>"	placeholder="Inserta abreviatura"/></td>
					</tr>
							
							<td><label for="curso"> Curso </label></td>
							<td><input type="text" id="curso" name="curso" value="<?php echo $_POST['curso']; ?>"	placeholder="Inserte curso"/></td>
							
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
			</center>
		</div>
		<div><center>
<?php
		
$nombre=recoger($_POST['nombre']);
$uskera=recoger($_POST['euskera']);
$carnet=recoger($_POST['carnet']);
$abreviatura=recoger($_POST['abreviatura']);
$curso=recoger($_POST['curso']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($uskera==0){
    $busqueda[]="euskera";
}
if($carnet==0){
    $busqueda[]="carnet";
}
if($abreviatura==0){
    $busqueda[]="abreviatura";
}
if($curso==0){
    $busqueda[]="curso";
}
preparar_busqueda("alumno",$busqueda);
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
	<center>	<?php ver_buscar("alumnos","Alumnos","los alumnos","un alumno nuevo");?></center>
		<div id="formbuscar">
			<center><h3> Buscar informacion de alumnxs </h3>
			<table>
				<form action="buscaralu.php" method="post">
					<tr>
						
						<td><label id="nombre">Nombre </label></td>
						<td><input type="text" name="nombre" value="" placeholder="Nombre"></td>
					
						<td><label id="euskera">Conocimiento de Euskera</label></td>
						<td>	<input type="text"	name="euskera" value="" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label id="carnet"> Dispone de carnet de conducir </label></td>
						<td><input type="text" name="carnet" value=""	placeholder="¿Si o No?"/></td>
						
						<td><label id="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura" value=""	placeholder="Inserta abreviatura"/></td>
					</tr>
							
							<td><label id="curso"> Curso </label></td>
							<td><input type="text" name="curso" value=""	placeholder="Inserte curso"/></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/>
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