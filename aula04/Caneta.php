<?php

    class Caneta{
        public $modelo;
        private $ponta;
        private $tampada;
        private $cor;

        public function __construct($m, $p, $c){
            $this->cor = $c;
            $this->setModelo($m);
            $this->setPonta($p);
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getPonta(){
            return $this->ponta;
        }

        public function setPonta($p){
            $this->ponta = $p;
        }

        public function tampar(){
            $this->tampada = true;
        }

    }