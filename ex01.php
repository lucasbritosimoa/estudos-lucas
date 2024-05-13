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
    <!-- http://localhost/estudos-lucas/index.php -->
    <h2>Estudos - switch case</h2>

    <p>
    <main>

        <?php

        $nome = "Jairo";

        switch ($nome) {
            case "Gustavo":
                echo "Olá meu amigo Gustavo!";
                break;
            case "Jairo":
                echo "Olá meu amigo Jairo!";
                break;
            case "Lucas":
                echo "Olá meu amigo Lucas!";
                break;
            default:
                echo "Você não está cadastrado.";
        }
        ?>
    </main>
    </p>
</body>

</html>