<?php

require_once './models/Cachorro.php';

$l = new Lobo();
$l->emitirSom();

echo "<br>";

$c = new Cachorro();
$c->emitirSom();
$c->reagirFrase("Olá");
$c->reagirHora(11, 45);
$c->reagirDono(true);
$c->reagirIdadePeso(2, 12);
$c->reagirIdadePeso(17, 4);

