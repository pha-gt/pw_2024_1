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
        /*
        echo '<div class="card" style="width: 18rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$this->titulo.'</h5>';
        echo '<p class="card-text">'.$this->artista.'</p>';
        echo '<a href="#" class="btn btn-primary">'.$this->duracion.'</a>';
        echo '</div>';
        echo '</div>';*/

        echo '<div class="card" style="width: 18rem;">
              <div class="card-body">
              <h5 class="card-title">$this->titulo</h5>
              <p class="card-text">algo</p>
              <a href="#" class="btn btn-primary">algo</a>
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


?>


</body>
</html>

