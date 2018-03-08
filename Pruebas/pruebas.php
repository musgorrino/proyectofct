<?php
include "../funciones.php";
/*$t=array();
$t[]="nombre";
$t[]="tutor";

modificar("alumnos",$t);*/
$conexion = mysqli_connect("localhost", "root", "", "mydb");
$query2 = "select abreviatura,tutor_practicas,tutor from grupos";
$done = mysqli_query($conexion,$query2);
$grupo= mysqli_fetch_assoc($done);
$j=array();
while($grupo)
{
    var_dump($grupo);
    $j[]=array(
        "abreviatura"=>$grupo["abreviatura"],
        "tutorp"=>$grupo["tutor_practicas"],
        "tutor" =>$grupo["tutor"]
    );
    $grupo= mysqli_fetch_assoc($done);
}
var_dump($query2);

/*coger_tablas("profesor");*/
/*if (isset($_POST["enviar"]))
{
    $insert="insert into grupos(";
    $columnas=coger_nombres("grupos");
    $contador=0;
    foreach($columnas as $i)
    {
        if ($i!="codigo")
        {
            if($contador!=1)
            {
                $insert=$insert.",".$i;
            }
            else
            {
                $insert=$insert.$i;
            }

        }

        $contador++;
    }
    $insert=$insert.") values(";
    $contados=0;
    foreach($columnas as $i)
    {
        $comp=comprobar_dato($i);
        if($comp=="hecho")
        {
            if ($i!="codigo")
            {

                if ($contados != 1) {
                    $insert = $insert . ",'" . $_POST[$i] . "'";
                } else {
                    $insert = $insert . "'" . $_POST[$i] . "'";
                }
            }
            $contados++;
        }
        else
        {
            echo $comp;
            return $comp;
        }


    }
    $insert=$insert.");";

    var_dump($insert);
    $conexion = conectar("localhost","root","","mydb");
    $r=mysqli_query($conexion,$insert);




}*/

?>
<form method="post" action="pruebas.php">
    <input type="hidden" name="abreviatura" value="1">
    <input type="hidden" name="codigo" value="2">
    <input type="hidden" name="nombre" value="12345678V">
    <input type="hidden" name="ciclo" value="1">
    <input type="hidden" name="tutor" value="1">
    <input type="hidden" name="tutor_practicas" value="1">
    <input type="submit" name="enviar" value="enviar">
</form>