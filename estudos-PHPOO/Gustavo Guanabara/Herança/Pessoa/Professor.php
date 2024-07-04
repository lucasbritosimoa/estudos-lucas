<?php
require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $especialidade, $salario;

    // Métodos tradicionais
    public function receberAum($v)
    {
        $this->setSalario($this->getSalario() + $v);
    }

    // Métodos especiais

    public function setEspecialidade($s)
    {
        $this->especialidade = $s;
    }
    public function getEspecidalidade()
    {
        return $this->especialidade;
    }
    public function setSalario($v)
    {
        $this->salario = $v;
    }
    public function getSalario()
    {
        return $this->salario;
    }
}
