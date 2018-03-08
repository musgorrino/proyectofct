<?php
include("../funciones.php");
 
cabecera("Gestion FCT", "estilo.css");
    
    if($u==0)
    {
		/*lo que puede ver el usuario normal */
       
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
		<center><?php ver_contenido("alumnos","Alumnos","los alumnos","un alumno nuevo");?></center>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>

	<?php
	if(ad==1)
    {
			/*lo que puede ver el administrador */
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
					<center><?php ver_contenido("alumnos","Alumnos","los alumnos","un alumno nuevo");?></center>
				</div>
					
				<div id="pie">
					<?php ver_pie(); ?>
				</div>
			</div>

			</body>
			</html>
		
		<?php
    }
    }
    else
    {
        
    }
?>
