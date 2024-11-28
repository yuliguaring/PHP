<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Actualizar Usuario</h3>

<a href="index.php">Regresar</a>

<form action = "../Modelo/crud.php" method="post"> <br>
    <label for="">Primer nombre</label> <br>
    <input type="text" name="first_name"><br>
    <label for="">Segundo nombre</label><br>
    <input type="text" name="second_name"><br>
    <label for="">Primer apellido</label><br>
    <input type="text" name="lastname"><br>
    <label for="">Segundo apellido</label><br>
    <input type="text"name="second_lastname"><br>
    <label for="">Ingrese su documento</label><br>
    <input type="number"name="document"><br>
    <label for="">Ingrese una password</label><br>
    <input type="password"name="password"><br>
    <label for="">Ingrese su email</label><br>
    <input type="email"name="email"><br>
    <label for="">Ingrese su telefono</label><br>
    <input type="number"name="phone"><br>
    <label for="">Ingrese su edad</label><br>
    <input type="number"name="age"><br>
    <br>
    <button type="submit" class="shadow__btn" >Actualizar</button>


</form>
</body>
</html>