<?php


		 //=================================================================================================================//
		//											FORMULARIOS DE INSERTAR 										 	   //
	   //=================================================================================================================//
	
	 //==============================//
	// INSERTAR FAMILIA PROFESIONAL //
   //==============================//

	function insertar_familia(){
	?>
	<center></br><h3> INSERTAR UNA NUEVA FAMILIA PROFESIONAL </h3> </center>
		
		<div id="insertar_modificar">
		<form method="post" action="#">
				<table>
					<tr>
						<td><label  for="nombre">Nombre:</label></td>
						<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
					
						<tD><label  for="coordinador">Coordinador:</label></tD>
						<td><select name="coordinador" id="coordinador"><?php generar_select("profesores","nombre")?></td>
					</tr>
					<tr>
						<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
						<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
					</tr>
				</table>
	</form>
	</div>
	<?php
	if(isset($_POST['enviar'])){
		generar_insert("familias_profesionales");
	}
	}
	
	 //==============================//
	//   INSERTAR CICLO FORMATIVO   //
   //==============================//

	function insertar_ciclo(){
	?>
	<center></br><h3> INSERTAR UN NUEVO CICLO </h3> </center>
			
		<div id="insertar_modificar">
		<form method="post" action="#">
				<table>
					<tr>
						<td><label  for="nombre">Nombre:</label></td>
						<td><input id="nombre" type="text"  name="nombre" size="40" value="" /></td>
					
						<td><label  for="abreviatura">Abreviatura:</label></td>
						<td><input id="abreviatura" type="text"  name="abreviatura" size="20" value="" /></td>
					</tr>
					<tr>
						<td><label for="nivel">Grado:</label></td>
						<td><select name="nivel" id="grado">
							<option value="FPB">FPB</option>
							<option value="medio">Grado Medio</option>
							<option value="superior">Grado Superior</option>
						</select></td>
					
						<td><label  for="familia">Familia Profesional:</label></td>
						<td><select name="familia" id="familia"><?php generar_select("familias_profesionales","nombre")?></td>
					</tr>
					<tr>
						<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
						<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
					</tr>
					
				</table>
	</form>
	</div>
	<?php
	if(isset($_POST['enviar'])){
		generar_insert("ciclos_formativos");
	}
	}
	
	 //==============================//
	//        INSERTAR GRUPO        //
   //==============================//
	
	function insertar_grupo(){
	?>
	<center></br><h3> INSERTAR UN NUEVO GRUPO</h3> </center>
		
		<div id="insertar_modificar">
		<form method="post" action="#">
				<table>
					<tr>
						<td><label for="abreviatura">Abreviatura:</label></td>
						<td><input id="abreviatura" type="text"  name="abreviatura" size="20" value="" /></td>
					
						<td><label  for="denominacion">Denominacion:</label></td>
						<td><input id="denominacion" type="text"  name="denominacion" size="40" value="" /></td>
					</tr>
					<tr>
						<td><label  for="tutor">Tutor:</label></td>
						<td><select name="tutor" id="tutor"><?php generar_select("profesores","nombre")?></td>
					
						<td><label  for="tutorpracticas">Tutor Practicas:</label></td>
						<td><select name="tutorpracticas" id="tutorpracticas"><?php generar_select("profesores","nombre")?></td>
					</tr>
					<tr>
						<td><label  for="ciclo">Ciclo:</label></td>
						<td><select name="ciclo" id="ciclo"><?php generar_select("ciclos_formativos","nombre")?></td>
						
						 <td><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
						<td><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
					</tr>
				</table>	
	</form>
	</div>
	<?php
	if(isset($_POST['enviar'])){
		generar_insert("grupos");
	}
	}	
	
     //==============================//
	//      INSERTAR PROFESORES     //
   //==============================//
	
	function insertar_profesor(){
	?>
	<center></br><h3> INSERTAR UN NUEVO PROFESOR </h3> </center>
		
	<div id="insertar_modificar">
	<form method="post" action="#"> 
			<table>
				<tr>
					<td><label  for="codigointerprof">Codigo Interno:</label></td> 
					<td><input type="text" id="codigointerprof" name="codigointerprof" size="20" value="" /></td>
				
					<td><label  for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label  for="apellidos">Apellidos:</label></td>
					<td><input id="apellidos" type="text"  name="apellidos" size="20" value="" /></td>
				
					<td><label  for="telefono">Telefono:</label></td>
					<td><input id="telefono"type="text"  name="telefono" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label  for="email">Email:</label></td>
					<td><input id="email" type="text"  name="email" size="20" value="" /></td>
				
					<td><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
				
			</table>	
	</form>
	</div>
	<?php
	if(isset($_POST['enviar'])){
		generar_insert("profesores");
	}
	}
	
	 //==============================//
	//        INSERTAR ALUMNO       //
   //==============================//	
	
	function insertar_alumno(){
?>
	<center></br><h3> INSERTAR UN NUEVO ALUMNO </h3> </center>
		<div id="insertar_modificar">
	
			<form method="post" action="#">
			<table>
				<tr>
					<td><label for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				
					<td><label for="apellidos">Apellidos:</label></td>
					<td><input id="apellidos" type="text"  name="apellidos" size="20" value="" /></td>
				</tr>
				<tr>
				<td><label for="dni">DNI:</label></td>
					<td><input id="dni" type="text"  name="dni" size="20" value="" /></td>
					
					<td><label for="fecnac">Fecha Nacimiento:</label></td>
					<td><input id="fecnac" type="text"  name="fecnac" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label for="telefono">Telefono:</label></td>
					<td><input id="telefono" type="text"  name="telefono" size="20" value="" /></td>
				
					<td><label for="email">Email:</label></td>
					<td><input id="email" type="text"  name="email" size="20" value="" /></td>
				</tr>
				<tr>
				<td><label for="otros">Otros: </label></td>
					<td><textarea name="otros" id="otros"></textarea></td>
					
					<td><label  for="grupo">Grupo:</label></td>
					<td><select name="grupo" id="grupo"><?php generar_select("grupos","abreviatura")?></select></td>
				</tr>				
				<tr>
					<td> ¿Sabes Euskera?</td> 
					<td>  <label for="si">Si</label>
							<input type="radio" id="si" name="euskera" value="si">
						 <label for="no">No</label>
							 <input type="radio" id="no" name="euskera" value="no">
					</td>
				
					<td> ¿Tienes Carnet de conducir?</td> 
					<td>  <label for="si">Si</label>
							<input type="radio" id="si" name="carnet" value="si">
						 <label for="no">No</label>
							 <input type="radio" id="no" name="carnet" value="no">
					</td>
				</tr>
				<tr>
					
					<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
				</tr>
			</table>
			</form>
		</div>
	<?php
	if(isset($_POST['enviar'])){
		generar_insert("alumnos");
	}
	}
	
	 //==============================//
	//     INSERTAR ASIGNACIONES    //
   //==============================//
   
	function insertar_asignacion(){
?>
<center></br><h3> INSERTAR UNA NUEVA ASIGNACION </h3> </center>
		
	<div id="insertar_modificar">
	<form action="#" method="post">
	<table>
		<tr>
			<td><label for="empresa">Empresa: </label></td>
			<td><select id="empresa">
					<?php
						generar_select('empresas','nombre')
					?>
				</select></td>
		
			<td><label for="alumnos">Alumno: </label></td>
			<td><select id="alumnos">
					<?php
						generar_select('alumnos','nombre')
					?>
				</select></td>
		</tr>
		<tr>
			<td><label for="curso">Curso: </label></td>
			<td><select id="curso" ><?php generar_select("historial_alumnos","curso")?></select></td></td>
		
			<td><label for="horario">Horario: </label></td>
			<td><input type="text" name="horario" value="" id="horario"></td>
		</tr>
		<tr>
			<td><label for="observaciones">Observaciones: </label></td>
			<td><textarea name="observaciones" id="observaciones"></textarea></td>
		
			<td><label for="trabajodesempenado">Trabajo desempeñado: </label></td>
			<td><textarea name="trabajodesempenado" id="trabajodesempenado"></textarea></td>
		</tr>
		<tr>
			<td>Contratacion del alumno:</td>
			<td><label for="contratacionsi">si </label>
				<input type="radio" name="contratacionsi" value="si" id="contratacionsi">
				
				<label for="contratacionno">no </label>
				<input type="radio" name="contratacionno" value="no" id="contratacionno">
			</td>
				<td><input type="reset" class="botones" id="limpiar" name="limpiar" value="Limpiar" /></td>
				<td><input type="submit" class="botones" id="enviar" name="enviar" value="Insertar" /></td>
			</tr>
</table>	
</form>
</div>
<?php
if(isset($_POST['enviar'])){
		generar_insert("asignaciones");
	}
}

	 //==============================//
	//      INSERTAR EMPRESAS       //
   //==============================//
	
	
