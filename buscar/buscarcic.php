<?php 
include("../funciones.php");
 
cabecera("Gestion FCT", "../Web/estilo.css");
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
				<form action="buscarphpasignaciones.php" method="post">
					<tr>
						
						<td><label id="nombre">Familias Profesionales </label></td>
						<td><input type="text" name="nombre" placeholder="Inserta Familia Profesional"></td>
					</tr>	
					<tr>	
						<td><label id="nivel"> Nivel </label></td>
						<td><input type="text" name="nivel"	placeholder="¿Medio o Superior?"/></td>
					</tr>
					<tr>	
						<td><label id="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura"	placeholder="Inserta abreviatura"/></td>
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

</body>
</html>