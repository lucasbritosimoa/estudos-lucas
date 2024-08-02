<?php
require_once 'Visitante.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Bolsista.php';
require_once 'Tecnico.php';

$visitante = new Visitante('Ana', 29, 'F');
print_r($visitante);

$aluno = new Aluno('João', 35, 'M');
$aluno->setCurso('Informática');
$aluno->setMatricula('111');
print_r($aluno);

$professor = new Professor('Maria', 42, 'F');
print_r($professor);

$bolsista = new Bolsista('Pedro', 27, 'M');
print_r($bolsista);

$tecnico = new Tecnico('Laura', 31, 'F');
print_r($tecnico);
