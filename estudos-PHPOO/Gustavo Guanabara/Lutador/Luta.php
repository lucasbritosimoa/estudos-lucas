<?php
require_once 'Lutador.php';
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // Métodos tradicionais

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria()  === $l2->getCategoria() && $l1 != $l2) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar()
    {
        if ($this->aprovada == true) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2); //0 empate, 1 vit desafiado, 2 vit desafiante

            switch ($vencedor) {
                case 0: // Empate
                    echo "<p>Aconteceu um EMPATE!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();

                    break;
                case 1: // Desafiado vence
                    echo "<p>O vencedor foi " . $this->desafiado->getNome() . "!!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();

                    break;
                case 2: // Desafiante vence
                    echo "<p>Já temos um vencedor, o " .  $this->desafiante->getNome() . "!!";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>Luta NÃO pode acontecer!";
        }
    }

    // Métodos especiais

    private function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }
    private function getDesafiado()
    {
        return $this->desafiado;
    }
    private function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }
    private function getDesafiante()
    {
        return $this->desafiante;
    }
    private function setRound($rounds)
    {
        $this->rounds = $rounds;
    }
    private function getRound()
    {
        return $this->rounds;
    }
    private function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
    private function getAprovada()
    {
        return $this->aprovada;
    }
}
