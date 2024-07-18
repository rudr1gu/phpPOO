<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function __construct($nome, $idade, $sexo, $especialidade, $salario){
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function receberAumento($aumento){
        $this->salario += $aumento;
    }

    public function apresentar(){
        return "Nome: {$this->getNome()}, Idade: {$this->getIdade()}, Sexo: {$this->getSexo()}, Especialidade: {$this->getEspecialidade()}, Salario: {$this->getSalario()}";
    }
}