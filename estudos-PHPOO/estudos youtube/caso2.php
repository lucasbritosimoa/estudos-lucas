<?php
//Como trabalhar com mais de um método

// Passo 01 - Definição da classe
class Conta
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
        return "Agência: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo} <br />";
    }

    // 01.3 - Método function adicional, para depositar um valor
    public function depositar($valor)
    {
        $this->saldo += $valor; // = $saldo + $valor;
    }
}

// Passo 02 - Instanciando um objeto
$conta1 = new Conta(3231, 801569, 5000);

// 02.1 - Chamar a function depositar para uma operação nova. Vale lembrar que todas as operações dentro da class Conta são chamadas pela mesma variável que guarda a instancia do objeto dessa classe, pois é um membro.
$conta1->depositar(1500);

echo $conta1->getDetalhes();
