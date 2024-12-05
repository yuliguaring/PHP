<?php

include "../conexion.php";

$nombres = $_POST['names'];
$apellidos = $_POST['lastnames'];
$telefono = $_POST['phone'];
$correo = $_POST['email'];
$documento = $_POST['document'];

$insert = $conexion->query("INSERT INTO users VALUES (NULL, '$nombres', '$apellidos', $telefono, '$correo', $documento ) ");

if($insert){
    header("location:../VIEW/listar.php");
}
