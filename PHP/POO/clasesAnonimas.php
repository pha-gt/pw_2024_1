<?php

$arreglo = [1,2,3,4,5]; 
//$arreglo[0] =1;
//$arreglo[4]= 5;

echo $arreglo[4];

echo "<br>";

$arreglo_con_indices =[
    "primero"=>100,
    "segundo"=>200
];

echo $arreglo_con_indices["primero"];

echo "<br>";


$nombre_con_indices =[
    "nombre"=>"Fabian",
    "edad"=>3
];
echo $nombre_con_indices["nombre"];


echo "<br>";

$nombre_objeto = (Object)[
    "nombre"=>"Ramon",
    "edad"=>20
];

echo $nombre_objeto->nombre;



?>