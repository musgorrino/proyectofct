<?php 
include("../funciones.php");
cabecera("Gestion FCT", "estilo.css");
 if($u==0)
 {?>
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
		<center><?php ver_contenido("empresas","Empresas","las empresas","una empresa nueva");?></center>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>
 <?php
 }
 else
 {
	 header("location:../indice.php");
 }

?>
