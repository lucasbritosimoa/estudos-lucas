<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
    private $login, $totAssistindo;

    public function __construct($login, $nome, $idade, $sexo)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistindo = 0;
    }

    public function viuMaisUm()
    {
        $this->totAssistindo++;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getTotAssistindo()
    {
        return $this->totAssistindo;
    }
    public function setTotAssistindo($totAssistindo)
    {
        $this->totAssistindo = $totAssistindo;
    }
}
