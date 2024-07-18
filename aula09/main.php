<?php

require_once './models/Pessoa.php';
require_once './models/Livro.php';

$p[0] = new Pessoa("Pedro", 22, "M");
$p[1] = new Pessoa("Maria", 31, "F");

$l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
$l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
$l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

$l[0]->abrir();
$l[0]->folhear(80);
$l[0]->avancarPag();
$l[0]->detalhes();

$l[1]->abrir();
$l[1]->folhear(50);
$l[1]->avancarPag();
$l[1]->detalhes();

$l[2]->abrir();
$l[2]->folhear(100);
$l[2]->avancarPag();
$l[2]->detalhes();
