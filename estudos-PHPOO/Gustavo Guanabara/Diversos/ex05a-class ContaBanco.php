<?php
/*
    Jubileu e Creuza, tem um valor para ser depositado num banco. Primeiro vão criar contas. Jubileu conta poupança, tem 300,00, vai depositar. A Creuza tem 500,00 e vai colocar numa corrente. A Creuza vai sacar 100,00.

    class ContaBanco: (get e set) +Numero da conta, #tipo de conta (cor ou pou), -quem é o dono, -saldo, -status (aberta ou fechada)
    +Métodos: abrir conta, fechar conta, depositar um valor, sacar um valor, pagar a mensalidade.
    Corrente e Poupança objeto.
    1. Tipo da conta: aceita só dois valores, conta poupança ou conta corrente. CP ou CC.
    2. Quando abrir conta, muda o status para verdadeiro. Se fechar, status falso.
    3. Quando abrir conta, que tipo de conta é. se abrir CC ganha 50,00. se CP ganha 150,00.
    4. Pra fechar conta, não pode deixar saldo nem débito.
    5. Pra fazer um depósito, tem que estar aberta no status.
    6. Pra sacar, precisa estar aberta, e precisa ter saldo pra saque. saldo > saque . falso
    7. Mensalidade será cobrada direto do saldo. CC paga 12, CP paga 20.
    8. Contrutor. sempre que uma conta for criada, o status será fechada (ainda), e saldo 0.
*/

// Criação da classe pai.
class ContaBanco
{
    public $numeroConta;
    protected $tipoConta;
    private $donoConta;
    private $saldo;
    private $status;

    // Contrutor (passo 08)

    public function __construct()
    {
        $this->status = false; // Quando criada, estará fechada.
        $this->saldo = 0;
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function abrirConta($tipo)
    {
        // 1. Qual será o tipo da conta (CC ou CP)? 2. depois de decidido, ela precisará ser aberta. 3. se abrir CC ganha 50,00. se CP ganha 150,00.
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    // 1. Precisa verificar o status, se tem saldo ou debito. 2. Depois, fecha conta.
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Erro! Conta com saldo, não pode ser encerrada.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Erro! Conta em débito, não pode ser encerrada.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta encerrada com sucesso.</p>";
        }
    }
    public function depositar($dep)
    {
        // Se a conta estiver aberta, dá pra depositar.
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $dep);
            echo "<p>Parabéns {$this->getDonoConta()}! Depósito de R\${$dep} realizado com sucesso. Novo saldo: " . $this->getSaldo() . ".</p>";
        } else {
            echo "<p>Erro! Conta fechada, não pode receber depósito.</p>";
        }
    }
    public function sacar($saque)
    // 1. A conta está aberta? Precisa verificar se o saldo é maior que o valor sacado.
    {
        if ($this->getStatus() == true && $this->getSaldo() >= $saque) {
            $this->setSaldo($this->getSaldo() - $saque);
            echo "<p>Olha só, ".$this->getDonoConta()."! Saque de R\${$saque} realizado com sucesso! Novo saldo: " . $this->getSaldo() . "</p>";
        } else {
            echo "<p>Erro! Conta fechada, ou saldo insuficiente. Saque não realizado.</p>";
        }
    }
    public function pagarMensal()
    // Primeiro, a conta está ativa? Se a conta for corrente, paga 12. Se for poupança, paga 20.
    {
        if ($this->getTipo() == "CC") {
            $mensal = 12;
        } else {
            $mensal = 20;
        }

        if ($this->getStatus() == true && $this->getTipo() == "CC") {
            $this->setSaldo($this->getSaldo() - $mensal);

            echo "<p>Mensalidade de R\${$mensal} da CC paga com sucesso na conta de " . $this->getDonoConta() . ". Novo saldo: " . $this->getSaldo() . ".</p>";
        } elseif ($this->getStatus() == true && $this->getTipo() == "CP") {
            $this->setSaldo($this->getSaldo() - $mensal);

            echo "<p>Mensalidade de R\${$mensal} da CP paga com sucesso na conta de " . $this->getDonoConta() . ". Novo saldo: " . $this->getSaldo() . "</p>";
        } else {
            echo "<p>Erro! Algo incorreto na conta.</p>";
        }
        //".."
    }
    public function getNumConta()
    {
        return $this->numeroConta;
    }
    public function setNumConta($num)
    {
        $this->numeroConta = $num;
    }
    public function getTipo()
    {
        return $this->tipoConta;
    }
    public function setTipo($tipo)
    {
        $this->tipoConta = $tipo;
    }
    public function getDonoConta()
    {
        return $this->donoConta;
    }
    public function setDonoConta($dono)
    {
        $this->donoConta = $dono;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
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
