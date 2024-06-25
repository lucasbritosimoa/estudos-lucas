<?php
//Herança no PHPOO - Conta, Poupanca e Corrente

// Passo 01 - Definição da classe

//Esse abstract significa que essa é uma classe estrutural, ou seja, só serve de base para outras classes. Nesse caso, a classe utilizada é a Corrente, que usa a Conta como estrutura.
abstract class Conta
{

    // 01.1 - Propriedades da classe
    protected $agencia;
    protected $conta;
    protected $saldo;

    // 01.2 - function __construct($this->)
    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }
    //  01.3 - Método function get
    public function getDetalhes()
    {
        return "Agência: {$this->agencia} | Conta: {$this->conta} | <strong>Saldo: {$this->saldo}</strong> <hr />";
    }

    // 01.3 - Método function adicional, para depositar um valor
    public function depositar($valor)
    {
        $this->saldo += $valor; // = $saldo + $valor;
        echo "Depósito realizado de {$valor} | <strong>Novo saldo: {$this->saldo}</strong> <hr />";
    }
}

// Agora vou criar uma nova class para conta Poupanca usando o extends. Quer dizer que a class Poupanca começa com tudo herdado da class Conta.

// final class Poupanca -> esse final significa que não poderia mais estender ela para outras classes.
class Poupanca extends Conta
{
    // Vou colocar um novo método function para saque.
    public function saque($valor)
    {
        // Se o saldo na conta for maior que o valor sacado, vai realizar o saque.
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor; // $saldo - $valor;
            echo "Saque realizado de {$valor} | <strong>Novo saldo: {$this->saldo}</strong> <hr />";
        } else {
            echo "<strong>Saque de {$valor} não autorizado</strong>, saldo insuficiente | <strong>Saldo atual: {$this->saldo}</strong> <hr />";
        }
    }
}

// A classe conta tem um limite emergencial de R$500,00
class Corrente extends Conta
{
    protected $limite;

    // Para não precisar rescrever todo construtor da conta, vamos colocar:
    public function __construct($agencia, $conta, $saldo, $limite)
    { // Vamos chamar o construtor da classe Conta (PAI), passando as propriedades que já existiam, e passando com $this-> a nova propriedade limite.
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }
    public function saque($valor)
    {
        // Se o saldo + limite na conta for maior que o valor sacado, vai realizar o saque.

        if (($this->saldo + $this->limite) >= $valor) {
            $this->saldo -= $valor; // $saldo - $valor;
            echo "Saque realizado de {$valor} | <strong>Novo saldo: {$this->saldo}</strong> <hr />";
        } else {
            echo "<strong>Saque de {$valor} não autorizado</strong>, saldo insuficiente | <strong>Saldo atual: {$this->saldo}</strong> <hr />";
        }
    }
}

//agencia, conta, saldo, limite
$conta1 = new Corrente(3231, 801569, 5000, 500);

$conta1->depositar(1800);
$conta1->saque(2500);
$conta1->saque(4500);

echo $conta1->getDetalhes();
