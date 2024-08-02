<?php

require_once 'Animal.php';

class Ave extends Animal
{
    private $corPena;
    public function locomover()
    {
        echo "<p>A ave está voando.</p>";
    }
    public function alimentar()
    {
        echo "<p>A ave está comendo frutas.</p>";
    }
    public function emitirSom()
    {
        echo "<p>A ave está emitindo som.";
    }

    public function fazerNinho()
    {
        echo "<p>A ave está fazendo ninho.";
    }
    public function setCorPena($cor)
    {
        $this->corPena = $cor;
    }
    public function getCorPena()
    {
        return $this->corPena;
    }
}
