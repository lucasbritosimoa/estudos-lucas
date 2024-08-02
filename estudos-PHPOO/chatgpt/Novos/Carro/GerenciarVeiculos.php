<?php

spl_autoload_register(function ($classNome) {
    require_once $classNome . '.php';
});

class GerenciarVeiculos
{
    private $veiculos;

    public function __construct()
    {
        $this->veiculos = []; // Adiciona um array de veículos.
    }
    public function addVeiculo($v)
    {
        $this->veiculos[] = $v;
        echo "Veículo adicionado:";
    }
    public function getVeiculos()
    {
    }
}
