<?php

require_once 'Lobo.php';

class Cachorro extends Lobo{
    
    public function emitirSom(){
        echo "Au! Au! Au!";
    }
    
    public function reagirFrase($frase){
        if($frase == "Toma comida" || $frase == "Olá"){
            echo "Abanar e latir";
        }else{
            echo "Rosnar";
        }
    }
    
    public function reagirHora($hora, $min){
        if($hora < 12){
            echo "Abanar";
        }elseif($hora >= 18){
            echo "Ignorar";
        }else{
            echo "Abanar e latir";
        }
    }
    
    public function reagirDono($dono){
        if($dono){
            echo "Abanar";
        }else{
            echo "Rosnar e latir";
        }
    }
    
    public function reagirIdadePeso($idade, $peso){
        if($idade < 5){
            if($peso < 10){
                echo "Abanar";
            }else{
                echo "Latir";
            }
        }else{
            if($peso < 10){
                echo "Rosnar";
            }else{
                echo "Ignorar";
            }
        }
    }
}