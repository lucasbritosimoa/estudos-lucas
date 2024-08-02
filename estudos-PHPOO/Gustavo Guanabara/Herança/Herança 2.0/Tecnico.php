<?php
require_once 'Aluno.php';

// Especialização de aluno - Herança para diferença
class Tecnico extends Aluno
{
    private $registroProfissional;

    public function praticar()
    {
        echo "O técnico está praticando";
    }
    public function setRegistro($r)
    {
        $this->registroProfissional = $r;
    }
    public function getRegistro()
    {
        return $this->registroProfissional;
    }
    public function getDetails()
    {
        echo "<p>A pessoa {$this->getNome()} tem {$this->getIdade()} anos.";
    }
}
