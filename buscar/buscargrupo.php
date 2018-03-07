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
		<?php ver_buscar("grupos","Grupos","los Grupos","un grupo nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de los Grupos </h3>
			<table>
				<form action="buscargrupo.php" method="post">
					<tr>
						
						<td><label for="Abreviatura">Abreviatura </label></td>
						<td><input type="text" name="Abreviatura" id="Abreviatura"  value="<?php echo $_POST['Abreviatura']; ?>" placeholder="Abreviatura"></td>
					
						<td><label for="Denominacion">Denominacion</label></td>
						<td>	<input type="text"	name="Denominacion" id="Denominacion" value="<?php echo $_POST['Denominacion']; ?>"  placeholder=" Inserte denominacion"/></td>
					</tr>	
					<tr>	
						<td><label for="ciclo"> Cilco</label></td>
						<td><input type="text" name="cilco" id="ciclo"  value="<?php echo $_POST['ciclo']; ?>" placeholder="Inserte cilco"/></td>
						
						<td><label for="tutor">Tutor/a </label></td>
						<td><input type="text" name="tutor" id= "tutor" value="<?php echo $_POST['tutor']; ?>" placeholder="Inserta tutor/a"/></td>
					</tr>
							
							<td><label for="tutorpracticas"> Tutor de practicas </label></td>
							<td><input type="text" name="tutorpracticas" id="tutorpracticas" value="<?php echo $_POST['tutorpracticas']; ?>" placeholder="Inserte Tutor de practicas"/></td>

							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
		</div>
		<div>
		<?php 
$abreviatura=recoger($_Post['abreviatura']);
$denominacion=recoger($_Post['denominacion']);
$ciclo=recoger($_Post['ciclo']);
$tutor=recoger($_Post['tutor']);
$tutorpracticas=recoger($_Post['tutorpracticas']);
$busqueda=array();
if($abreviatura==0){
$busqueda[]="abreviatura";
}
if($denominacion==0){
$busqueda[]="denominacion";
}
if($ciclo==0){
$busqueda[]="ciclo";
}
if($tutor==0){
$busqueda[]="tutor";
}
if($tutorpracticas==0){
$busqueda[]="tutorpracticas";
}
preparar_busqueda("grupos",$busqueda);
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
		<?php ver_buscar("grupos","Grupos","los Grupos","un grupo nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de los Grupos </h3>
			<table>
				<form action="buscargrupo.php" method="post">
					<tr>
						
						<td><label for="Abreviatura">Abreviatura </label></td>
						<td><input type="text" name="Abreviatura" id="Abreviatura"  value="" placeholder="Abreviatura"></td>
					
						<td><label for="Denominacion">Denominacion</label></td>
						<td>	<input type="text"	name="Denominacion" id="Denominacion" value=""  placeholder=" Inserte denominacion"/></td>
					</tr>	
					<tr>	
						<td><label for="cilco"> Ciclo</label></td>
						<td><input type="text" name="ciclo" id="ciclo"  value="" placeholder="Inserte ciclo"/></td>
						
						<td><label for="tutor">Tutor/a </label></td>
						<td><input type="text" name="tutor" id= "tutor" value="" placeholder="Inserta tutor/a"/></td>
					</tr>
							
							<td><label for="tutorpracticas"> Tutor de practicas </label></td>
							<td><input type="text" name="tutorpracticas" id="tutorpracticas" value="" placeholder="Inserte Tutor de practicas"/></td>

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