<?php

require_once 'Animal.php';

class Mamifero extends Animal
{
    private $corPelo;

    public function locomover()
    {
        echo "<p>O mamifero está correndo.";
    }
    public function alimentar()
    {
        echo "<p>O mamifero está mamando.";
    }
    public function emitirSom()
    {
        echo "<p>O mamifero está emitindo som.";
    }
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }
    public function getCorPelo()
    {
        return $this->corPelo;
    }
}
