<?php
require_once 'Animal.php';

class Reptil extends Animal
{
    private $corEscama;
    public function locomover()
    {
        echo "<p>O réptil está rastejando.";
    }
    public function alimentar()
    {
        echo "<p>O réptil está comendo vegetais.";
    }
    public function emitirSom()
    {
        echo "<p>O réptil está emitindo som.";
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
