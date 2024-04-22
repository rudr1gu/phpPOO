<?php
interface IConta{
    public function getNome();
    public function setNome($nome);
    public function getIdade();
    public function setIdade($idade);
    public function getNumConta();
    public function setNumConta($numConta);
    public function getSaldo();
    public function setSaldo($saldo);
    public function status();
    public function deposito($valor);
    public function saque($valor);
}
?>