<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ipod</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="row">


    <div class="col-9">
    <?php
    class Melodia{
        public $titulo;
        public $artista;
        public $duracion;
        public $archivo;

        //constructor
        public function __construct($_titulo,$_artista,$_duracion){
            $this->titulo= $_titulo;
            $this->artista= $_artista;
            $this->duracion= $_duracion;
            $this->archivo="./melodia3.mp3";
        }

        public function imprimir()
        {

            echo '<div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">'.$this->titulo.'</h5>
                <p class="card-text">'.$this->artista.'</p>
                <p class="card-text">Duracion:'.$this->duracion.'</p>
                </div>
                <audio src="./melodia3.mp3" controls  type="audio/mpeg" style="width:90%; margin:auto;"></audio>
                </div>';


        }
    }

    class Reproductor{
        const ESTADO_REPRODUCIENDO = 1;
        const ESTADO_PAUSADO = 2;
        const ESTADO_SIN_MELODIA= 0;
        public $lista_reproduccion;
        public $indice_lista;
        public $melodiaActual=null;
        public $estado=0;

        public function __construct()
        {
            $this->melodiaActual=null;
            $this->indice_lista=-1;
        }

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
            
            $estado_con_letra= ($this->estado==Reproductor::ESTADO_REPRODUCIENDO?"Reproduciendo...": 
                                ($this->estado==Reproductor::ESTADO_PAUSADO?"Pausado":"Si melodia" ));

            echo '<div class="card m-2 p-3 " style="width: 22rem; background-color:gray;">';
            if(isset($this->melodiaActual)) $this->melodiaActual->imprimir();
            else echo '<div class="card m-2 px-2 " style="width: 18rem;"><div class="card-body pb-0 px-2">
                <h5 class="card-title">&nbsp;</h5>
                <p class="card-text">&nbsp;</p>
                <p class="card-text">Duracion:</p>
                <audio src="" controls autoplay  type="audio/mpeg" style="width:90%; margin:0 auto 0;"></audio>
                </div>
                </div>';
            echo "<img src='ipod_wheel.svg' style='width:80%; margin:auto;' >";
            echo "</div>";

        }
    }

    $melodia1= new Melodia("Fly me to the moon", "Frank Sinatra", 4.20);
    $melodia2 = new Melodia("Be my Baby", "Ronettes",2.41);
    $melodia3 = new Melodia("Lawrence de Arabia", "Hombres G",2.41);
    $melodia4 = new Melodia("Sound Garden", "Blackhole Sun ",3.2);
    $lista_canciones=[$melodia1,$melodia2,$melodia3,$melodia4];


    $c= isset($_GET["c"])?$_GET["c"]:0;

    $ipod = new Reproductor();
    if($c>0) $ipod->reproducir($lista_canciones[$c-1]);
    $ipod->mostrarPantalla();


    ?>
    </div>


    <div class="col-3 ">
        <br><a href="./ipod.php">Blanco</a>
        <ul class="list-group mx-3">
        <?php
            for($i = 0;$i<count($lista_canciones);$i++)
            {
                echo "<li class='list-group-item text-white ".($c==$i+1?"active":"")."'><a  style='text-decoration: none;' ".($c==$i+1?"class='text-white'":"")." href='./ipod.php?c=".($i+1)."'>".$lista_canciones[$i]->titulo."</a></li>";
                //echo "<br><a href='./ipod.php?c=".($i+1)."'>".$lista_canciones[$i]->titulo."</a>";
            }


        
        ?>

        <!--
        </ul>
        <ul class="list-group mx-3" style="font-weight: bold;">
            <li class="list-group-item <?php echo "Hola mundo" ?> "> An active item</li>
            <li class="list-group-item <?php echo ($c==2?" active ":""); ?> "> A second item</li>
            <li class="list-group-item ">A third item</li>
            <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
        -->
    

    </div>

    


</div>




</body>
</html>

