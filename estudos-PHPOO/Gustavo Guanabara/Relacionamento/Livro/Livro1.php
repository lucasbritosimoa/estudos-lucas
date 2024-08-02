<?php
require_once 'Pessoa1.php';
require_once 'Publicacao1.php';
class Livro implements Publicacao
{
    private $titulo, $autor, $totPaginas;
    private $pagAtual, $aberto, $leitor;

    // Métodos tradicionais

    public function getDetalhes()
    {
        echo "O título do livro é ". $this->getTitulo() .", escrito por ". $this->getAutor() .".";
        echo "<br>Tem ". $this->getTotPaginas() ." páginas, e está sendo lido por ". $this->leitor->getNome() .".</br>";
        echo "<br>A página atual é a ". $this->getPagAtual() .".</br>";
    }
    // Métodos especiais - construct, getters e setters

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    public function setTitulo($ti)
    {
        $this->titulo = $ti;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setAutor($au)
    {
        $this->autor = $au;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setTotPaginas($pa)
    {
        $this->totPaginas = $pa;
    }
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function setPagAtual($at)
    {
        $this->pagAtual = $at;
    }
    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function setAberto($ab)
    {
        $this->aberto = $ab;
    }
    public function getAberto()
    {
        return $this->aberto;
    }
    public function setLeitor($le)
    {
        $this->leitor = $le;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }

    //  Implementação dos métodos abstratos da interface, agora com a ação

    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function folhear($p)
    {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avançarPag()
    {
        if ($this->getPagAtual() >= $this->getTotPaginas()) {
            echo "Erro";
        } else {
            $this->pagAtual++;
        }
    }
    public function voltarPag()
    {
        if ($this->getPagAtual() >= $this->getTotPaginas()) {
            echo "Erro";
        } else {
            $this->pagAtual--;
        }
    }
}
