<?php
/**
 * Created by PhpStorm.
 * User: 2aasir11
 * Date: 27/02/2018
 * Time: 8:47
 */
/*<<<<<<< HEAD*/
function cabecera($titulo, $css)
{ 
?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $titulo ?></title>
  <link href="<?php echo $css ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
}
/*=======*/
/*Funcion para recoger el dni y comporbar que no esta vacio y el patron es correcto, devuelve un 1 si el campo esta vacio
un 2 si el dni ya existe en la tabla alumnos y un 0 si el dni no existe, es necesario pasarle el dni como parametro*/
/*>>>>>>> 6304c0157b39077afc88355f0b27e8935606bb25*/
function recogedni($dni)
{
    $dni=ltrim($dni);
    $formato=preg_match('/[0-9]{7,8}[A-Z]/', $dni);
    if($dni=='' || $formato==0)
    {
        return 1;
    }
    else
    {
        if(comprobarDnia($dni)==2)
        {
            return 2;
        }
        else
        {
            return 0;
        }


    }

}
/*funcion para comporbar si el dni existe en la tabla alumnos, devuelve un 2 si existe y un 0 si no existe,
es necesario pasarle un dni como parametro*/
function comprobarDnia($dni)
{
    $conexion=conectar("localhost","root","","mydb");
    $query="select dni from alumnos where dni='".$dni."'";
    $r=mysqli_query ($conexion,$query);
    $totalfilas=mysqli_num_rows($r);
    if($totalfilas>0 or !$totalfilas)
    {
        $fila=mysqli_fetch_assoc($r);
        while ($fila)
        {
            if($fila["dni"]==$dni)
            {
                return 2;
            }

            $fila=mysqli_fetch_assoc($r);
        }
        return 0;
    }
    else
    {
        return 0;
    }
}
/*Funcion para recoger un input en que solo puede haber caracteres alfabeticos, devuelve un 1 si esta vacio o tiene un
caracter numerico y devuelve 0 si hay caracteres y son solo alfabeticos, es necesario pasarle el valor como parametro*/
function recogvarc($valor)
{

    $valor2=ltrim($valor);
    if($valor2=='' || !comprobarnonum($valor2))
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
/*Funcion para recoger un input en que solo puede haber caracteres numericos, devuelve un 1 si esta vacio o tiene un
caracter alfabetico y devuelve 0 si hay caracteres y son solo numericos,  es necesario pasarle el valor como parametro*/
function recogernum($valor)
{
    $valor2=ltrim($valor);
    if($valor2=='' || !comprobarnum($valor2) )
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
/*Funcion para comporbar si el valor tiene datos, devuelve un 1 si esta vacio y un 0 si tiene datos,
es necesario pasarle el valor como parametro*/
function recoger($valor)
{
    $valor2=ltrim($valor);
    if($valor2=='')
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
/*Funcion para comporbar si una variable contiene solo caracteres numericos, devuelve true si solo tiene valores numericos
y false si no es asi,  es necesario pasarle el valor como parametro*/
function comprobarnum($valor)
{
    if(preg_match("/^[0-9]*$/",$valor))
    {
        return true;
    }
    else
    {
        return false;
    }
}
/*Funcion para comporbar si una variable contiene solo caracteres alfabeticos, devuelve true si solo tiene valores alfabeticos
y false si no es asi,  es necesario pasarle el valor como parametro*/
function comprobarnonum($valor)
{

    if(preg_match("|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|",$valor)){
        return true;
    }
    else
    {
        return false;
    }
}
function poners($nombre,$valor)
{
    if(isset($_POST[$nombre]))
    {
        if($_POST[$nombre]==$valor)
        {
            return 'selected=selected';
        }
    }
}
function ponerc($nombre,$valor)
{
    if (isset($_POST[$nombre]))
    {
        if($_POST[$nombre]==$valor)
        {
            return 'checked="checked"';
        }
    }
}
/* funcion para conectarme con la base de datos*/
function conectar ($host,$user,$pass,$bd)
{
    $conexion = mysqli_connect ($host, $user, $pass,$bd);
    return $conexion;
}
/*funcion para poner en el value de un input, en caso de que ese valor exista en el post anteriormente te lo pone
en caso contrario no hace nada, es necesario pasarle el nombre que tendria en el post de existir*/
function poner_datos($dato)
{
    if(isset($_POST[$dato]))
    {
        return $_POST[$dato];
    }
}
/*Funcion para loguearte, devuelve true en caso de que haya coincidencias y false en caso contrario, es necesario pasarle
el usuario y la contraseña como pametros.*/
function login($usuario,$contrasena)
{
    $conexion=conectar("localhost","root","","mydb");
    $query="select usuario, password,tipo from usuarios where usuario='".$usuario."' and password='".$contrasena."'";
    $r=mysqli_query ($conexion,$query);
    var_dump($query);
    var_dump($r);
    $totalfilas=mysqli_num_rows($r);
    if($totalfilas==1)
    {
        /*$usuariot=mysqli_fech_assoc($r);
        $_SESSION["usuario"]=serialize($usuario);
        $_SESSION["tipo"]=serialize($usuariot["tipo"]);*/
        return true;
    }
    else
    {
        return false;
    }
}
/*Funcion para dar de alta un alumno*/
function alta_alumno()
{


    $dni = recogedni($_POST["dni"]);

    if ($dni == 1) {
        return "Por favor introduzca un dni con el formato adecuado";
    }
    $nombre = recogvarc($_POST["nombre"]);

    if ($nombre == 1) {
        return "Nombre vacio o con caracteres numericos";
    }
    $apellidos = recogvarc($_POST["apellidos"]);

    if ($apellidos == 1) {
        return "Apellidos vacios o con caracteres numericos";
    }
    $fechanac = recoger($_POST["fechanac"]);

    if ($fechanac == 1) {
        return "Campo fecha vacio";
    }
    $telefono = recogernum($_POST["telefono"]);

    if ($telefono == 1) {
        return "Campo telefono vacio o con caracteres no numericos";
    }
    $email = recoger($_POST["email"]);

    if ($email == 1) {
        return "Campo email vacio";
    }
    $euskera = recoger($_POST["euskera"]);

    if ($euskera == 1) {
        return "Seleccion eleccion idioma euskera no completada";
    }
    $carnet = recoger($_POST["carnet"]);

    if ($carnet == 1) {
        return "Seleccion carnet no completada";
    }
    $otros = recoger($_POST["otros"]);
    $grupo = recoger($_POST["grupo"]);

    if ($grupo == 1) {
        return "Grupo no seleccionado";
    }
    $curso=recoger($_POST["curso"]);
    if ($curso==1)
    {
        return "Curso no seleccionado";
    }
    $carnet = recoger($_POST["carnet"]);

    $conexion = conectar("localhost", "root", "", "mydb");
    if ($otros == 1) {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "')";
    } else {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet,otros) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "','" . $_POST["otros"] . "')";

    }
    $r = mysqli_query($conexion, $query);
    $row=mysqli_affected_rows($r);
    if($row==1)
    {
        $query2 = "select codigo from alumnos where dni='".$_POST["dni"]."'";
        $r = mysqli_query($conexion, $query2); /*or die(mysqli_error())*/
        $_fila = mysqli_fetch_assoc($r);
        $codigoal=$_fila["codigo"];
        $query="insert into historial_alumnos (grupo,alumno,curso)values ('".$_POST["grupo"]."','".$codigoal."','".$_POST["curso"]."')";
        $r=mysqli_query($conexion,$query);
        $row2=mysqli_affected_rows($r);
        if ($row2==1)
        {
            return "Alumno insertado correctamente";
        }
       else
       {
           return "El alumno no ha podido ser insertado en el grupo";
       }
    }
   else
   {
       return "ha habido un problema con la inserccion del alumno";
   }

    return "Alumno insertado correctamente";
}
    /*Primera funcion para crear listados de tablas de forma dinamica, hace un describe de la tabla y se queda
    con los nombres de las columnas guardados en un array, posteriormente llama a la segunda parte de la funcion para
    que a partir de ese array genere la tabla entera,es la funcion a la que hay que llamar, solo tiene un unico parametro
    y es el nombre de la tabla de la que se quiere hacer un listado*/
    function coger_tablas($nombretabla)
    {
        $conexion = conectar("localhost", "root", "", "mydb");
        $query = "describe ".$nombretabla;
        $r = mysqli_query($conexion, $query);
        $_fila = mysqli_fetch_assoc($r);
        $tabla = array();
        while ($_fila) {

            $tabla[] = $_fila["Field"];
            $_fila = mysqli_fetch_assoc($r);
        }
        crear_tablas($tabla,$nombretabla);

    }
/*Segunda funcion para crear listados de tablas, no es necesario llamar a esta*/
    function crear_tablas($array,$nombretabla)
    {
        $conexion = mysqli_connect("localhost", "root", "", "mydb");
        $recogida = "select * from ".$nombretabla;
        $datos = mysqli_query($conexion,$recogida);
        if ($nombretabla=="profesor")
        {
            $conexion = mysqli_connect("localhost", "root", "", "mydb");
            $query = "select abreviatura,tutor_practicas,tutor from grupos";
            $done = mysqli_query($conexion,$query);
            $grupo= mysqli_fetch_assoc($done);
            $j=array();
            while($grupo)
            {
                $j[]=array(
                "abreviatura"=>$grupo["abreviatura"],
                "tutorp"=>$grupo["tutor_practicas"],
                "tutor" =>$grupo["tutor"]
                );
                $grupo= mysqli_fetch_assoc($done);
            }

        }

        ?>      <h3>
        <?php echo strtoupper($nombretabla);?>
    </h3>
        <table border=1>
            <thead><?php foreach ($array as $i) {
                    ?><th><?php echo ucfirst($i);?></th>
               <?php }

                    if ($nombretabla=="profesor")
                    {?>
                        <th>Tutor de</th>
                        <th>Tutor de practicas de</th>
                    <?php
                    }
               ?></thead>
            <?php


            $_fila = mysqli_fetch_assoc($datos);
            while ($_fila)
            {

            ?>
            <tr>
                <?php foreach ($array as $i) {
                    ?>
                    <td><?php echo $_fila[$i]; ?></td><?php
                } ?>

                <?php
                if($nombretabla=="profesor")
                {
                  foreach($j as $e)
                  {
                      if($_fila["codigo"]==$e["tutor"])
                      {
                           ?><td><?php echo $e["abreviatura"]; ?></td><?php
                      }
                      else
                      {
                          ?><td>No es tutor</td><?php
                      }
                      if($_fila["codigo"]==$e["tutorp"])
                      {
                          ?><td><?php echo $e["abreviatura"]; ?></td><?php
                      }
                      else
                      {
                          ?><td>No es tutor de practicas</td><?php
                      }

                  }

                }
                ?><tr><?php
                $_fila = mysqli_fetch_assoc($datos);
            }

                ?>
        </table>
        <?php
        mysqli_close($conexion);

    }
    /*funcion para generar un select dinamica, es necesario pasarle el nombre de la tabla de la que se quiere extraer datos y
    la columna que se quiere mostrar en el select ambos como parmetros*/
    function generar_select($tabla,$columna)
    {
        $conexion=mysqli_connect("localhost","root","","mydb");
        $query="select codigo,".$columna." from ".$tabla;
        $r=mysqli_query($conexion,$query);
        $fila=mysqli_fetch_assoc($r);
        while($fila)
        {
            ?><option value="<?php echo $fila["codigo"];?>" ><?php echo $fila[$columna];?></option><?php
            $fila=mysqli_fetch_assoc($r);
        }
    }
	/* Funcion para la select de los modificares automatico*/
	function select_modificar($tabla)
    {
        $conexion = Conectarse("mydb");

        $codigo = $_POST['codigo'];

        $q = "select * from $tabla where codigo ='$codigo'";
        $resultado = mysqli_query($q, $conexion) or die(mysqli_error());
        $total = mysqli_num_rows($resultado);

        if ($total > 0) {
            $fila = mysqli_fetch_assoc($resultado);
        }
    }
    /*funcion rediseñada para usarla cuando haya que modificar y queramos mantener los datos, hay que pasarla la tabla de la que se quiere hacer la lista desplegable, la columna que queremos que saque
    y el nombre de la select*/
function generar_selectmod($tabla,$columna,$nombreselect)
{
    $conexion=mysqli_connect("localhost","root","","mydb");
    $query="select codigo,".$columna." from ".$tabla;
    $r=mysqli_query($conexion,$query);
    $fila=mysqli_fetch_assoc($r);
    while($fila)
    {
        ?><option value="<?php echo $fila["codigo"];?>" <?php poners($nombreselect,$fila["codigo"]) ?>><?php echo $fila[$columna];?></option><?php
        $fila=mysqli_fetch_assoc($r);
    }
}

/*Funcion para dar de alta una empresa*/
function alta_empresa()
{



    $nombre = recogvarc($_POST["nombre"]);

    if ($nombre == 1) {
        return "Nombre vacio o con caracteres numericos";
    }
    $nif = recoger($_POST["nif"]);

    if ($nif == 1) {
        return "Campo nif empresa vacio";
    }
    $titularidad = recogvarc($_POST["titularidad"]);

    if ($titularidad == 1) {
        return "Campo titularidad vacio o con numeros";
    }

    $direccion = recoger($_POST["direccion"]);

    if ($direccion == 1) {
        return "Campo direccion vacio";
    }
    $poblacion = recoger($_POST["poblacion"]);

    if ($poblacion == 1) {
        return "Campo poblacion vacio";
    }
    $provincia = recoger($_POST["provincia"]);

    if ($provincia == 1) {
        return "Campo provincia vacio";
    }
    $cp = recoger($_POST["cp"]);

    if ($cp == 1) {
        return "Codigo postal vacio";
    }
    $telefono = recogernum($_POST["telefono"]);

    if ($telefono == 1) {
        return "Telefono vacio o con caracteres alfabeticos";
    }
    $fax = recogernum($_POST["fax"]);

    if ($fax == 1) {
        return "Fax vacio o con caracteres alfabeticos";
    }
    $personac = recoger($_POST["personacontacto"]);

    if ($personac == 1) {
        return "Persona contacto vacia";
    }
    $actividempr = recoger($_POST["actividadempresa"]);

    if ($actividempr == 1) {
        return "Actividad empresa vacio";
    }
    $numtrab = recoger($_POST["numtrabajadores"]);

    if ($numtrab == 1) {
        return "Numero trabajadores vacio";
    }
    $kmscentro = recoger($_POST["kmscentro"]);

    if ($kmscentro == 1) {
        return "Kilometros hasta el centro vacio";
    }
    $horariopracticas = recoger($_POST["horariopracticas"]);

    if ($horariopracticas == 1) {
        return "Horario practicas vacio";
    }
    $convenio = recoger($_POST["convenio"]);

    if ($convenio == 1) {
        return "Convenio vacio";
    }
    $conexion = conectar("localhost", "root", "", "mydb");

        $query = "insert into empresas (nombre,nif,titularidad,direccion,poblacion,provincia,cp,telefono,fax,personacontacto,actividadempresa,numtrabajadores,kmscentro,horariopracticas,convenio) 
values('" . $_POST["nombre"] . "','" . $_POST["nif"] . "','" . $_POST["titularidad"] . "','" . $_POST["direccion"] . "','" . $_POST["poblacion"] . "','" . $_POST["provincia"] . "','" . $_POST["cp"] . "','" . $_POST["telefono"] . "','" . $_POST["fax"] . "','" . $_POST["personacontacto"] . "','" . $_POST["actividadempresa"] . "','" . $_POST["numtrabajadores"] . "','" . $_POST["kmscentro"] . "','" . $_POST["horariopracticas"] . "','" . $_POST["convenio"] . "')";


    $r = mysqli_query($conexion, $query); /*or die(mysqli_error())*/
    $row=mysqli_affected_rows($r);
    if ($row==1)
    {
        return "Empresa insertada correctamente";
    }
    else
    {
        return "ha habido un problema con la inserccion de la empresa";
    }

}
function coger_nombres($nombretabla)
{
    $conexion = conectar("localhost", "root", "", "mydb");
    $query = "describe ".$nombretabla;
    $r = mysqli_query($conexion, $query);
    $_fila = mysqli_fetch_assoc($r);
    $tabla = array();
    while ($_fila) {

        $tabla[] = $_fila["Field"];
        $_fila = mysqli_fetch_assoc($r);
    }
    return $tabla;

}
// FUNCIONES DE LA WEB //

	function logo($ruta){
	?>
		<a href="principal.php"><img src="<?php echo $ruta?>" alt="logo"></a>
	<?php	
	}
		
	// FUNCION QUE MUESTRA EL MENU DE LA WEB //						
	function ver_menu(){
	?>
		<ul>
				<li class="espacio">---------</li>
				  <li><a href="familias.php">Familias Profesionales</a></li>
				  <li><a href="ciclos.php">Ciclos Formativos</a></li>
				  <li><a href="grupos.php">Grupos</a></li>
				  <li><a href="profesores.php">Profesores</a></li>
				  <li><a href="alumnos.php">Alumnos </a></li>
				  <li><a href="asignaciones.php">Asignaciones</a></li>
				  <li><a href="empresas.php">Empresas</a></li>
				  <li><a href="responsables.php">Responsables</a></li>
				  <li><a href="usuarios.php">Usuarios</a></li>
				</ul>
	<?php
	}
	// FUNCION QUE MUESTRA EL CONTENIDO DE LA WEB						
	function ver_contenido($tabla,$titulo,$descripcion,$insertar){
	?>
		<center></br><h3> GESTION DE FORMACIÓN EN CENTRO DE TRABAJO </h3> </center>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo strtoupper($titulo);?>
    </h3>
		<?php coger_tablas("$tabla")?>
		</br></br>
		<div id="modificar">
			<form action="" method="post">
				<table class="modificar" width=100%>
					<tr>
						<td><strong>Selecciona el codigo de <?php echo $descripcion ?> que deseas modificar:</strong></td>
						<td><select name="codigo">
								<?php
									generar_select($tabla,'codigo')
								?>
							</select>
						</td>
						<td>
						  <input type="submit" value="Modificar">
						</td>
					</tr>
				</table>
		</div>
		</br></br>
		<div id="borrar">
				<table class="borrar">
					<tr>
						<td><strong>Selecciona el codigo de <?php echo $descripcion ?> que deseas eliminar:</strong><td>
						<td><select name="codigo">
								<?php
									generar_select($tabla,'codigo')
								?>
							</select>
						</td>
						<td>
						  <input type="submit" value="Borrar">
						</td>
					</tr>
				</table>
		</div>
		</br></br>
		<div id="insertar">
				<table>
					<tr>
					<td><strong>Haz click en "insertar" si deseas insertar <?php echo $insertar ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
						<td>
						  <input type="submit" value="Insertar">
						</td>
					</tr>
				</table>
			</form>	
		</div>
		
	<?php
	}
	// FUNCION QUE MUESTRA EL PIE DE LA WEB
	function ver_pie(){
	?>
		<div id="copyright" class="container">
			 <a href="principal.php" class="button">Volver al Inicio</a> 
			<p>PAGINA WEB DESIGNADA POR GAMUSINO</p>
		
		</div>
	</div>	
	
	<?php
	}
	?>
