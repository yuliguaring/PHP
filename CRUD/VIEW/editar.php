<?php
include "../conexion.php";
$user = $conexion->query("SELECT * FROM users WHERE id=$_REQUEST[user_id] ")->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <a href="listar.php">Regresar</a>

    <form action="../MODELO/update.php" method="post">

        <input type="hidden" name="id" value="<?= $user->id?>">

        <label for="name">Nombres</label>
        <input type="text" name="names" id="name" value="<?=$user->names?>">

        <label for="lastname">Apellidos</label>
        <input type="text" name="lastnames" id="lastname" value="<?=$user->lastnames?>" >
        
        <label for="document">Documento</label>
        <input type="text" name="document" id="document"value="<?=$user->document?>">

        <label for="phone">Telefono</label>
        <input type="text" name="phone" id="phone"value="<?=$user->phone?>">

        <label for="email">Correo</label>
        <input type="email" name="email" id="email"value="<?=$user->email?>">

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>