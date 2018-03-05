<?php 
include("../funciones/funciones.php");
 
cabecera("Gestion FCT", "estilo.css");
?>
<div id="contenedor">
	<div id="cabecera">
		<div id="login">
		</div>
		<div id="logo">
			<?php ver_logo("../imagenes/logo.png");?>
		</div>
		
		<div id="menu">
			<?php ver_menu()?>				
		</div>
		
	</div>
	
	
	<div id="contenido">
		<?php
		  ver_contenido("alumnos","Alumnos","los alumnos");
		?>
	</div>
		
<div id="pie">
		
		<div id="copyright" 
			 <a href="principal.php">Volver al Inicio</a> 
			<p>PAGINA WEB DESIGNADA POR GAMUSINO</p>
		
		</div>
	</div>
</div>

</body>
</html>