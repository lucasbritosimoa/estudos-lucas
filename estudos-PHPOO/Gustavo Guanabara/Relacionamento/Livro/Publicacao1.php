<?php
interface Publicacao
{
    public function abrir();
    public function fechar();
    public function folhear($p); // Informar a página
    public function avançarPag();
    public function voltarPag();
}

// Métodos abstratos -> Na interface, eu sei que serão esses os métodos, mas não serão desenvolvidos aqui.