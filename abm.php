<?php

include  "conexion.php";

$conexion->query("DELETE FROM users where id = $_POST[id]");

?>
