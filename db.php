<?php

$conexion = new mysqli("localhost", "root", "", "informacion");

//var_dump($conexion);

$consulta =  $conexion->query(" SELECT * FROM usuarios");
    
//var_dump($consulta);   

$registro = $consulta->fetch_object();
//var_dump($registro); 

echo $registro->id;
echo "<br>";
echo $registro->nombres;
echo "<br>";
echo $registro->documento;
echo "<br>";
echo $registro-> telefono;

$consulta2 =  $conexion ->query("SELECT * FROM usuarios where documento = 06121824")->fetch_object();
//var_dump($consulta2);
echo "<br>";
if ($consulta2){

    echo "verdadero";
} else
    echo "falso";



//$insert = $conexion-> query("INSERT INTO usuarios VALUES(NULL, 06121824, 'andres',3145944212)" );

//var_dump($insert);

