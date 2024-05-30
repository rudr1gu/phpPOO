<?php
require_once './ILutador.php';
require_once './Lutador.php';
require_once './Luta.php';

$l = array();
$l[0] = new Lutador('Luffy', 'Brasil', 19, 1.70, 70, 10, 0, 0);
$l[1] = new Lutador('Zoro', 'Japão', 30, 1.75, 80, 10, 0, 0);
$l[2] = new Lutador('Sanji', 'França', 25, 1.75, 71, 10, 0, 0);
$l[3] = new Lutador('Nami', 'Italia', 18, 1.60, 61, 10, 0, 0);
$l[4] = new Lutador('Usopp', 'Australia', 19, 1.69, 68, 10, 0, 0);
$l[5] = new Lutador('Chopper', 'Suiça', 19, 1.20, 50, 10, 0, 0);
$l[6] = new Lutador('Robin', 'Russia', 21, 1.65, 68, 10, 0, 0);
$l[7] = new Lutador('Franky', 'Italia', 35, 1.95, 100, 10, 0, 0);
$l[8] = new Lutador('Brook', 'US', 90, 1.80, 45, 10, 0, 0);

$luta = new Luta();
$luta->marcarLuta($l[1], $l[2]);
$luta->lutar();
$l[0]->status();
$l[2]->status();

