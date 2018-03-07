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
		<?php ver_buscar("ciclo","Ciclos","Ciclos Formativos","un ciclo");?>
		<div id="formbuscar">
			&nbsp;&nbsp;&nbsp;<h3> Buscar informacion de los Ciclos Formativos </h3>
			<center>
			<table>
				<form action="buscarcic.php" method="post">
					<tr>	
						<td><label for="nombre">Familias Profesionales </label></td>
						<td><input type="text" name="nombre" id="nombre" value="<?php echo $_POST['nombre']; ?>" placeholder="Inserta Familia Profesional"></td>
					</tr>	
					<tr>	
						<td><label for="nivel"> Nivel </label></td>
						<td><input type="text" name="nivel" id="nivel" value="<?php echo $_POST['nivel']; ?>"	placeholder="¿Medio o Superior?"/></td>
					</tr>
					<tr>	
						<td><label for="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura"  id="ciclo" value="<?php echo $_POST['abreviatura']; ?>"	placeholder="Inserta abreviatura"/></td>
					</tr>
							<td colspan="2"><
							<td><input class="botones" type="submit" name="enviar" value="Buscar"/></td>
					</tr>
				</form>
			</table>
			</center>
		</div>
		<div>
		<?php 

$abreviatura=recoger($_Post['abreviatura']);
$nivel=recoger($_Post['nivel']);
$familia=recoger($_Post['familia']);
$busqueda=array();
if($abreviatura==0){
 $busqueda[]="abreviatura";
}
if($nivel==0){
 $busqueda[]="nivel";
}
if($familia==0){
 $busqueda[]="familia";
}
preparar_busqueda("ciclos_formativos",$busqueda);
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
		<?php ver_buscar("ciclo","Ciclos","Ciclos Formativos","un ciclo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de los Ciclos Formativos </h3>
			<center>
			<table>
				<form action="buscarcic.php" method="post">
					<tr>
						
						<td><label for="nombre">Familias Profesionales </label></td>
						<td><input type="text" name="nombre" id="nombre" value="" placeholder="Inserta Familia Profesional"></td>
					</tr>	
					<tr>	
						<td><label for="nivel"> Nivel </label></td>
						<td><input type="text" name="nivel" id="nivel" value=""	placeholder="¿Medio o Superior?"/></td>
					</tr>
					<tr>	
						<td><label for="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura"  id="ciclo" value=""	placeholder="Inserta abreviatura"/></td>
					</tr>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
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