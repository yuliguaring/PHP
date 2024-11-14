<?php

include "conexion.php";

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
 );


$conexion->query($SQL)   or die($conexion);// Muestra los errores 