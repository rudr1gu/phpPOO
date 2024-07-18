<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function receberAumento($aumento){
        $this->salario += $aumento;
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
}