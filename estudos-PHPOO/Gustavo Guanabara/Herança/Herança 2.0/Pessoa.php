<?php
// Classe abistrada, com função final
abstract class Pessoa
{
    private $nome, $idade, $sexo;

    public final function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }
    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    
}
