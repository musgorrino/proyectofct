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
		<?php ver_contenido("cilos_formativos","Ciclos Formativos","los ciclos formativos","un ciclo formativo nuevo");?>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>