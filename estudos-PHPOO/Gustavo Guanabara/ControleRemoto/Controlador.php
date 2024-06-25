<?php
// Aula sobre encapsulamento

interface Controlador
{
    // Métodos abstratos -> Na interface, eu sei que serão esses os métodos, mas não serão desenvolvidos aqui.
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}
