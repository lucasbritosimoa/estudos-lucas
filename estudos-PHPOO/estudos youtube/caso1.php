<?php
// Passo 01 - Definição da classe Produto
class Produto
{
    // 01.1 Primeiro, vou definir as propriedades de atribuição (entrada)
    private $aparelho;
    private $fabricante;
    private $capacidade;
    private $preco;

    // 01.2 A função __construct é um método especial chamado automaticamente quando um objeto é criado. ELe inicializa as propriedades do objeto com os valores fornecidos.
    public function __construct($aparelho, $fabricante, $capacidade, $preco)
    {
    // 01.3 Aqui estou atribuindo o valor do parâmetro private $aparelho a variável $aparelho, que é uma propriedade do objeto. A mesma coisa para as demais propriedades.
        $this->aparelho = $aparelho;
        $this->fabricante = $fabricante;
        $this->capacidade = $capacidade;
        $this->preco = $preco;
    }

    // 01.4 Agora, fiz uma função com o método de saída. Com essas propriedades do objeto, o que eu quero que seja executado?
    public function getDetalhes()
    {
        return "O aparelho que vou comprar é um {$this->aparelho}, da fabricante global {$this->fabricante}. Ele tem {$this->capacidade} gigas de capacidade, e atualmente custa {$this->preco} reais.";
    }
}

// Passo 02 - Instanciando um objeto

// 02.1 Esse é um novo OBJETO da classe Produto, com os seguintes valores armazenados na variável $p1. A ordem desses valores segue como uma array();
$p1 = new Produto('Iphone 13', 'Apple', 128, 3_500);

// Passo 3 - Chamando o método da class Produto - getDetalhes();
echo $p1->getDetalhes();

/*Resumo do código
1. Definição da Classe: A classe Produto define as propriedades e métodos necessários para representar e manipular informações de um produto.
2. Instanciação do Objeto: Um objeto da classe Produto é criado com valores específicos (um iPhone 13).
3. Método getDetalhes: O método getDetalhes é chamado para obter e exibir uma descrição detalhada do produto.
