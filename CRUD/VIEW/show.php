<?php
include "../conexion.php";
$user = $conexion->query("SELECT * FROM users WHERE id=$_REQUEST[user_id] ")->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<h1> Usuario seleccionado</h1>

<b><p>Nombre : <?= $user->names," ",$user->lastnames ?></p></b>
<b><p>Documento : <?= $user->document?></p></b>


<button type="submit"><a href="listar.php">Regresar</a></button>
</body>
</html>