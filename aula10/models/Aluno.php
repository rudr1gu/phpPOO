<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso){
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function cancelarMatricula(){
        $this->matricula = false;
    }

    public function apresentar(){
        return "Nome: {$this->getNome()}, Idade: {$this->getIdade()}, Sexo: {$this->getSexo()}, Matricula: {$this->getMatricula()}, Curso: {$this->getCurso()}";
    }
}