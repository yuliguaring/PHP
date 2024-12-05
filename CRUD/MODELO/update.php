<?php

include "../conexion.php";

$update=$conexion->query("UPDATE users SET

names ='$_POST[names]',
lastnames='$_POST[lastnames]',
phone='$_POST[phone]',
email='$_POST[email]',
document='$_POST[document]'

WHERE id ='$_POST[id]'

");

if($update){

    header("location:../VIEW/listar.php");
} else 
{
    echo "Error";
}


