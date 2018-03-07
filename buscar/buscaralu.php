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
		<?php ver_buscar("usuarios","Usuarios","los usuarios","un usuario nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de alumnxs </h3>
			<table>
				<form action="buscaralu.php" method="post">
					<tr>
						
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="" placeholder="Nombre"></td>
					
						<td><label for="euskera">Conocimiento de Euskera</label></td>
						<td><input type="text" id="euskera"	name="euskera" value="" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label for="carnet"> Dispone de carnet de conducir </label></td>
						<td><input type="text" id="carnet" name="carnet" value=""	placeholder="¿Si o No?"/></td>
						
						<td><label for="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" id="ciclo" name="abreviatura" value=""	placeholder="Inserta abreviatura"/></td>
					</tr>
							
							<td><label for="curso"> Curso </label></td>
							<td><input type="text" id="curso" name="curso" value=""	placeholder="Inserte curso"/></td>
							
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

</body>
</html>