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

}

?>