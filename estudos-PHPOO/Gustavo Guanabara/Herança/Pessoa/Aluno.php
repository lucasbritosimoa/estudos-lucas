<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa
{
    private $matr, $curso;

    // Métodos tradicionais

    public function cancelarMatr()
    {
        if ($this->getMatr() == true) {
            $this->setMatr() == false;
            echo "Matrícula cancelada com sucesso.";
        } else {
            echo "Aluno não encontrado.";
        }
    }
    public function apresentar()
    {
        echo "O aluno " . $this->getNome() . " cursa " . $this->getCurso() . ".";
    }

    // Métodos especiais
    public function setMatr()
    {
        $this->matr = true;
    }
    public function getMatr()
    {
        return $this->matr;
    }
    public function setCurso($c)
    {
        $this->curso = $c;
    }
    public function getCurso()
    {
        return $this->curso;
    }
}
