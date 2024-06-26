<?php

require_once 'Pessoa1.php';
require_once 'Livro1.php';

$p = array();
$p[0] = new Pessoa('Lucas', 27, 'M');
$p[1] = new Pessoa('Carol', 28, 'F');

$l = array();
$l[0] = new Livro('PHP Básico', 'Joseval', 300, $p[0]);
$l[1] = new Livro('PHPOO', 'Maria', 500, $p[0]);
$l[2] = new Livro('PHP Avançado', 'Alan', 800, $p[1]);

print_r($l[0]);
echo "<hr />";
$l[0]->abrir();
$l[0]->folhear(60);
$l[0]->avançarPag();
$l[0]->getDetalhes();
echo "<hr />";
$l[1]->abrir();
$l[1]->folhear(400);
$l[1]->getDetalhes();