<?php 
include("../funciones.php");
session_start();
    if(isset($_SESSION["usuario"]))
    {
        $usuario=unserialize($_SESSION["usuario"]);
       
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
		<?php ver_contenido("usuarios","Usuarios","los usuarios","un usuario nuevo");?>
		<?php ver_buscar("usuarios","Usuarios","los usuarios","un usuario nuevo");?>
	</div>
	<div id="formbuscar">
	
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