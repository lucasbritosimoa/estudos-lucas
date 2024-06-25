<?php

class Livro
{
    private $titulo;
    private $autor;
    private $ano;
    private $genero;

    public function __construct($titulo, $autor, $ano, $genero)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->genero = $genero;
    }

    public function getDetalhes()
    {
        return "O livro se chama {$this->titulo}, do autor {$this->autor}. Foi lançado no ano {$this->ano}, e o gênero é {$this->genero}. <br />";
    }
    public function setAno($novoAno)
    {
        $this->ano = $novoAno;
    }
}

$livro = new Livro('Habitos Atômicos', 'James Clear', 2018, 'Autoajuda');
$livro1 = new Livro('Muito feio', 'Bruno Oliveira', 2021, 'Academia');
$livro2 = new Livro('Muito bonito', 'Lucas', 1997, 'Dinheiro');

$livro2->setAno(1965);

echo $livro->getDetalhes();
echo $livro1->getDetalhes();
echo $livro2->getDetalhes();
