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
    <!-- http://localhost/estudos-lucas/ex02.php -->
    <h2>Estudos - switch case</h2>

    <p>
    <main>

        <?php
        $idade = 18;

        switch ($idade) {
            case $idade < 10:
                echo "Conteúdo <strong>LIVRE</strong> para todos os públicos";
                break;
            case $idade >= 10 && $idade < 14:
                echo "Conteúdo recomendado para maiores de <strong>10 anos</strong>";
                break;
            case $idade >= 14 && $idade < 16:
                echo "Conteúdo recomendado para maiores de <strong>14 anos</strong>";
                break;
            case $idade >= 16 && $idade < 18:
                echo "Conteúdo recomendado para maiores de <strong>16 anos</strong>";
                break;
            case $idade >= 18:
                echo "Conteúdo recomendado para maiores de <strong>18 anos</strong>";
                break;
                
                default: echo "Informe sua idade para saber as informações!";
        }
        ?>
    </main>
    </p>
</body>

</html>