<?php

require_once 'Veiculo.php';

class Motos extends Veiculo
{
    private $tipoGuidao;

    public function __construct($marca, $modelo, $ano, $tipoGuidao)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->tipoGuidao = $tipoGuidao;
    }
    public function getDetalhes()
    {
        return parent::getDetalhes() . ", e o tipo do guidão é {$this->getTipoGuidao()}.";
    }

    public function getTipoGuidao()
    {
        return $this->tipoGuidao;
    }
    public function setTipoGuidao($tipoGuidao)
    {
        $this->tipoGuidao = $tipoGuidao;
    }
}
