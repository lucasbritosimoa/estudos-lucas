<?php

class Item {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}
class Carrinho {
    private $itens;

    public function __construct() {
        $this->itens = []; // Inicializa o array vazio
    }

    public function adicionarItem($item) {
        $this->itens[] = $item; // Adiciona um item ao array
    }

    public function exibirItens() {
        foreach ($this->itens as $item) {
            echo "Item: " . $item->getNome() . " - Preço: R$ " . $item->getPreco() . "<br />";
        }
    }
}

// Inclui as classes definidas acima
require_once 'Item.php';
require_once 'Carrinho.php';

// Cria alguns itens
$item1 = new Item('Camiseta', 49.99);
$item2 = new Item('Calça', 89.99);
$item3 = new Item('Tênis', 120.00);

// Cria um novo carrinho de compras
$carrinho = new Carrinho();

// Adiciona os itens ao carrinho
$carrinho->adicionarItem($item1);
$carrinho->adicionarItem($item2);
$carrinho->adicionarItem($item3);

// Exibe os itens no carrinho
$carrinho->exibirItens();