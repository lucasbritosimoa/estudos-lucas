<?php 
require_once 'classchat01.php';

$joao = new ContaBanco();
$joao->abrirConta("CP");
$joao->setDono("João");
$joao->setNumConta(1234);
$joao->depositar(400);
$joao->sacar(1000);
$joao->pagarMensal();

echo "<hr>";
$maria = new ContaBanco();
$maria->abrirConta("CC");
$maria->setDono("Maria");
$maria->setNumConta(5678);
$maria->depositar(600);
$maria->sacar(150);
$maria->pagarMensal();

echo "<hr>";
print_r($joao);
print_r($maria);