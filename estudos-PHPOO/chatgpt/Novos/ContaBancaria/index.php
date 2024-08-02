<?php
require_once 'ContaBancaria.php';

$p1 = new ContaBancaria('Lucas');
$p1->setNumeroConta(1234);
$p1->getDetalhes();

$p1->depositar(500);
$p1->sacar(200);
$p1->saldo();