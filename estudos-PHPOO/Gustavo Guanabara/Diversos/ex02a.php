<?php
class Caneta
{
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct() //public function Caneta() .. Seria a mesma coisa
    {
        $this->modelo = "bic"; // Atributos.
        $this->cor = "Azul"; // Atributos.
        $this->ponta = 0.5; // Atributos.
        $this->setTampar(); // Métodos.
    }
    public function setTampar()
    {
        $this->tampada = true;
    }
}

// Instanciar um objeto da classe Caneta
$c1 = new Caneta();

print_r($c1);