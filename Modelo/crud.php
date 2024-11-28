<?php

include "../conexion.php";

if(isset($_POST['first_name'])){

    $SQL = "INSERT INTO users VALUES (
        NULL,
        '$_POST[first_name]',
        '$_POST[second_name]',
        '$_POST[lastname]',
        '$_POST[second_lastname]',
        '$_POST[document]',
        '$_POST[password]',
        '$_POST[email]',
        '$_POST[phone]',
        '$_POST[age]'
        
     )";
    
    $conexion->query($SQL)   or die($conexion);// Muestra los errores 
    header('location:../view/index.php');

}  else if (isset($_POST['actualizar'])) {



} else {
    $conexion->query("DELETE FROM users where id = $_GET[id]");
    header('location:../view/index.php');

}




?>