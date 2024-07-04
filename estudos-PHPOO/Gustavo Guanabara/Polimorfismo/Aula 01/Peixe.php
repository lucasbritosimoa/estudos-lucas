<?php

require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;
    public function alimentar()
    {
        echo "<p>O peixe está comendo substâncias.";
    }
    public function emitirSom()
    {
        echo "<p>O peixe não faz som.";
    }
    public function locomover()
    {
        echo "<p>O peixe está nadando.";
    }
    public function soltarBolha()
    {
        echo "<p>O peixe está soltando bolhas.";
    }
    public function setCorEscama($cor)
    {
        $this->corEscama = $cor;
    }
    public function getCorEscama()
    {
        return $this->corEscama;
    }
}
