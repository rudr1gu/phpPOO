<?php
    require_once("./IConta.php");

     class Conta implements IConta{
        private $nome;
        private $idade;
        private $numConta;
        private $saldo;
        public $tipo;

        public function __construct($n, $idade, $num, $s, $t){
            $this->setNome($n);
            $this->setIdade($idade);
            $this->setNumConta($num);
            $this->setTipo($t);
            $this->setSaldo($s);
            
        }

        function getNome(){
            return $this->nome;
        }
    
        function setNome($nome){
            $this->nome = $nome;
        }
    
        function getIdade(){
            return $this->idade;
        }
    
        function setIdade($idade){
            $this->idade = $idade;
        }
    
        function getNumConta(){
            return $this->numConta;
        }
    
        function setNumConta($numConta){
            $this->numConta = $numConta;
        }

        function getTipo(){    
            return $this->tipo;
           
        }
    
        function setTipo($tipo){
                $this->tipo = $tipo;
           
        }

        function deposito($valor){
            $this->saldo += $valor;
            echo("<hr> Deposito no valor de: {$valor}R$ realizado com sucesso! <br><hr>");
        }

        function saque($valor){
            if($this->getSaldo() >= $valor){
                $this->saldo -= $valor;
                echo("<hr> Saque no valor de: {$valor}R$ realizado com sucesso! <br><hr>");
            }else{
                echo("Saldo insulficiente! <br/>");
                echo("Saldo disponivel para saque: {$this->saldo}<br/>");
            }
        }

        function getSaldo(){
            return $this->saldo;
        }
    
        function setSaldo($saldo){
            if($this->tipo == "CC"){
                $this->saldo = $saldo + 100;
            } else {
                $this->saldo = $saldo + 30;
            }
        }
    
        function status(){
            echo ("Nome:  {$this->getNome()} <br>");
            echo ("Conta: {$this->getTipo()} <br>");
            echo ("Número da Conta:  {$this->getNumConta()} <br>");
            echo ("Saldo: {$this->getSaldo()}<br>");
        }

    }