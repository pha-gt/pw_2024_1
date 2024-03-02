<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
class Melodia{
    public $titulo;
    public $artista;
    public $duracion;

    //constructor
    public function __construct($_titulo,$_artista,$_duracion){
        $this->titulo= $_titulo;
        $this->artista= $_artista;
        $this->duracion= $_duracion;
    }

    public function imprimir()
    {

        echo '<div class="card m-2" style="width: 18rem;">
              <div class="card-body">
              <h5 class="card-title">'.$this->titulo.'</h5>
              <p class="card-text">'.$this->artista.'</p>
              <p class="card-text">Duraccion:'.$this->duracion.'</p>
              </div>
              </div>';

        /*
        echo "<br>*********";
        echo "<br>".$this->titulo;
        echo "<br>Autor:".$this->artista;
        echo "<br>duracion:".$this->duracion;
        echo "<br>*********";
        */
    }
}

class Reproductor{
    const ESTADO_REPRODUCIENDO = 1;
    const ESTADO_PAUSADO = 2;
    const ESTADO_SIN_MELODIA= 0;

    public $melodiaActual=null;
    public $estado=0;

    public function reproducir($unaMelodia)
    {
        $this->melodiaActual = $unaMelodia;
        $this->estado = Reproductor::ESTADO_REPRODUCIENDO;
    }

    public function pausar()
    {
        $this->estado = Reproductor::ESTADO_PAUSADO;
    }

    public function mostrarPantalla()
    {
        $estado_con_letra= "";
        /*
        switch($this->estado)
        {
            case Reproductor::ESTADO_REPRODUCIENDO:
                $estado_con_letra= "Reproduciendo...";
            break;
            case Reproductor::ESTADO_PAUSADO:
                $estado_con_letra= "Pausado";
            break;
            case 0:
                $estado_con_letra= "Sin meloda";
            break;
            default;
        }*/
        $estado_con_letra= ($this->estado==Reproductor::ESTADO_REPRODUCIENDO?"Reproduciendo...": 
                            ($this->estado==Reproductor::ESTADO_PAUSADO?"Pausado":"Si melodia" ));




        echo "<div>";
        echo "<br>**********************";
        echo "<br>********   IPOD  ***********";
        if(isset($this->melodiaActual)) $this->melodiaActual->imprimir();

        echo "<br>Estado: ".$estado_con_letra;
        echo "<br>**********************";
        echo "</div>";

    }
}

$melodia1= new Melodia("Fly me to the moon", "Frank Sinatra", 4.20);
echo json_encode($melodia1);

$melodia2 = new Melodia("Be my Baby", "Ronettes",2.41);
//$melodia1->imprimir();
$ipod = new Reproductor();
$ipod->mostrarPantalla();


$ipod->reproducir($melodia2);
$ipod->mostrarPantalla();
$ipod->pausar();
$ipod->mostrarPantalla();


echo json_encode($ipod);












/*
echo "Creando Objeto";
$melodia1= new Melodia("Fly me to the moon", "Frank Sinatra", 4.20);
echo "<br>Objeto creado con nombre:".$melodia1->titulo;
echo "<br>imprimir melodia1";
$melodia1->imprimir();
echo "<br>Creando Objeto";
$melodia2 = new Melodia("Be my Baby", "Ronettes",2.41);
$melodia2->imprimir();

$melodia1->duracion= 2.40;
$melodia1->imprimir();
*/

?>


</body>
</html>

