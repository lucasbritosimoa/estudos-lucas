<?php
require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $especialidade, $salario;

    public function receberAumento($v)
    {
        $this->setSalario($this->getSalario() + $v);
    }
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function getDetails()
    {
        echo "<p>A pessoa {$this->getNome()} tem {$this->getIdade()} anos.";
    }
}
