<?php

require_once './models/Video.php';
require_once './models/Gafanhoto.php';
require_once './models/Visualizacao.php';

$videos = array();
$gafanhotos = array();
$visualizacoes = array();

$videos[0] = new Video('Aula 1 de POO');
$videos[1] = new Video('Aula 12 de PHP');
$videos[2] = new Video('Aula 15 de HTML5');

$gafanhotos[0] = new Gafanhoto('Jubileu', 22, 'M', 'juba');
$gafanhotos[1] = new Gafanhoto('Creuza', 12, 'F', 'creuzita');

$visualizacoes[0] = new Visualizacao($gafanhotos[0], $videos[2]);
$visualizacoes[0]->avaliar();
$visualizacoes[1] = new Visualizacao($gafanhotos[0], $videos[1]);
$visualizacoes[1]->avaliarNota(10);
$visualizacoes[2] = new Visualizacao($gafanhotos[1], $videos[2]);
$visualizacoes[2]->avaliarPorc(85);

echo "<pre>";
print_r($videos);
print_r($gafanhotos);
print_r($visualizacoes);
echo "</pre>";

