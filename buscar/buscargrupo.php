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
						<td><label for="cilco"> Cilco</label></td>
						<td><input type="text" name="cilco" id="cilco"  value="" placeholder="Inserte cilco"/></td>
						
						<td><label for="tutor">Tutor/a </label></td>
						<td><input type="text" name="tutor" id= "tutor" value="" placeholder="Inserta tutor/a"/></td>
					</tr>
							
							<td><label for="tutorpracticas"> Tutor de practicas </label></td>
							<td><input type="text" name="tutorpracticas" id="tutorpracticas" placeholder="Inserte Tutor de practicas"/></td>

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