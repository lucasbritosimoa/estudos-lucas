<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero{
    public function locomover(){
        echo "<p>O canguru está saltando.";
    }
}