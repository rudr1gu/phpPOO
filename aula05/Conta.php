<?php
    class Conta{
        private $nome;
        private $idade;
        private $numConta;
        private $saldo;

        public function __construct($n, $idade, $num, $s){
            $this->setNome($n);
            $this->setIdade($idade);
            $this->setNumConta($num);
            $this->setSaldo($s);
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

        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($numConta){
            $this->numConta = $numConta;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setsaldo($saldo){
            $this->saldo = $saldo;
        }

        public function status(){
            echo "Nome: " . $this->getNome() . "<br>";
            echo "Idade: " . $this->getIdade() . "<br>";
            echo "Número da Conta: " . $this->getNumConta() . "<br>";
            echo "Saldo: " . $this->getSaldo() . "<br>";
        }

        
    }