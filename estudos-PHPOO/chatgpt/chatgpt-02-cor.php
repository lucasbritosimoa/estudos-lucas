<?php

class Livro
{
    private $titulo;
    private $autor;
    private $status; // true = disponível, false = emprestado

    public function __construct($titulo, $autor, $status = true)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->status = $status;
    }

    public function getDetalhes()
    {
        $status = $this->status ? 'Disponível' : 'Emprestado';
        return "O livro é o '{$this->titulo}', do autor '{$this->autor}'. 
                Atualmente se encontra {$status}.";
    }

    public function isDisponivel()
    {
        return $this->status;
    }

    public function emprestar()
    {
        $this->status = false;
    }

    public function devolver()
    {
        $this->status = true;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
}

class Membro
{
    private $nome;
    private $livrosEmprestados;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->livrosEmprestados = [];
    }

    public function getDetalhes()
    {
        $livros = implode(', ', $this->livrosEmprestados);
        return "O membro '{$this->nome}' está em posse dos livros: {$livros}.";
    }

    public function emprestarLivro($titulo)
    {
        $this->livrosEmprestados[] = $titulo;
    }

    public function devolverLivro($titulo)
    {
        $index = array_search($titulo, $this->livrosEmprestados);
        if ($index !== false) {
            unset($this->livrosEmprestados[$index]);
        }
    }

    public function getNome()
    {
        return $this->nome;
    }
}

class Biblioteca
{
    private $livros;
    private $membros;

    public function __construct()
    {
        $this->livros = [];
        $this->membros = [];
    }

    public function adicionarLivro($livro)
    {
        $this->livros[] = $livro;
    }

    public function registrarMembro($membro)
    {
        $this->membros[] = $membro;
    }

    public function emprestarLivro($titulo, $nomeMembro)
    {
        foreach ($this->livros as $livro) {
            if ($livro->getTitulo() === $titulo && $livro->isDisponivel()) {
                foreach ($this->membros as $membro) {
                    if ($membro->getNome() === $nomeMembro) {
                        $livro->emprestar();
                        $membro->emprestarLivro($titulo);
                        return "O membro {$nomeMembro} levou emprestado o livro '{$titulo}'.";
                    }
                }
            }
        }
        return "Não foi possível emprestar o livro '{$titulo}' para o membro '{$nomeMembro}'.";
    }

    public function listarLivrosDisponiveis()
    {
        $disponiveis = [];
        foreach ($this->livros as $livro) {
            if ($livro->isDisponivel()) {
                $disponiveis[] = $livro->getDetalhes();
            }
        }
        return implode('<br />', $disponiveis);
    }

    public function listarLivrosEmprestados()
    {
        $emprestados = [];
        foreach ($this->membros as $membro) {
            $emprestados[] = $membro->getDetalhes();
        }
        return implode('<br />', $emprestados);
    }
}

// Exemplos de uso:

$livros = [
    new Livro('Título 01', 'Autor 01'),
    new Livro('Título 02', 'Autor 02', false),
    new Livro('Título 03', 'Autor 03'),
];

$membros = [
    new Membro('Abner'),
    new Membro('Bento'),
    new Membro('Carlos'),
];

$biblioteca = new Biblioteca();

foreach ($livros as $livro) {
    $biblioteca->adicionarLivro($livro);
}

foreach ($membros as $membro) {
    $biblioteca->registrarMembro($membro);
}

echo "<h2>Livros Disponíveis:</h2>";
echo $biblioteca->listarLivrosDisponiveis() . "<br /><hr>";

echo "<h2>Emprestar Livros:</h2>";
echo $biblioteca->emprestarLivro('Título 01', 'Abner') . "<br />";
echo $biblioteca->emprestarLivro('Título 03', 'Bento') . "<br />";

echo "<h2>Livros Disponíveis Após Empréstimos:</h2>";
echo $biblioteca->listarLivrosDisponiveis() . "<br /><hr>";

echo "<h2>Livros Emprestados:</h2>";
echo $biblioteca->listarLivrosEmprestados() . "<br />";
