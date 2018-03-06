<?php
// FORMULARIOS INSERTAR //
	
	// INSERTAR ALUMNOS //
	function insertar_alumno(){
?>
	<center></br><h3> INSERTAR UN NUEVO ALUMNO </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
		<div id="insertar_modificar">
	
			<form method="post" action="insertar.php">
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
					<td><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
				</tr>
			</table>
			
					<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
			</form>
		</div>
	<?php
	}
	
	// INSERTAR PROFESORES //
	
	function insertar_profesor(){
	?>
	<center></br><h3> INSERTAR UN NUEVO PROFESOR </h3> </center>
		
	<div id="insertar_modificar">
	<form method="post" action="insertar.php"> 
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
					<td><input class="botones" type="submit" id="enviar" name="enviar" value="Guardar" /></td>
				
			</table>
	
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
</form>
</div>
<?php
}

	// INSERTAR UNA EMPRESA //
	
function insertar_empresa(){
?>
<center></br><h3> INSERTAR UNA NUEVA EMPRESA </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
	<form method="post" action="insertar.php"> 
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
		<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Crear" /></td>
		</tr>
</table>
</form>
</div>
<?php
}

// INSERTAR FAMILIA PROFESIONAL //

function insertar_familia(){
?>
<center></br><h3> INSERTAR UNA NUEVA EMPRESA </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
	<form method="post" action="insertar.php">
			<table>
				<tr>
					<td><label  for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="20" value="" /></td>
				
					<tD><label  for="coordinador">Coordinador:</label></tD>
					<td><select name="coordinador" id="coordinador"><?php generar_select("profesores","nombre")?></td>
				</tr>
				<tr>
					<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
					<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Guardar" /></td>
				</tr>
			</table>
	
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
	
</form>
</div>
<?php
}
// INSERTAR FAMILIA PROFESIONAL //

function insertar_asignacion(){
?>
<center></br><h3> INSERTAR UNA NUEVA EMPRESA </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
	<form action="" method="post">
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
			<td><label for="contratacionsi">si </label>
				<input type="radio" name="contratacionsi" value="si" id="contratacionsi">
				
				<label for="contratacionno">no </label>
				<input type="radio" name="contratacionno" value="no" id="contratacionno">
			</td>
				<td><input type="reset" class="botones" id="limpiar" name="limpiar" value="Limpiar" /></td>
				<td><input type="submit" class="botones" id="enviar" name="enviar" value="Crear" /></td>
			</tr>
</table>
	
</form>

</div>
<?php
}
// INSERTAR CICLO FORMATIVO //

function insertar_ciclo(){
?>
<center></br><h3> INSERTAR UNA NUEVA EMPRESA </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
	<form method="post" action="insertar.php">
			<table>
				<tr>
					<td><label  for="nombre">Nombre:</label></td>
					<td><input id="nombre" type="text"  name="nombre" size="40" value="" /></td>
				
					<td><label  for="abreviatura">Abreviatura:</label></td>
					<td><input id="abreviatura" type="text"  name="abreviatura" size="20" value="" /></td>
				</tr>
				<tr>
					<td><label for="grado">Grado:</label></td>
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
					<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Crear" /></td>
				</tr>
				
			</table>

		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />

</form>
</div>
<?php
}
function insertar_curso(){
?>
<center></br><h3> INSERTAR UN NUEVO CURSO</h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
	<form method="post" action="insertar.php">
			<table>
				<tr>
					<td><label for="abreviatura">Abreviatura:</label></td>
					<td><input id="abreviatura" id="abreviatura" type="text"  name="nombre" size="20" value="" /></td>
				
					<td><label  for="denominacion">Denominacion:</label></td>
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
					<td><input class="botones" type="submit" id="enviar" name="enviar" value="Guardar" /></td>
				</tr>
			</table>
	
		<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
</form>

</div>
<?php
}

function insertar_responsable(){
?>
<center></br><h3> INSERTAR UN NUEVO RESPONSABLE</h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
<form action="" method="post">
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
			<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Crear" /></td>
		</tr>
</table>
		
</form>

</div>
<?php
}
function insertar_usuario(){
?>
<center></br><h3> INSERTAR UN NUEVO RESPONSABLE</h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="insertar_modificar">
<form action="" method="post">
	<table>
		<tr>
			<td><label for="nombre">Nombre: </label></td>
			<td><input type="text" name="nombre" value="" id="nombre"></td>
		
			<td><label for="password">Password: </label></td>
			<td><input type="password" name="password" value="" id="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input class="botones" type="reset" id="limpiar" name="limpiar" value="Limpiar" /></td>
			<td colspan="2"><input class="botones" type="submit" id="enviar" name="enviar" value="Crear" /></td>
		</tr>
</table>
		
</form>

</div>
<?php
}
// FORMULARIO MODIFICAR //

// MODIFICAR ALUMNO //

function modificar_alumno(){
?>
	<center></br><h3> MODIFICAR UN NUEVO ALUMNO </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
		<div id="insertar_modificar">
	
			<form method="post" action="insertar.php">
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
					<td><input class="botones" type="submit" id="enviar" name="enviar" value="Insertar" /></td>
				</tr>
			</table>
			
					<input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
	
			</form>
		</div>
	<?php
	}


	// MODIFICAR HISTORIAL //
	
	function modificar_historial(){
	?>
	<center></br><h3> MODIFICAR HISTORIAL </h3> </center>
		
	<div id="insertar_modificar">
	<form action="" method="post">
	<table>
		<tr>
			<td><label for="empresa">Empresa: </label></td>
			<td><select id="empresa"><?php generar_select('empresas','nombre')?></select></td>
		
			<td><label for="alumnos">Alumno: </label></td>
			<td><select id="alumnos"><?php generar_select('alumnos','nombre')?></select></td>
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
		
			<td><label for="trabajodesempenado">trabajo desempeñado: </label></td>
			<td><textarea name="trabajodesempenado" id="trabajodesempenado"></textarea></td>
		</tr>
		<tr>
			<td>Contratacion del alumno:</td>
			<td>
				<label for="contratacionsi">si </label>
				<input type="radio" name="contratacionsi" value="si" id="contratacionsi">
				<label for="contratacionno">no </label>
				<input type="radio" name="contratacionno" value="no" id="contratacionno">	
			</td>
			<td><input type="reset" id="limpiar" name="limpiar" value="Limpiar"/></td>
			<td><input type="submit" id="enviar" name="enviar" value="Crear"/><td> 
		</tr>
</table>
</form>
</div>
<?php
}
?>

