<?php
class ContaBancaria
{
    private $numeroConta;
    private $dono;
    private $saldo;

    // Métodos tradicionais
    public function depositar($valor)
    {
        $this->setSaldo($this->getSaldo() + $valor);
        echo "<br>Valor de R$" . $valor . " depositado com sucesso. Novo saldo: R$" . $this->getSaldo() . ".";
    }
    public function sacar($valor)
    {
        if ($this->getSaldo() < $valor) {
            echo "Erro!";
        } else {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<br>Valor de R$" . $valor . " sacado com sucesso. Novo saldo: R$" . $this->getSaldo() . ".";
        }
    }
    public function getDetalhes()
    {
        echo "<br>Conta criada com sucesso! Nome: " . $this->getDono() . ", Nº " . $this->getNumeroConta() . "";
    }
    public function saldo(){
        echo "<br>O saldo atual é de R\${$this->saldo}.";
    }

    // Métodos especiais
    public function __construct($dono)
    {
        $this->dono = $dono;
        $this->saldo = 0;
    }

    public function setNumeroConta($numeroConta)
    {
        $this->numeroConta = $numeroConta;
    }
    public function getNumeroConta()
    {
        return $this->numeroConta;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
}
