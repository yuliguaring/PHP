<?php
include "../conexion.php";

$delete = $conexion->query("DELETE FROM users WHERE id = '$_REQUEST[user_id]' ");

if($delete){
    header("location:../VIEW/listar.php");
}