<?php 
include("../funciones.php");
include("../funciones_insertar.php");
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
			<?php ver_menu();?>				
		</div>
	</div>
	
	<div id="contenido">
		<?php modificar_alumnos();?>
	</div>	
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>