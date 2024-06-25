<?php
require_once 'ex05a-class ContaBanco.php';

$jubileu = new ContaBanco();
$jubileu->abrirConta("CC");
$jubileu->setDonoConta("Jubileu");
$jubileu->setNumConta(1234);


$creuza = new ContaBanco();
$creuza->abrirConta("CP");
$creuza->setDonoConta("Creuza");
$creuza->setNumConta(5678);

// Depósito de 300 pra Jubileu, e 500 pra Creuza.
$jubileu->depositar(300);
$creuza->depositar(500);

// Saque de 100 para Creuza.
$creuza->sacar(100);

// Agora, vamos pagar a mensalidade dos dois.
$jubileu->pagarMensal();
$creuza->pagarMensal();

// Vou tentar sacar 1000 reais na conta da Creuza
$creuza->sacar(1000);

// Vou tentar fechar a conta do Jubileu
$jubileu->fecharConta();

// Vou tirar o saldo da conta para fechá-la
$jubileu->sacar(338);
$jubileu->fecharConta();
