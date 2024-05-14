<section id="php">
    <?php
    //Função que receba um número como parâmetro e diga se ele é par ou ímpar.

    //Sempre deixando o código PHP no início do arquivo, caso tenha um HTML. Assim fica mais organizado, e deixa apenas as validações do que já foi checado para exibir o resultado.
    function parOuImpar(int $numero)
    {
        if ($numero % 2 == 0) {
            $situacao = "Par";
        } else {
            $situacao = "Ímpar";
        }
        return $situacao;
    }
    $numero = $_GET['numero'] ?? 0;
    $status = parOuImpar($numero);
    ?>
</section>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos - funções</title>
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
<h1>Estudos sobre funções</h1>

<body>
    <!-- http://localhost/estudos-lucas/estudos-functions/ -->
    <h2>Par ou ímpar?</h2>
    <main id="formulario">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Informe um número</label>
            <input type="number" name="numero" id="idnumero" value="<?= $numero ?>" min="1" required>
            <input type="submit" value="Verificar">

        </form>
    </main>
    <!-- Essa função da linha 51 e da 59 servem para habilitar o PHP Se não estiver vazio, ou seja, somente se algum valor for inserido no formulário HTML.  -->
    <?php if (!empty($_GET["numero"])) : ?>
        <p>
        <section id="resultado">
            <?php
            echo "O número que você escolheu foi o <strong>$numero</strong>, e ele é $status!";
            ?>
        </section>
        </p>
    <?php endif; ?>

</body>

</html>