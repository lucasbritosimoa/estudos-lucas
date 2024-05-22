<section id="ex01">
<h3>Exercício 01 - Lista de Alunos:</h3>
Crie um array associativo com nomes de alunos e suas respectivas notas. Use um loop foreach para percorrer o array e imprimir o nome de cada aluno junto com sua nota.
<p>
<?php 
$array1= array("Lucas"=> 10, "Alan"=> 8, "Bruno"=> 6);

foreach($array1 as $chave1 => $res1){
    echo "O aluno $chave1 teve a nota $res1 <br>";
}
?>
</p>
</section>

<section id="ex02">
<h3>Exercício 02 - Lista de Produtos:</h3>
Faça um script PHP que defina um array com os nomes de cinco produtos. Use um loop foreach para imprimir cada produto em uma nova linha.
<p>
<?php 

$array2= array("Arroz", "Feijão", "Macarrão", "Óleo", "Açucar");

foreach($array2 as $res2){
    echo $res2 . "<br>";
}

?>
</p>
</section>

<section id="ex03">
<h3>Exercício 03 - Contagem de Caracteres:</h3>
Crie um array com várias palavras. Utilize um loop foreach para imprimir cada palavra seguida do número de caracteres que ela contém.
<p>
<?php 

$array3= array("Utilize", "Um", "Loop", "Foreach", "Para", "Imprimir");

foreach($array3 as $res3){
    $quantCarac= strlen($res3);
    echo "A palavra '$res3' tem $quantCarac letras <br>";
}

?>
</p>
</section>