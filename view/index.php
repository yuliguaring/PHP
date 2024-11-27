<?php
include "../conexion.php";
$consulta =$conexion->query("SELECT* FROM users");
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
    <h1>Lista de usuarios</h1>

    <a href="formulario.php">Registrarse</a> <br><br>  

    <table border="1">
        <thead>
            <th>Nombres</th>
            <th>Documento</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </thead>
        <tbody>

        <?php
            while($user =$consulta->fetch_object() ):

        ?>

        <tr>
        
        <td> <?= $user->first_name; ?></td>
        <td><?= $user->document; ?> </td>
        <td> Editar </td>
        <td> Eliminar </td>
        
        
        </tr>

        <?php
        endwhile;

        ?>


        </tbody>


    </table>
</body>
</html>