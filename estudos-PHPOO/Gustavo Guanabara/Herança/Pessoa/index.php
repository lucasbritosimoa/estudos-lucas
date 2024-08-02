<?php
require_once 'Pessoa.php';
require_once 'Aluno.php';
require_once 'Funcionario.php';
require_once 'Professor.php';

$pessoa = new Pessoa('Mario', 32, 'M');
$aluno = new Aluno('Lucas', 27, 'M');
$professor = new Professor('Marta', 23, 'F');
$funcionario = new Funcionario('Maria', 24, 'F');

$aluno->setCurso('Informática');
$professor->setSalario(2500.75);
$funcionario->setSetor('Estoque');

$aluno->setMatr();
$professor->setEspecialidade('PHP');

$professor->receberAum(499.25);

print_r($pessoa);
print_r($aluno);
print_r($professor);
print_r($funcionario);
