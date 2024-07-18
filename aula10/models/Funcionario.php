<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function __construct($nome, $idade, $sexo, $setor, $trabalhando){
        parent::__construct($nome, $idade, $sexo);
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    public function getSetor(){
        return $this->setor;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho(){
        $this->trabalhando = !$this->trabalhando;
    }

    public function apresentar(){
        return "Nome: {$this->getNome()}, Idade: {$this->getIdade()}, Sexo: {$this->getSexo()}, Setor: {$this->getSetor()}, Trabalhando: ".($this->getTrabalhando() ? 'Sim' : 'Não');
    }
}