<?php
require_once 'Aluno.php';

class tecnico extends Aluno{
    private $registroProfissional;

    public function praticar(){
        echo "<p>Praticando...</p>";
    }

    public function getRegistroProfissional(){
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional){
        $this->registroProfissional = $registroProfissional;
    }
}