function insertar_empresa(){
?>
<center></br><h3> INSERTAR UNA NUEVA EMPRESA </h3> </center>
		
	<div id="insertar_modificar">
	<form method="post" action="#"> 
			<table>
	<table>
		<tr>
			<td><label for="nombre">Nombre: </label></td>
			<td><input type="text" name="nombre" value="" id="nombre"></td>
		
			<td><label for="nif">Nif: </label></td>
			<td><input type="text" name="nif" value="" id="nif"></td>
		</tr>
		<tr>
			<td><label for="titularidad">Titularidad: </label></td>
			<td><input type="text" name="titularidad" value="" id="titularidad"></td>
		
			<td><label for="direccion">Direccion: </label></td>
			<td><input type="text" name="direccion" value="" id="direccion"></td>
		</tr>
		<tr>
			<td><label for="poblacion">Poblacion: </label></td>
			<td><input type="text" name="poblacion" value="" id="poblacion"></td>
		
			<td><label for="provincia">Provincia: </label></td>
			<td><input type="text" name="provincia" value="" id="provincia"></td>
		</tr>
		<tr>
			<td><label for="cp">Codigo Postal: </label></td>
			<td><input type="text" name="cp" value="" id="cp"></td>
		
			<td><label for="telefono">Telefono: </label></td>
			<td><input type="text" name="telefono" value="" id="telefono"></td>
		</tr>
		<tr>
			<td><label for="fax">Fax: </label></td>
			<td><input type="text" name="fax" value="" id="fax"></td>
		
			<td><label for="repempresa">Representante de la empresa: </label></td>
			<td><input type="text" name="repempresa" value="" id="repempresa"></td>
		</tr>
		<tr>
			<td><label for="personacontacto">Persona de contacto: </label></td>			
			<td><input type="text" name="personacontacto" value="" id="personacontacto"></td>
		
			<td><label for="actividadempresa">Actividad de la empresa: </label></td>
			<td><input type="text" name="actividadempresa" value="" id="actividadempresa"></td>
		</tr>
		<tr>
			<td><label for="numtrabajadores">Numero de trabajadores: </label></td>
			<td><input type="text" name="numtrabajadores" value="" id="numtrabajadores"></td>
		
			<td><label for="kmscentro">Kilometros desde el centro: </label></td>
			<td><input type="text" name="kmscentro" value="" id="kmscentro"></td>
		</tr>	
		<tr>
			<td><label for="horariopracticas">Horario de las practicas: </label></td>	
			<td><input type="text" name="horariopracticas" value="" id="horariopracticas"></td>
		
			<td>Convenio:</td>
			<td><label for="conveniosi">si </label>
			<input type="radio" name="convenio" value="si" id="conveniosi">
				
			<label for="conveniono">no </label>
			<input type="radio" name="convenio" value="no" id="conveniono">
			</td>
		</tr>
		<tr>
		<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
		<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
		</tr>
</table>
</form>
</div>
<?php
if(isset($_POST['enviar'])){
		generar_insert("empresas");
	}
}

	 //==============================//
	//    INSERTAR RESPONSABLES     //
   //==============================//

