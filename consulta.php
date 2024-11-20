<?php

include "conexion.php";

// var_dump muestra si hay informacion en la tabla
//-> fetch_object(); // muestra los datos que estan en la tabla 

$users = $conexion ->query("SELECT * FROM users");//nombre tabla

echo "<table border='2'>";

echo "<thead>";
    echo "<th> Documento </th>";
    echo "<th> Primer Nombre </th>";
echo "</thead>";

echo "<tbody>";


while($user =  $users ->fetch_object()){   


   echo "<tr>";
   echo "<td>". $user -> document."</td>";
   echo "<td>". $user -> first_name ."</td>"; 
   echo "</tr>";

     
    
}  

echo "</tbody>";
echo "</table>";




?>