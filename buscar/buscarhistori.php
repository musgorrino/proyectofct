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
		<?php ver_buscar("historiales","Historiales","los historiales","un historial nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de los Historiales </h3>
			<table>
				<form action="buscarhistori.php" method="post">
					<tr>
						<td><label for="grupo">Grupo </label></td>
						<td><input type="text" id="grupo" name="grupo" value="<?php echo $_POST['grupo']; ?>" placeholder="Inserte nombre grupo"></td>	
					</tr>	
					<tr>	
						<td><label for="alumno">Alumno</label></td>
						<td><input type="text" id="alumno"	name="alumno" value="<?php echo $_POST['alumno']; ?>" placeholder="Inserte nombre alumno"/></td>
					</tr>
					<tr>
						<td><label for="curso">Curso</label></td>
						<td><input type="text" id="curso"	name="curso" value="<?php echo $_POST['curso']; ?>" placeholder="Inserte curso"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
		</div>
		<div>
		<?php 
$grupo=recoger($_POST['grupo']);
$alumno=recoger($_POST['alumno']);
$curso=recoger($_POST['curso']);
$busqueda=array();
if($grupo==0){
$busqueda[]="grupo";
}
if($alumno==0){
$busqueda[]="alumno";
}
if($curso==0){
$busqueda[]="curso";
}
preparar_busqueda("historial_alumnos",$busqueda);
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
		<?php ver_buscar("historiales","Historiales","los historiales","un historial nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de los Historiales </h3>
			<table>
				<form action="buscarhistori.php" method="post">
					<tr>
						<td><label for="grupo">Grupo </label></td>
						<td><input type="text" id="grupo" name="grupo" value="" placeholder="Inserte nombre grupo"></td>	
					</tr>	
					<tr>	
						<td><label for="alumno">Alumno</label></td>
						<td><input type="text" id="alumno"	name="alumno" value="" placeholder="Inserte nombre alumno"/></td>
					</tr>
					<tr>
						<td><label for="curso">Curso</label></td>
						<td><input type="text" id="curso"	name="curso" value="" placeholder="Inserte curso"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
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