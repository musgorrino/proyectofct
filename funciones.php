<?php
/**
 * Created by PhpStorm.
 * User: 2aasir11
 * Date: 27/02/2018
 * Time: 8:47
 */
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


                return 0;
    }

}
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
function conectar ($host,$user,$pass,$bd)
{
    $conexion = mysqli_connect ($host, $user, $pass,$bd);
    return $conexion;
}
function poner_datos($dato)
{
    if(isset($_POST[$dato]))
    {
        return $_POST[$dato];
    }
}
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
function alta_alumno()
{

var_dump($_POST["dni"]);
     $dni = recogedni($_POST["dni"]);
    var_dump($dni);
    if($dni==1)
    {
        return "Por favor introduzca un dni con el formato adecuado";
    }
     $nombre = recogvarc($_POST["nombre"]);
    var_dump($nombre);
    if($nombre==1)
    {
        return "Nombre vacio o con caracteres numericos";
    }
     $apellidos = recogvarc($_POST["apellidos"]);
    var_dump($apellidos);
    if($apellidos==1)
    {
        return "Apellidos vacios o con caracteres numericos";
    }
     $fechanac = recoger($_POST["fechanac"]);
    var_dump($fechanac);
    if($fechanac==1)
    {
        return "Campo fecha vacio";
    }
     $telefono = recogernum($_POST["telefono"]);
    var_dump($telefono);
    if($telefono==1)
    {
        return "Campo telefono vacio o con caracteres no numericos";
    }
     $email = recoger($_POST["email"]);
    var_dump($email);
    if($email==1)
    {
        return "Campo email vacio";
    }
     $euskera = recoger($_POST["euskera"]);
    var_dump($euskera);
    if($euskera==1)
    {
        return "Seleccion eleccion idioma euskera no completada";
    }
     $carnet = recoger($_POST["carnet"]);
    var_dump($carnet);
    if($carnet==1)
    {
        return "Seleccion carnet no completada";
    }
     $otros = recoger($_POST["otros"]);

    $conexion=conectar("localhost","root","","mydb");
    if($otros==1) {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "')";
    }
    else
    {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet,otros) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "','" . $_POST["otros"] . "')";
        var_dump($query);
    }
    $r=mysqli_query($conexion,$query); /*or die(mysqli_error())*/
    var_dump($r);

    function coger_tablas()
    {
        $conexion=conectar("localhost","root","","mydb");
        $query="describe alumnos";
        $r=mysqli_query($conexion,$query);
        $_fila=mysqli_fetch_assoc($r);
        $datos=array();
        while ($_fila)
        {
            var_dump($_fila["Field"]);
            $datos[]=$_fila["Field"];
            $_fila=mysqli_fetch_assoc($r);
        }
        var_dump($datos);
    }
    function crear_tablas($array)
    {
        $conexion=mysqli_connect("localhost","root","","mydb");
        $recogida="select * from mydb.alumnos";
        $datos=mysqli_query($conexion,$recogida);
        $totalfilas= mysqli_num_rows($datos);

?>      <h3>
        alumnos
    </h3>
        <table border=1>
            <tr><?php foreach ($array as $i)
                {
                echo "<td>$i</td>";
                }?></tr>
        <?php
        if ($totalfilas>0){
        $_fila=mysqli_fetch_assoc($datos);
        while ($_fila)
        {

            ?>
            <tr>
                <?php foreach ($array as $i)
            {?>
                <td><?php echo $_fila[$i];
            } ?></td>
            <tr>
                <?php

                $_fila=mysqli_fetch_assoc($datos);
                }
                }
                ?>
        </table>
        <?php
        mysqli_close($conexion);

    }

}