<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Método construtor, que inicializa o saldo em 0 e status fechado.
    public function __construct()
    {
        $this->saldo = 0;
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }
    // Método para abrir conta, definindo o tipo, saldo inicial e status.
    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Erro! Conta com saldo não pode ser fechada.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Erro! Conta com débito não pode ser fechada.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta encerrada com sucesso.</p>";
        }
    }
    public function depositar($valor)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Foi depositado R\${$valor} na conta de {$this->getDono()}. Saldo atual: R$" . $this->getSaldo() . "</p>";
        } else {
            echo "<p>Erro, conta fechada.</p>";
        }
    }
    public function sacar($valor)
    {
        if ($this->getStatus() == true) {

            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Foi sacado R\${$valor} da conta de " . $this->getDono() . ". Novo saldo: R$" . $this->getSaldo() . ". </p>";
            } else {
                echo "<p>Erro, saldo insuficiente para saque de R\${$valor}. Saldo atual: R$" . $this->getSaldo() . "</p>";
            }
        } else {
            echo "<p>Erro, conta encontra-se fechada.</p>";
        }
    }

    public function pagarMensal()
    {
        // Se o tipo da conta for corrente, paga 12. Se não for, paga 20.
        $mensal = ($this->getTipo() == "CC") ? 12 : 20;

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $mensal);
            echo "Parabéns " . $this->getDono() . "! Sua mensalidade da " . $this->getTipo() . " foi paga no valor de R\${$mensal}.";
        } else {
            echo "Erro! Conta com tipo indefinido, ou conta inativa.";
        }
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
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
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
}
