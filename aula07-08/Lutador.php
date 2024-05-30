<?php

require_once './ILutador.php';


class Lutador{
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos
    public function apresentar(){
        echo "<p>--------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.";
    }

    public function status(){
        echo "<p>--------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e";
        echo " empatou " . $this->getEmpates() . " vezes.";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Métodos especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($no){
        $this->nome = $no;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($id){
        $this->idade = $id;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($al){
        $this->altura = $al;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($pe){
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($vi){
        $this->vitorias = $vi;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($de){
        $this->derrotas = $de;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($em){
        $this->empates = $em;
    }
    

}