<?php

// Classe mãe - superclasse

class Pessoa
{
    // Atributos da cápsula
    private $nome, $idade, $sexo;

    // Métodos tradicionais
    public function fazerAniv()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    // Métodos especiais

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
    public function setIdade($i)
    {
        $this->idade = $i;
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
