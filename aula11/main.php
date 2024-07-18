<?php

require_once './models/Pessoa.php';
require_once './models/Aluno.php';
require_once './models/Professor.php';
require_once './models/Bolsista.php';
require_once './models/Tecnico.php';


// $p1 = new Pessoa();
$p2 = new Aluno('Pedro', 22, 'M');
$p3 = new Professor('Maria', 55, 'F');
$p4 = new Bolsista('Jão', 33, 'M');
$p5 = new Tecnico('Jão', 33, 'M');

$p2->setCurso('Informática');
$p3->setSalario(2500);
$p4->setBolsa(12.5);
$p5->setRegistroProfissional(1111);

// $p1->fazerAniversario();
$p2->pagarMensalidade();
$p3->receberAumento(550);
$p4->pagarMensalidade();
$p5->praticar();

// var_dump($p1);
var_dump($p2);
var_dump($p3);
var_dump($p4);
var_dump($p5);