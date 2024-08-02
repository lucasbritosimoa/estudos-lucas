<?php
// Gerenciamento de uma biblioteca. O sistema deve permitir a adição de livros, o registro de novos membros e o empréstimo de livros.

/*
Informações importantes:
1. Três classes: Livro, Membro e Biblioteca.
    1.1. Livro - Atributos: titulo, autor, status(disponivel, emprestado)
    1.2. Membro - Atributos: nome, lista de livros emprestados
    1.3. Biblioteca - Métodos: adicionar livros, registrar membros e emprestar livros aos membros.
2. Médoto para exibir lista de livos disponiveis, e outro para mostrar os livros emprestados por cada membro.
*/

class Livro
{
    private $titulo;
    private $autor;
    private $status;

    public function __construct($titulo, $autor, $status)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->status = $status;
    }

    public function statusLivro()
    {
        return "O livro é o {$this->titulo}, do autor {$this->autor}. Atualmente se encontra {$this->status}.";
    }
}

class Membro
{
    private $nome;
    private $livrosEmprestados;

    public function __construct($nome, $livrosEmprestados)
    {
        $this->nome = $nome;
        $this->livrosEmprestados = $livrosEmprestados;
    }

    public function statusMembro()
    {
        return "O membro {$this->nome} está em posse dos livros {$this->livrosEmprestados}.";
    }
}

class Biblioteca
{
    private $addLivro;
    private $registraMembro;
    private $emprestaLivro;
    private $nome1;

    public function __construct($addLivro, $registraMembro, $emprestaLivro, $nome1)
    {
        $this->addLivro = $addLivro;
        $this->registraMembro = $registraMembro;
        $this->emprestaLivro = $emprestaLivro;
        $this->nome1 = $nome1;
    }

    public function addLivro()
    {
        return "O livro {$this->addLivro} foi adicionado a biblioteca.";
    }
    public function registraMembro()
    {
        return "O membro {$this->registraMembro} foi registrado com sucesso.";
    }
    public function emprestaLivro()
    {
        return "O membro {$this->nome1} levará emprestado o livro {$this->emprestaLivro}.";
    }
}

$livros = [
    new Livro('Título 01', 'Autor 01', 'Disponível'),
    new Livro('Título 02', 'Autor 02', 'Emprestado'),
    new Livro('Título 03', 'Autor 03', 'Disponível'),
];

foreach ($livros as $itens) {
    echo $itens->statusLivro() . "<br />";
}
echo "<hr>";
$membros = [
    new Membro('Abner', 'Título 10'),
    new Membro('Bento', 'Título 02'),
    new Membro('Carlos', 'Título 11'),
];

foreach ($membros as $itens) {
    echo $itens->statusMembro() . "<br />";
}
echo "<hr>";

$biblioteca = new Biblioteca('Pimentel', 'Lucas', 'Parábolas', 'Sergey');
    
echo $biblioteca->addLivro() . "<br />";
echo $biblioteca->registraMembro() . "<br />";
echo $biblioteca->emprestaLivro() . "<br />";