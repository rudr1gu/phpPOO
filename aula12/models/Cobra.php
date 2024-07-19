<?php

require_once 'Reptil.php';

class Cobra extends Reptil{
    public function locomover(){
        echo "<p>Rastejando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo outros animais</p>";
    }

    public function emitirSom(){
        echo "<p>Som de cobra</p>";
    }   
}