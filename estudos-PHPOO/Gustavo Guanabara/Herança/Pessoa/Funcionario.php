<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa
{
    private $setor, $trabalhando;

    // Métodos tradicionais
    public function mudarTrabalho() // Se está trabalhando ou não
    {
        $this->trabalhando = ! $this->trabalhando;
    }

    // Métodos especiais
    public function setSetor($s)
    {
        $this->setor = $s;
    }
    public function getSetor()
    {
        return $this->setor;
    }
    public function setTrabalhando($t)
    {
        $this->trabalhando = $t;
    }
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
}
