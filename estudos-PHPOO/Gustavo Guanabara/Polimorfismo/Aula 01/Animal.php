<?php
abstract class Animal
{
    protected $peso, $idade, $membros;

    public function locomover() // Os métodos não serão implementados, pois a superclasse será abstrata.
    {
    }
    public function alimentar()
    {
    }
    public function emitirSom()
    {
    }

    public function __construct($peso, $idade, $membros)
    {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }
    public function setPeso($p)
    {
        $this->peso = $p;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setIdade($id)
    {
        $this->idade = $id;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setMembros($m)
    {
        $this->membros = $m;
    }
    public function getMembros()
    {
        return $this->membros;
    }
}