function insertar_responsable(){
?>
<center></br><h3> INSERTAR UN NUEVO RESPONSABLE</h3> </center>
		
	<div id="insertar_modificar">
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="nombre">Nombre: </label></td>
			<td><input type="text" name="nombre" value="" id="nombre"></td>
		
			<td><label for="empresa">Empresa: </label></td>
			<td><select id="empresa">
					<?php
						generar_select('empresas','nombre')
					?>
				</select></td>
		</tr>
		<tr>
			<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
			<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
		</tr>
</table>
		
</form>

</div>
<?php
if(isset($_POST['enviar'])){
		generar_insert("responsable");
	}
}

     //==============================//
	//      INSERTAR USUARIOS       //
   //==============================//

function insertar_usuario(){
?>
<center></br><h3> INSERTAR UN NUEVO RESPONSABLE</h3> </center>
		
	<div id="insertar_modificar">
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="nombre">Nombre: </label></td>
			<td><input type="text" name="nombre" value="" id="nombre"></td>
		
			<td><label for="password">Password: </label></td>
			<td><input type="password" name="password" value="" id="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
			<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
		</tr>
</table>	
</form>
</div>
<?php
if(isset($_POST['enviar'])){
		generar_insert("usuarios");
	}
}
	//=================================================================================================================//
	//											CONEXION A LA BASE DE DATOS 										   //
	//=================================================================================================================//

	
	
	
	
	//=================================================================================================================//
	//											 FORMULARIO DE MODIFICAR       										   //
	//=================================================================================================================//

	// MODIFICAR FAMILIA PROFESIONAL //
		function modificar_familias_profesionales(){
			
if(isset($_POST['enviar'])){
	
	$nombre=recoger($_POST['nombre']);
	$coordinador=recoger($_POST['coordinador']);

	if($nombre==0){
	$busqueda[]="nombre";
	}
	if($coordinador==0){
		$busqueda[]="coordinador";
	}
			modificar("familias_profesionales",$busqueda);
	}
	
	?>
		<center></br><h3> MODIFICAR UNA FAMILIA PROFESIONAL </h3> </center>
		<div id="insertar_modificar">
		<form method="post" action="#">
				<table>
					<tr>
						<td><label for="nombre">Nombre:</label></td>
						<td><input id="nombre" type="text"  name="nombre" size="30" value="" /></td>
					
						<td><label  for="coordinador">Coordinador:</label></td>
						<td><select name="coordinador" id="coordinador"><?php generar_select("profesores","nombre")?></td>
					</tr>				
					<tr>
						<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
						<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
					</tr>
				</table>
		
			<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />
	</form>
	</div>
	<?php
	}
		
	// MODIFICAR UN CICLO FORMATIVO //
	function modificar_ciclos_formativos(){
		
	if(isset($_POST['enviar'])){
	
	$nombre=recoger($_POST['nombre']);
	$abreviatura=recoger($_POST['abreviatura']);
	$grado=recoger($_POST['grado']);
	$curso=recoger($_POST['curso']);
	
	
	if($nombre==0){
	$busqueda[]="nombre";
	}
	if($abreviatura==0){
		$busqueda[]="abreviatura";
	}
	if($grado==0){
		$busqueda[]="grado";
	}
	if($curso==0){
		$busqueda[]="curso";
	}
			modificar("ciclos_formativos",$busqueda);
	}
	
	?>
	<center></br><h3> MODIFICAR UN CICLO FORMATIVO </h3> </center>
	<div id="insertar_modificar">
	<form method="post" action="#">
			<table>
				<tr>
					<td><label for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="40" value="" /></td>
				
					<td><label  for="abreviatura">Abreviatura:</label></th>
					<td><input id="abreviatura" type="text"  name="abreviatura" size="20" value="" /></td>
				</tr>
				
				<tr>
					<td><label  for="grado">Grado:</label></td>
					<td><select name="grado" id="grado">
						<option value="FPB">FPB</option>
						<option value="medio">Grado Medio</option>
						<option value="superior">Grado Superior</option>
					</select></td>
				
					<td><label  for="curso">Curso:</label></td>
					<td><select name="curso" id="curso"><?php generar_select("historial","curso")?></td>
				</tr>
				<tr>
					<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
				</tr>	
			</table>
				<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />
		</form>
	</div>
<?php
}
// MODIFICAR UN GRUPO //
	function modificar_grupos(){
	if(isset($_POST['enviar'])){
	
	
	$abreviatura=recoger($_POST['abreviatura']);
	$denominacion=recoger($_POST['denominacion']);
	$tutor=recoger($_POST['tutor']);
	$tutorpracticas=recoger($_POST['tutorpracticas']);
	$ciclo=recoger($_POST['ciclo']);
	
	
	if($abreviatura==0){
	$busqueda[]="abreviatura";
	}
	if($denominacion==0){
		$busqueda[]="denominacion";
	}
	if($tutor==0){
		$busqueda[]="tutor";
	}
	if($tutorpracticas==0){
		$busqueda[]="tutorpracticas";
	}
	if($ciclo==0){
		$busqueda[]="ciclo";
	}
			modificar("grupos",$busqueda);
	}
	?>
	<center></br><h3> MODIFICAR UN GRUPO </h3> </center>
	<div id="insertar_modificar">
	<form method="post" action="#">
			<table>
				<tr>
					<td><label for="abreviatura">Abreviatura:</label></td>
					<td><input  id="abreviatura" id="abreviatura" type="text"  name="nombre" size="20" value="" /></td>
				
					<td><label for="denominacion">Denominacion:</label></td>
					<td><input id="denominacion" type="text"  name="denominacion" size="40" value="" /></td>
				</tr>
			
				<tr>
					<td><label  for="tutor">Tutor:</label></td>
					<td><select name="tutor" id="tutor"><?php generar_select("profesores","tutor")?></td>
				
					<td><label  for="tutorpracticas">Tutor Practicas:</label></td>
					<td><select name="tutorpracticas" id="tutorpracticas"><?php generar_select("profesores","tutorpracticas")?></td>
				</tr>
				<tr>
					<td><label  for="ciclo">Ciclo:</label></td>
					<td><select name="ciclo" id="ciclo"><?php generar_select("ciclo","nombre")?></td>
					
					<td><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
				</tr>
			</table>
		<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />	
</form>
</div>

<?php
}
// MODIFICAR PROFESORES //
	function modificar_profesores(){
	
	if(isset($_POST['enviar'])){
	
	$codigointernoprof=recoger($_POST['codigointernoprof']);
	$nombre=recoger($_POST['nombre']);
	$apellidos=recoger($_POST['apellidos']);
	$telefono=recoger($_POST['telefono']);
	$email=recoger($_POST['email']);
	
	
	if($codigointernoprof==0){
	$busqueda[]="abreviatura";
	}
	if($nombre==0){
		$busqueda[]="nombre";
	}
	if($apellidos==0){
		$busqueda[]="apellidos";
	}
	if($telefono==0){
		$busqueda[]="telefono";
	}
	if($email==0){
		$busqueda[]="email";
	}
			modificar("profesores",$busqueda);
	}
	
	?>
		<center></br><h3> MODIFICAR UN PROFESOR </h3> </center>
			
			<div id="insertar_modificar">
		
			<form method="post" action="#">
				<table>
					<tr>
						<td><label for="codigointerprof">Codigo Interno:</label></th> 
						<td><input type="text" id="codigointerprof" name="codigointerprof" size="20" value="" /></td>
					
						<td><label for="nombre">Nombre:</label></td>
						<td><input id="nombre"  type="text"  name="nombre" size="20" value="" /></td>
					</tr>
					<tr>
						<td><label for="apellidos">Apellidos:</label></td>
						<td><input id="apellidos" type="text"  name="apellidos" size="40" value="" /></td>
					
						<td><label for="telefono">Telefono:</label></td>
						<td><input id="telefono type="text"  name="telefono" size="20" value="" /></td>
					</tr>
					<tr>
						<td><label for="email">Email:</label></td>
						<td><input id="email" type="text"  name="email" size="20" value="" /></td>
					
						<td><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
						<td><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
				</table>
		
			<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />
	</form>
	</div>
	<?php
	}
	// MODIFICAR ALUMNO //

	function modificar_alumnos(){
	if(isset($_POST['enviar'])){
	
	$nombre=recoger($_POST['nombre']);
	$apellido=recoger($_POST['apellido']);
	$fecnac=recoger($_POST['fecnac']);
	$telefono=recoger($_POST['telefono']);
	$email=recoger($_POST['email']);
	$grupo=recoger($_POST['grupo']);
	$euskera=recoger($_POST['euskera']);
	$carnet=recoger($_POST['carnet']);
	$curso=recoger($_POST['curso']);
	
	
	if($nombre==0){
	$busqueda[]="nombre";
	}
	if($apellido==0){
		$busqueda[]="apellido";
	}
	if($fecnac==0){
		$busqueda[]="fecnac";
	}
	if($telefono==0){
		$busqueda[]="telefono";
	}
	if($email==0){
		$busqueda[]="email";
	}
	if($grupo==0){
	$busqueda[]="grupo";
	}
	if($euskera==0){
		$busqueda[]="euskera";
	}
	if($carnet==0){
		$busqueda[]="carnet";
	}
	if($curso==0){
		$busqueda[]="curso";
	}
			modificar("alumnos",$busqueda);
	}
	?>
		<center></br><h3> MODIFICAR UN ALUMNO </h3> </center>
			
			<div id="insertar_modificar">
		
				<form method="post" action="#">
				<table>
					<tr>
						<td><label for="nombre">Nombre:</label></td>
						<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
					
						<td><label for="apellido">Apellido:</label></td>
						<td><input id="apellido" type="text"  name="apellido" size="20" value="" /></td>
					</tr>
					<tr>
						<td><label for="fecnac">Fecha Nacimiento:</label></td>
						<td><input id="fecnac" type="text"  name="fecnac" size="20" value="" /></td>
					
						<td><label for="telefono">Telefono:</label></td>
						<td><input id="telefono" type="text"  name="telefono" size="20" value="" /></td>
					</tr>
					<tr>
						<td><label for="email">Email:</label></td>
						<td><input id="email" type="text"  name="email" size="20" value="" /></td>
					
						<td><label  for="grupo">Grupo:</label></td>
						<td><select name="grupo" id="grupo"><?php generar_select("grupos","abreviatura")?></select></td>
					</tr>				
					<tr>
						<td> ¿Sabes Euskera?</td> 
						<td>  <label for="si">Si</label>
								<input type="radio" id="si" name="euskera" value="si">
							 <label for="no">No</label>
								 <input type="radio" id="no" name="euskera" value="no">
						</td>
					
						<td> ¿Tienes Carnet de conducir?</td> 
						<td>  <label for="si">Si</label>
								<input type="radio" id="si" name="carnet" value="si">
							 <label for="no">No</label>
								 <input type="radio" id="no" name="carnet" value="no">
						</td>
					</tr>
					<tr>
						<td><label  for="curso">Curso:</label></td>
						<td><select name="curso" id="curso"><?php generar_select("historial_alumnos","curso")?></select></td>
						
						<td><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
						<td><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
					</tr>
				</table>	
						<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />
				</form>
			</div>
		<?php
		}

		// MODIFICAR ASIGNACION //
		
		function modificar_asignaciones(){
			if(isset($_POST['enviar'])){
	
	$empresa=recoger($_POST['empresa']);
	$alumnos=recoger($_POST['alumnos']);
	$curso=recoger($_POST['curso']);
	$horario=recoger($_POST['horario']);
	$observaciones=recoger($_POST['observaciones']);
	$trabajodesempenado=recoger($_POST['trabajodesempenado']);
	$contratacion=recoger($_POST['contratacion']);
	
	
	if($empresa==0){
	$busqueda[]="empresa";
	}
	if($alumnos==0){
		$busqueda[]="alumnos";
	}
	if($curso==0){
		$busqueda[]="curso";
	}
	if($horario==0){
		$busqueda[]="horario";
	}
	if($observaciones==0){
		$busqueda[]="observaciones";
	}
	if($trabajodesempenado==0){
	$busqueda[]="trabajodesempenado";
	}
	if($contratacion==0){
		$busqueda[]="contratacion";
	}
	modificar("asignaciones",$busqueda);
	}
			
		?>
		<center></br><h3> MODIFICAR ASIGNACIONES </h3> </center>
			
		<div id="insertar_modificar">
	<form action="#" method="post">
	<table>
		<tr>
			<td><label for="empresa">Empresa: </label></td>
			<td>
				<select name="empresa" id="empresa">
				<?php
				generar_select('empresas','nombre')
				?>
				</select>
			</td>
		
			<td><label for="alumnos">Alumno: </label></td>
			<td><select name="alumnos" id="alumnos">
				<?php generar_select('alumnos','nombre')?>
			</select>
			</td>
		</tr>
		<tr>
			<td><label for="curso">Curso: </label></td>
			<td><input type="text" name="curso" value="" id="curso"></td>
		
			<td><label for="horario">Horario: </label></td>
			<td><input type="text" name="horario" value="" id="horario"></td>
		</tr>
		<tr>
			<td><label for="observaciones">Observaciones: </label></td>
			<td><textarea name="observaciones" id="observaciones"></textarea></td>
		
			<td><label for="trabajodesempenado">Trabajo desempeñado: </label></td>
			<td><textarea name="trabajodesempenado" id="trabajodesempenado"></textarea></td>
		</tr>
		<tr>
			<td>Contratacion del alumno:</td>
			<td>
				<label for="contratacionsi">si </label>
				<input type="radio" <?php ponerc('contratacion','si')?> name="contratacion" value="si" id="contratacionsi">
				
				<label for="contratacionno">no </label>
				<input type="radio" <?php ponerc('contratacion','no')?> name="contratacion" value="no" id="contratacionno">
			</td>
			
			<td><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
			<td><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
		</tr>
</table>
		<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />
</form>
	</div>
	<?php
	}
	
		// MODIFICAR EMPRESAS //
		
		function modificar_empresas(){
	?>
		<center></br><h3> MODIFICAR UNA EMPRESA </h3> </center>
		<div id="insertar_modificar">
		
		<form action="#" method="post">
			<table>
				<tr>
					<td><label for="nombre">Nombre: </label></td>
					<td><input type="text" name="nombre" value="" id="nombre"/></td>
				
					<td><label for="nif">Nif: </label></td>
					<td><input type="text" name="nif" value="" id="nif"/></td>
				</tr>
				<tr>
					<td><label for="titularidad">Titularidad: </label></td>
					<td><input type="text" name="titularidad" value="" id="titularidad"/></td>
				
					<td><label for="direccion">Direccion: </label></td>
					<td><input type="text" name="direccion" value="" id="direccion"/></td>
				</tr>
				<tr>
					<td><label for="poblacion">Poblacion: </label></td>
					<td><input type="text" name="poblacion" value="" id="poblacion"/></td>
				
					<td><label for="provincia">Provincia: </label></td>
					<td><input type="text" name="provincia" value="" id="provincia"/></td>
				</tr>
				<tr>
					<td><label for="cp">Codigo Postal: </label></td>
					<td><input type="text" name="cp" value="" id="cp"></td>
				
					<td><label for="telefono">Telefono: </label></td>
					<td><input type="text" name="telefono" value=">" id="telefono"/></td>
				</tr>
				<tr>
					<td><label for="fax">Fax: </label></td>
					<td><input type="text" name="fax" value="" id="fax"/></td>
			
					<td><label for="repempresa">Representante de la empresa: </label></td>
					<td><input type="text" name="repempresa" value="" id="repempresa"/></td>
				</tr>
				<tr>
					<td><label for="personacontacto">Persona de contacto: </label></td>			
					<td><input type="text" name="personacontacto" value="" id="personacontacto"/></td>
				
					<td><label for="actividadempresa">Actividad de la empresa: </label></td>
					<td><input type="text" name="actividadempresa" value="" id="actividadempresa"/></td>
				</tr>
				<tr>
					<td><label for="numtrabajadores">Numero de trabajadores: </label></td>
					<td><input type="text" name="numtrabajadores" value="" id="numtrabajadores"/></td>
				
					<td><label for="kmscentro">Kilometros desde el centro: </label></td>
					<td><input type="text" name="kmscentro" value="" id="kmscentro"/></td>
				</tr>
				<tr>
					<td><label for="horariopracticas">Horario de las practicas: </label></td>	
					<td><input type="text" name="horariopracticas" value="" id="horariopracticas"/></td>
				
					<td>Convenio:</td>
					<td>
						<label for="conveniosi">si </label>
						<input type="radio" <?php ponerc('convenio','si')?> name="convenio" value="si" id="conveniosi"/>
						
						<label for="conveniono">no </label>
						<input type="radio" <?php ponerc('convenio','no')?> name="convenio" value="no" id="conveniono" />		
					</td>
				</tr>	
				<tr>
					<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
				</tr>
	</table>
			<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />
	</form>	
	</div>
	<?php
	}
	// MODIFICAR UN RESPONSABLE //
	function modificar_responsable(){
		if(isset($_POST['enviar'])){
	
	$nombre=recoger($_POST['nombre']);
	$empresa=recoger($_POST['empresa']);
	
	if($nombre==0){
	$busqueda[]="nombre";
	}
	if($empresa==0){
		$busqueda[]="empresa";
	}
			modificar("responsables",$busqueda);
	}
	?>
		<center></br><h3> MODIFICAR UN RESPONSABLE </h3> </center>
		<div id="insertar_modificar">
	
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="nombre">Nombre: </label></td>
			<td><input type="text" name="nombre" value="" id="nombre"></td>
		
			<td><label for="empresa">Empresa: </label></td>
			<td><select id="empresa">
				<?php
				generar_select('empresas','nombre')
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
			<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Modificar" /></td>
		</tr>
		</table>
	<input type="hidden" name="codigo" value="<?php echo $_POST['codigo']; ?>" />
</form>
</div>	
<?php
	}
?>	



