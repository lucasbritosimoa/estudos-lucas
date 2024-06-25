<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    // Método especial - Inicialização do Construtor
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    // Métodos especiais - getters e setters dos atributos, todos privados
    private function setVolume($vol)
    {
        $this->volume = $vol;
    }
    private function getVolume()
    {
        return $this->volume;
    }
    private function setLigado($lig)
    {
        $this->ligado = $lig;
    }
    private function getLigado()
    {
        return $this->ligado;
    }
    private function setTocando($toc)
    {
        $this->tocando = $toc;
    }
    private function getTocando()
    {
        return $this->tocando;
    }

    //  Implementação dos métodos abstratos da interface, agora com a ação
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu() // Status ligado, tocando e volume.
    {
        // Se estiver ligado (getLigado() == true) retorna sim. Senão, retorna não.
        echo "<em><br>O Controle está ligado? </em>" . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<em><br>O Controle está tocando? </em>" . ($this->getTocando() ? "ESTÁ" : "NÃO ESTÁ");
        echo "<em><br>Volume </em>" . $this->getVolume();

        echo "<hr>";
    }
    public function fecharMenu()
    {
        echo "<br>Fechando MENU";
    }
    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 10);
        } else {
            echo "Erro! Controle desligado.";
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 10);
        } else {
            echo "Erro! Controle desligado.";
        }
    }
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        } else {
            echo "Volume já é 0.";
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        } else {
            echo "Volume já não era 0.";
        }
    }
    public function play()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
