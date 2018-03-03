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
			
				<?php menu();?>				
		</div>
		
	</div>
	
	
	<div id="contenido">
		<?php
		  ver_contenido("alumnos","Alumnos","los alumnos","alumno");
		?>
	</div>
		
<div id="pie">
		
		<div id="copyright" class="container">
			 <a href="principal.php" class="button">Volver al Inicio</a> 
			<p>PAGINA WEB DESIGNADA POR GAMUSINO</p>
		
		</div>
	</div>
</div>

</body>
</html>