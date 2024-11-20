<?php
include "conexion.php";


$consulta = $conexion ->query("SELECT * FROM users");
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
    <h1> Registros </h1>
    <table border = "2"> 
        <thead>
        <th>nombres</th>
        <th>Email</th>
        <th>Eliminar</th>
        <th>Ver</th>
        </thead>
    <tbody>
        <?php while ($user = $consulta->fetch_object() ):
        ?>
        <tr>
            <td><?= $user->first_name ?> </td>
            <td><?= $user->email ?> </td>
            <td>
            <form method = "post" action="abm.php">
            <input type="text" name="id" value="<?= $user->id ?>">    
              <button type="submit">Eliminar</button>  

             </form>  </td>   


        <td> <button>ver</button>   </td>   

           

        </tr>
        <?php endwhile; ?>



    </tbody>


    </table>
</body>
</html>