<section id="php">
    <?php
    $valorCompra = 250;
    $tipo = "VIP";

    switch ($tipo) {
        case "Premium":
            $desconto = 10;
            break;
        case "VIP":
            $desconto = 20;
            break;
        default:
            $desconto = 0;
    }
    $preco = $valorCompra - ($valorCompra * $desconto / 100);
    ?>
</section>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos - switch case</title>
    <style>
        body {
            background: linear-gradient(to right, #EAE8E3, #83E6E9);
            font-family: arial;
            color: #000;
            font-size: 25px;
            text-align: center;
            line-height: 1.5em;
        }
    </style>
</head>

<body>
    <!-- http://localhost/estudos-lucas/ex03.php -->
    <h2>Estudos - switch case</h2>

    <p>
    <main id="resultado">

        <?php

        echo "Você é um cliente $tipo.";
        echo "<br>Sua compra de R\$$valorCompra reais terá um desconto de $desconto%. O preço final é de R\$$preco reais.";
        ?>
    </main>
    </p>
</body>

</html>