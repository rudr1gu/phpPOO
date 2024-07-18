<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function fazerAniversario() {
            $this->idade++;
        }

        public function __toString() {
            return "Nome: $this->nome, Idade: $this->idade, Sexo: $this->sexo";
        }

    }