<!-- http://localhost/estudos-lucas/estudos-loops/ex01-loops.php -->
<!-- Escreva um script PHP que imprima os números de 1 a 10 na tela, um por linha. -->

<section>
    <h2>Exercício 01
        <p>
            Imprimir Números Ímpares:
    </h2>
    Escreva um script PHP que utilize um loop for para imprimir todos os números ímpares entre 1 e 20.
    </p>

    <?php

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 != 0) {
            echo $i . ", ";
        }
    }

    ?>
</section>
<section>
    <h2>Exercício 02
        <p>
            Tabuada de Multiplicação:
    </h2>
    Crie um script PHP que utilize um loop for para imprimir a tabuada de 5 (de 1 a 10).
    </p>

    <?php
    //Inicialização, condição, incremento {como será feito} 
    for ($a = 1; $a <= 10; $a++) {
        echo "1x$a" . "= " . $a * 5 . ", ";
    }

    ?>
</section>
<section>
    <h2>Exercício 03
        <p>
    Soma dos Primeiros N Números:
    </h2>
    Escreva um script PHP que use um loop for para calcular a soma dos primeiros 10 números inteiros positivos e imprimir o resultado.
    </p>
    <?php 
    //Inicialização, condição, incremento {como será feito} 

    $soma= 0;
    for($b= 1; $b <= 10; $b++){
        $soma += $b;
    } echo "A soma dos números é $soma";
    ?>
</section>