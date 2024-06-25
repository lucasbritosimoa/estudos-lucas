<?php
class Lutador
{
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso, $categoria;
    private $vitorias, $derrotas, $empates;

    // Métodos tradicionais

    public function apresentar()
    {
        echo "<p>---------------------</p>";
        echo "<p>CHEGOU A HORA!!! O lutador " . $this->getNome() . ", vindo de " . $this->getNacionalidade() . " ";
        echo "tem " . $this->getIdade() . " anos. Tem " . $this->getAltura() . " de altura, pesando " . $this->getPeso() . " e atualmente luta na categoria " . $this->getCategoria() . ". ";
        echo "Ganhou " . $this->getVitoria() . " lutas, perdeu " . $this->getDerrota() . " e empatou " .  $this->getEmpate() . " vezes.</p>";
    }
    public function status()
    {
        echo "<p>---------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . ", tem " . $this->getVitoria() . " vitórias, " . $this->getDerrota() . " derrotas e " . $this->getEmpate() . " empates.</p>";
    }
    public function ganharLuta()
    {
        $this->setVitoria($this->getVitoria() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrota($this->getDerrota() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpate($this->getEmpate() + 1);
    }

    // Métodos especiais - construtor, getters e setters

    // O construtor não vai receber um parâmetro para categoria, porque será definida dentro de peso.
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setVitoria($vitoria)
    {
        $this->vitorias = $vitoria;
    }
    public function getVitoria()
    {
        return $this->vitorias;
    }
    public function setDerrota($derrota)
    {
        $this->derrotas = $derrota;
    }
    public function getDerrota()
    {
        return $this->derrotas;
    }
    public function setEmpate($empate)
    {
        $this->empates = $empate;
    }
    public function getEmpate()
    {
        return $this->empates;
    }
}