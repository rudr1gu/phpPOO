<?php

require_once './models/Pessoa.php';
require_once './models/Funcionario.php';
require_once './models/Professor.php';
require_once './models/Aluno.php';

$p1 = new Pessoa('Pedro', 22, 'M');
$p2 = new Aluno('Maria', 31, 'F', 1234, 'Informatica');
$p3 = new Professor('Claudio', 55, 'M', 'Matematica', 2500);
$p4 = new Funcionario('Fabiana', 36, 'F', 'Recepcao', true);

echo "<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);
echo "</pre>";

$p2->cancelarMatricula();
$p3->receberAumento(500);
$p4->mudarTrabalho();

echo "<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);
echo "</pre>";
