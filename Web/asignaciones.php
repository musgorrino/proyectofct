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
		<center><?php ver_contenido("asignaciones","Asignaciones","las asignaciones","una asignacion nueva");?></center>
		
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