<?php
require_once 'ControleRemoto.php';
$c1 = new ControleRemoto();
$c1->ligar();
$c1->play();
$c1->maisVolume();
$c1->maisVolume();
$c1->ligarMudo();

$c1->abrirMenu();

