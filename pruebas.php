<?php
include "funciones.php";

/*coger_tablas("profesor");*/
if (isset($_POST["enviar"]))
{
    $insert="insert into prueba()";
    $columnas=coger_nombres("grupos");
    $contado=0;
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
        if($contados!=1)
        {
            $insert=$insert.",'".$_POST[$i]."'";
        }
        else
        {
            $insert=$insert."'".$_POST[$i]."'";
        }
        $contados++;
    }
    $insert=$insert.")";
    var_dump($insert);

}

?>
<form method="post" action="pruebas.php">
    <input type="hidden" name="cosa1" value="1">
    <input type="hidden" name="cosa2" value="2">
    <input type="hidden" name="cosa3" value="3">
    <input type="hidden" name="cosa4" value="4">
    <input type="submit" name="enviar" value="enviar">
</form>