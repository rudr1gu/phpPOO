<?php

require_once 'Ave.php';

class Arara extends Ave{
    public function emitirSom(){
        echo "<p>Som de arara</p>";
    }

    public function locomover(){
        echo "<p>Voando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo sementes</p>";
    }

}