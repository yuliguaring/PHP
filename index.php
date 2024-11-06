<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "get" action="">
        <select name="" id="">
            <option value="1"> opcion1 </option>
            <option value="2"> opcion2 </option>
        </select>
        <br>   <br>

        

        <table border="1">
            <thead>
                <th>Documento</th>
                <th>Nombres</th>
                <th>Telefono</th>

            </thead>

            <tbody>
                <tr>

                <td>12345687</td>
                <td>yulieth</td>
                <td>321654987</td>
        
                </tr>
                
                <tr>
                  <td>555555</td>  
                  <td>paola</td>
                  <td>3133555669</td>

                </tr>

                 <tr>
                    <td>666666</td>
                    <td>juana</td>
                    <td>6666666</td>
                 </tr>

                 <?php

                 $inicio = 1;
                    while ($inicio < 10 ){
                        $inicio++;

                ?>            

<tr>
                    <td>99999</td>
                    <td>jjjj</td>
                    <td>5555</td>
                 </tr>
                 <?php
                    }
                 ?>   

            </tbody>


        </table>
            <br>
        <button type="submit"> Enviar</button>
    </form>
</body>
</html>