<?php
include "funciones.php";

/*coger_tablas("profesor");*/
if (isset($_POST["enviar"]))
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
    $insert=$insert.");";

    var_dump($insert);
    $conexion = conectar("localhost","root","","mydb");
    $r=mysqli_query($conexion,$insert);




}

?>
<form method="post" action="pruebas.php">
    <input type="hidden" name="abreviatura" value="1">
    <input type="hidden" name="codigo" value="2">
    <input type="hidden" name="denominacion" value="3">
    <input type="hidden" name="ciclo" value="1">
    <input type="hidden" name="tutor" value="1">
    <input type="hidden" name="tutor_practicas" value="1">
    <input type="submit" name="enviar" value="enviar">
</form>