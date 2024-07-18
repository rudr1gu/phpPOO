<?php

abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function apresentar(){
        return "Nome: ".$this->nome."<br>Idade: ".$this->idade."<br>Sexo: ".$this->sexo;
    }

    public function fazerAniversario(){
        $this->idade++;
    }
}