<?php
require_once 'Pessoa.php';

// Herança para diferença
class Aluno extends Pessoa
{
    private $matricula, $curso;
    public function pagarMensalidade()
    {
        echo "<p>Mensalidade paga com sucesso!";
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function getDetails()
    {
        echo "<p>A pessoa {$this->getNome()} tem {$this->getIdade()} anos.";
    }
}
