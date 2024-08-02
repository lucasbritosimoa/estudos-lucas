<?php
class Caneta
{
    public $modelo;
    private $ponta;

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($p)
    {
        $this->ponta = $p;
    }
}

// Instanciar um objeto da classe Caneta
$c1 = new Caneta();

// Uso do metodo set para atribuição de valor via método
$c1->setModelo("bic");
$c1->setPonta(0.5);

// Não se pode acessar o atributo diretamente pelo método get, porque o modelo é private.
//$c1->ponta = 12;

echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.";
