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
		<?php ver_buscar("empresas","Empresas","las empresas","una empresa nueva");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las empresas </h3>
			<table>
				<form action="buscarphpempresas.php" method="post">
					<tr>
						
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" name="nombre" id=nombre=  value="" placeholder="Nombre"></td>
					
						<td><label for="titularidad">Titularidad</label></td>
						<td>	<input type="text"	name="titularidad" id="titularidad" value=""  placeholder="¿Publica o Privada?"/></td>
					</tr>	
					<tr>	
						<td><label for="Poblacion"> Población</label></td>
						<td><input type="text" name="Poblacion" id="Poblacion"  value="" placeholder="Inserte población"/></td>
						
						<td><label for="provincia"> Provincia </label></td>
						<td><input type="text" name="provincia" id= "provinciaa" value="" placeholder="Inserta Provincia"/></td>
					</tr>
							
							<td><label for="convenio"> Convenio </label></td>
							<td><input type="text" name="convenio" id="convenio" placeholder="¿Si o No?"/></td>
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