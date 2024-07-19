<?php

class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    public function locomover(){
        echo "Animal se locomovendo";
    }

    public function alimentar(){
        echo "Animal se alimentando";
    }

    public function emitirSom(){
        echo "Animal emitindo som";
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getMembros(){
        return $this->membros;
    }

    public function setMembros($membros){
        $this->membros = $membros;
    }
    
}