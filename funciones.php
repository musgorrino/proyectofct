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
    $query="select usuario, password from usuarios where usuario='".$usuario."' and password='".$contrasena."'";
    $r=mysqli_query ($conexion,$query);
    $totalfilas=mysqli_num_rows($r);
    if($totalfilas==1)
    {
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

    $conexion = conectar("localhost", "root", "", "mydb");
    if ($otros == 1) {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "')";
    } else {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet,otros) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "','" . $_POST["otros"] . "')";

    }
    $r = mysqli_query($conexion, $query); /*or die(mysqli_error())*/
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
        if ($nombretabla=="profesores")
        {
            $conexion = mysqli_connect("localhost", "root", "", "mydb");
            $query = "select abreviatura,tutor_practicas,tutor from grupos";
            $done = mysqli_query($conexion,$query);
            $profesores=array();
            $practicas=array();
            $abreviatura=array();
            $grupo= mysqli_fetch_assoc($done);
            while($grupo)
            {
                $abreviatura[]=$grupo["abreviatura"];
                $practicas[]=$grupo["tutor_practicas"];
                $profesores[]=$grupo["tutor"];
            }

        }

        ?>      <h3>
        <?php echo strtoupper($nombretabla);?>
    </h3>
        <table border=1>
            <thead><?php foreach ($array as $i) {
                    ?><th><?php echo ucfirst($i);?></th>
               <?php } ?></thead>
            <?php
            $contador=0;
            $tutor=-1;
            $tutorprac=-1;

            $_fila = mysqli_fetch_assoc($datos);
            while ($_fila)
            {

            ?>
            <tr>
                <?php foreach ($array as $i) {
                    ?>
                    <td><?php echo $_fila[$i]; ?></td><?php
                } ?>
            <tr>
                <?php
                if($nombretabla="profesores")
                {
                    
                }
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
	function select_modificar($tabla){
		$conexion=Conectarse("mydb"); 
 
		$codigo=$_POST['codigo'];
 
		$q = "select * from $tabla where codigo ='$codigo'";
		$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
 
	if ($total>0){
		$fila = mysql_fetch_assoc($resultado);
	}}