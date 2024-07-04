<?php

require_once 'Veiculo.php';

class Carros extends Veiculo
{
    private $numeroPortas;
    public function __construct($numeroPortas, $marca, $modelo, $ano)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->numeroPortas = $numeroPortas;
    }

    public function getDetalhes()
    {
        return parent::getDetalhes() . ", Número de Portas: {$this->numeroPortas}";
    }

    public function getNumeroPortas()
    {
        return $this->numeroPortas;
    }
    public function setNumeroPortas($numeroPortas)
    {
        $this->numeroPortas = $numeroPortas;
    }
}
