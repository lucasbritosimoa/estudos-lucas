<section id="php">
    <!-- Suponha que você está desenvolvendo um sistema de controle de estoque para uma loja. Você precisa criar uma função em PHP que receba o nome de um produto e a quantidade em estoque. Essa função deve determinar se o produto está em estoque suficiente ou se precisa ser reabastecido.

Se a quantidade em estoque for maior ou igual a 10 unidades, a função deve retornar uma mensagem indicando que o produto está em estoque suficiente. Caso contrário, a função deve retornar uma mensagem indicando que o produto precisa ser reabastecido.

Crie um formulário simples que permita ao usuário inserir o nome do produto e a quantidade em estoque. Ao enviar o formulário, chame a função criada e exiba a mensagem resultante. -->
    <?php
    function estoque($estoque)
    {
        if ($estoque >= 10) {
            $status = "O Produto está em estoque suficiente";
        } else {
            $status = "O Produto precisa ser reabastecido";
        }
        return $status;
    }

    $prod = $_GET['prod'] ?? "Informe o produto!";
    $estoque = $_GET['qtd'] ?? 0;
    $status = estoque($estoque);

    ?>
</section>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
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
    <h2>Exercício 03 - functions</h2>

    <section id="formulario">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="prod">Informe o nome do produto</label>
            <input type="text" name="prod" id="idprod" value="<?= $prod ?>" required>
            <label for="qtd">Qual a quantidade em estoque?</label>
            <input type="number" name="qtd" id="idqtd" value="<?= $estoque ?>">
            <input type="submit" value="Verificar">


        </form>
    </section>

    <?php if (!empty($_GET['prod'])) : ?>
        <p>
        <main>

            <?php
            echo "O produto <em>$prod</strong> tem <em>$estoque</em> unidades em estoque.<br><strong>$status</strong>.";

            ?>
        </main>

    <?php endif; ?>
    </p>
</body>

</html>