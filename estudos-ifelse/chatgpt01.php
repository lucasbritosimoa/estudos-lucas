<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos if ELSE</title>
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
    <?php
    $nome = $_GET['nome'] ?? "";
    $idade = $_GET['idade'] ?? 0;

    ?>
    <h2>Estudos sobre IF, ELSE e ELSEIF</h2>
    <section id="formulario">
        <!-- Imagine que você está desenvolvendo um sistema de controle de acesso para uma festa. Dependendo da idade da pessoa, ela terá diferentes tipos de acesso:

Se a pessoa tiver menos de 18 anos, ela não pode entrar na festa.
Se ela tiver entre 18 e 20 anos (inclusive), ela pode entrar na festa, mas precisa ter um acompanhante maior de idade.
Se ela tiver entre 21 e 30 anos (inclusive), ela pode entrar sozinha na festa.
Se ela tiver mais de 30 anos, ela pode entrar na festa e terá acesso a uma área VIP. -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nome">Informe seu nome</label>
            <input type="text" name="nome" id="idnome" value="<?= $nome ?>">
            <label for="idade">Informe a sua idade</label>
            <input type="number" name="idade" id="ididade" min="0" value="<?= $idade ?>">

            <input type="submit" value="Informar o tipo de acesso">

        </form>

    </section>

    <main>
        <p>
            <?php

            if ($idade < 18) {
                $acesso = "Não pode entrar na festa ;(";
            } elseif ($idade >= 18 && $idade <= 20) {
                $acesso = "Pode entrar na festa COM acompanhante maior de idade ;|";
            } elseif ($idade >= 21 && $idade <= 30) {
                $acesso = "Pode entrar na festa sozinho ;)";
            } else {
                $acesso = "Pode entrar na festa, e tem acesso VIP ;D";
            }

            echo "Olá, <em>$nome</em>!! Você informou uma idade de <strong>$idade anos</strong>, e por isso você <em><strong>$acesso</strong></em>";
            ?>
        </p>
    </main>

</body>

</html>