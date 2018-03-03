<?php 
include("../funciones/funciones.php");
 
cabecera("Gestion FCT", "estilo.css");
?>
<div id="contenedor">
	<div id="cabecera">
		<div id="login">
		</div>
		<div id="logo">
			<img src="../imagenes/logo.png"> 
		</div>
		<div id="menu">
			<?php ver_menu();?>				
		</div>
	</div>
	
	<div id="contenido">
		<?php ver_contenido("alumnos","Alumnos","los alumnos","alumno");?>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>