<?php
$method = $_SERVER['    '];
header("Access-Control-Allow_Origin:*");
header("Content-Type: application/json");

require "Melodia.php";


    $melodia1 = new Melodia("Fly me to the moon", "Frank Sinatra", 4.20);
    $melodia2 = new Melodia("Be my Baby", "Ronettes",2.41);
    $melodia3 = new Melodia("Lawrence de Arabia", "Hombres G",2.41);
    $melodia4 = new Melodia("Sound Garden", "Blackhole Sun ",3.2);
    $melodia5 = new Melodia("Primera cita", "Carin Leon ",3.5);
    
    $lista_canciones=[$melodia5, $melodia2, $melodia3, $melodia4, $melodia1];

    $cadena = json_encode($lista_canciones); //Convierte la cadena de tipo PHP en una de tipo JSON
    echo $cadena;
    


?>