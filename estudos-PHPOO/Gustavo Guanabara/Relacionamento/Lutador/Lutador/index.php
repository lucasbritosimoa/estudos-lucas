<?php
require_once 'Lutador.php';
require_once 'Luta.php';

$l = array();

$l[0] = new Lutador ("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
$l[1] = new Lutador ("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
$l[2] = new Lutador ("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
$l[3] = new Lutador ("Deadcode", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
$l[4] = new Lutador ("UFOcobol", "Brasil", 37, 1.80, 119.3, 5, 4, 3);
$l[5] = new Lutador ("Nerdart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

/*$l[2]->status();
$l[3]->status();

$l[3]->apresentar();
$l[3]->perderLuta();*/

$UCE01 = new Luta();
$UCE01->marcarLuta($l[0], $l[1]);
$UCE01->lutar();

$l[0]->status();
$l[1]->status();

