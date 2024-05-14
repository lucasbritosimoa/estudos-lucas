<section id="php">
    <?php
    function verificarIdade($idade)
    {
        switch ($idade) {
            case $idade >= 18:
                $status = "Você é maior de idade :)";
                break;
            default:
                $status = "Você é menor de idade ;(";
        }
        return $status;
    }

    $nome = $_POST['nome'] ?? "erro";
    $idade = $_POST['idade'] ?? 0;
    $situacao = verificarIdade($idade);

    ?>
</section>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - functions</title>
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
    <h2>Exercício 02 - functions</h2>
    <main id="formulario">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nome">Informe seu nome</label>
            <input type="text" name="nome" id="idnome" value="<?= $nome ?>">
            <label for="idade">Informe sua idade</label>
            <input type="number" name="idade" id="ididade" value="<?= $idade ?>">

            <input type="submit" value="Verificar">
        </form>
    </main>
    <p>
        <?php if (!empty($_POST["idade"])) : ?>
    <section>

        <?php
            echo "Fala meu amigo <em>$nome</em>!";
            echo "<br>Pela sua idade, atualmente você é <strong>$situacao</strong>."

        ?>
    <?php endif; ?>
    </section>
    </p>
</body>

</html>