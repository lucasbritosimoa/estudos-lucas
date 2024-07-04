<?php

require_once 'Ave.php';
require_once 'Mamifero.php';
require_once 'Peixe.php';
require_once 'Reptil.php';

require_once 'Canguru.php';
require_once 'Cachorro.php';
require_once 'Cobra.php';
require_once 'Tartaruga.php';
require_once 'GoldFish.php';
require_once 'Arara.php';


$mamifero = new Mamifero(33.5, 5, 4);
$mamifero->locomover();
$mamifero->alimentar();
echo "<hr>";
$ave = new Ave(9, 5, 4);
$ave->locomover();
$ave->alimentar();
echo "<hr>";
$reptil = new Reptil(25, 4, 0);
$reptil->locomover();
$reptil->alimentar();
echo "<hr>";
$canguru = new Canguru(55, 6, 4);
$canguru->locomover();
echo "<hr>";
$cachorro = new Cachorro(6, 5, 4);
$cachorro->locomover();
echo "<hr>";
$tartaruga = new Tartaruga(8, 50, 4);
$tartaruga->locomover();