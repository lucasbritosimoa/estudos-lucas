<?php
require_once 'Aluno.php';

// Especialização de aluno - Herança para diferença

class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        echo "Bolsa renovada com sucesso!";
    }
    public function pagarMensalidade()
    {
        echo "Mensalidade do bolsista paga!";
    }
    public function setBolsa($b)
    {
        $this->bolsa = $b;
    }
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function getDetails()
    {
        echo "<p>A pessoa {$this->getNome()} tem {$this->getIdade()} anos.";
    }
}
