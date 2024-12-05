<?php

include "../CONFIG/db.php";

$product = $_POST['product'];
$description =$_POST['description'];
$price = $_POST['price'];

$conexion->query("INSERT INTO products values(

    null, '$product','$description','$price',null
    )");