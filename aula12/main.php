<?php

require_once './models/Peixe.php';
require_once './models/Ave.php';
require_once './models/Mamifero.php';
require_once './models/Reptil.php';
require_once './models/Cachorro.php';
require_once './models/Canguru.php';
require_once './models/Tartaruga.php';
require_once './models/Goldfish.php';
require_once './models/Arara.php';
require_once './models/Cobra.php';

$animal1 = new Cachorro();
$animal1->emitirSom();
$animal1->locomover();
$animal1->alimentar();

$animal2 = new Canguru();
$animal2->emitirSom();
$animal2->locomover();
$animal2->alimentar();

$animal3 = new Tartaruga();
$animal3->emitirSom();
$animal3->locomover();
$animal3->alimentar();

$animal4 = new Goldfish();
$animal4->emitirSom();
$animal4->locomover();
$animal4->alimentar();

$animal5 = new Arara();
$animal5->emitirSom();
$animal5->locomover();
$animal5->alimentar();

$animal6 = new Cobra();
$animal6->emitirSom();
$animal6->locomover();
$animal6->alimentar();
