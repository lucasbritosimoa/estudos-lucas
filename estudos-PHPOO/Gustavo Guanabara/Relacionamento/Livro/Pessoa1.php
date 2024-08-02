<?php
class Pessoa
{
    private $nome, $idade, $sexo;

    // Métodos tradicionais
    public function fazerAnivers()
    {
        $this->setIdade($this->getIdade() + 1);
        //$this->idade ++;
    }

    // Métodos especiais - construct, getters and setters

    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    public function setNome($no)
    {
        $this->nome = $no;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setIdade($id)
    {
        $this->idade = $id;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setSexo($se)
    {
        $this->sexo = $se;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
}
