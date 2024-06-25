<?php
// Objetos: Janela, garrafa. O que ela tem? o que ela faz? como ela está agora?
// A janela de madeira é um objeto da class Janela. Ela tem um material, uma cor, um tamanho. A classe janela pode estar aberta ou fechada, pode estar lixada ou não. No momento, ela está aberta, não está lixada.

class Caneta
{
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

/*
    public function __construct($modelo, $cor, $ponta, $carga, $tampada)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->carga = $carga;
        $this->tampada = $tampada;
    }
*/
    public function rabiscar()
    {
        if ($this->tampada == true) { // Se está tampada, dá erro. Se não tampada, sim destampada, entao rabisca.
            echo "<p>Erro! Caneta tampada!</p>";
        } else {
            echo "<p>Estou rabiscando!</p>";
        }
    }
    public function tampar()
    {
        $this->tampada = true;
    }
    public function destampar()
    {
        $this->tampada = false;
    }
}

// Objeto, partindo da classe Caneta.
$c1 = new Caneta();
$c1->cor = "Azul";
$c1->ponta = 0.5;
//$c1->tampada = false; Quando é verdadeiro mostra 1, quando falso mostra vazio.
$c1->destampar();

// Chamando um método que tem na classe, baseado nas informações desse objeto $c1.
$c1->rabiscar();

// Mostrando o estado atual do objeto
//print_r($c1);

echo "<br>";
// Segundo objeto, que é uma variação diferente da c1, utilizando a mesma base, class Caneta.
$c2 = new Caneta();
$c2->cor = "Verde";
$c2->tampar();
$c2->rabiscar();
//print_r($c2);
