<?php
/*### Exercício

**Enunciado**:
Crie uma aplicação simples em PHP utilizando orientação a objetos que simule o gerenciamento de uma lista de contatos. O sistema deve permitir a adição de novos contatos e a exibição da lista de contatos.

**Especificações**:

1. Crie uma classe `Contato` com propriedades para `nome` e `telefone`.
2. Crie uma classe `Agenda` com um método para adicionar contatos e outro para exibir todos os contatos.
3. Implemente um script que instancie a classe `Agenda`, adicione alguns contatos e exiba a lista de contatos.

Boa sorte!*/

class Contato
{
    private $nome;
    private $telefone;

    public function __construct($nome, $telefone)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
}
class Agenda
{
    private $contatos;

    public function __construct()
    {
        $this->contatos = [];
    }

    public function addContatos($contato)
    {
        $this->contatos[] = $contato;
    }
    public function exibirContatos()
    {
        foreach ($this->contatos as $contato) {
            echo "Nome: " . $contato->getNome() . " - Telefone: " . $contato->getTelefone() . "<br />";
        }
    }
}

// Cria uma nova instância da agenda
$agenda = new Agenda();

// Adiciona alguns contatos
$agenda->addContatos(new Contato('Alice', '123-4567'));
$agenda->addContatos(new Contato('Bob', '987-6543'));
$agenda->addContatos(new Contato('Charlie', '555-1234'));

// Exibe todos os contatos
$agenda->exibirContatos();
?>