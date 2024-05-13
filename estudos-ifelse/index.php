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
            color: #00000;
            font-size: 25px;
            text-align: center;
            line-height: 1.5em;

        }
    </style>
</head>

<body>
    <?php
    $nome = $_GET['nome'] ?? "";
    $nota = $_GET['nota'] ?? 0;

    ?>
    <h2>Estudos sobre IF, ELSE e ELSEIF</h2>
    <section id="formulario">
        <!-- Se o aluno tirou 0, reprovado. Entre 1 e 6, recuperação. Entre 7 e 10, aprovado. 11 em diante, aprovado com louvor. -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nome">Informe seu nome</label>
            <input type="text" name="nome" id="idnome" value="<?= $nome ?>">
            <label for="nota">Informe sua nota</label>
            <input type="number" name="nota" id="idnota" min="0" max="15" value="<?= $nota ?>">

            <input type="submit" value="Informar status">

        </form>

    </section>

    <main>
        <p>
            <?php

            if ($nota < 1) {
                $status = "Reprovado";
            } elseif ($nota >= 1 && $nota <= 6) {
                $status = "Recuperação";
            } elseif ($nota >= 7 && $nota <= 10) {
                $status = "Aprovado";
            } else {
                $status = "Aprovado com louvor";
            }
            echo "Olá, caro aluno <strong>$nome</strong>! Atualmente, seu status é <strong>$status</strong>.";

            ?>
        </p>
    </main>

</body>

</html>