<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello world! </h1>
    
    <?php

        $nome = "Keth";
        $nome2 = "Gabi";
        $idade = 20;
        $peso = 50.45;

            echo "Hello world!";
            echo "<h1> Teste </h1>";
            echo "$nome <br />";
            echo "$nome2 <br />";
            echo "$idade <br />";
            echo "$peso <br />";

            echo "texto" . $nome; 
            echo "<br />";
            // comentário de uma linha

            /*
                comentário
                de
                várias
                linhas
            */

            // no php o símbolo de . é para concatenação

            echo "Texto $nome";
            echo "<br /> Nome: $nome Idade: $idade Peso: $peso";
            echo "<br /> Nome: $nome <br /> Idade: $idade <br /> Peso: $peso <br />";

            echo 'Texto' . $nome;
            
            // Operadores aritméticos + - * / %
            echo "<br /> <br /> <br />"; 

            $n1 = 8;
            $n2 = 2;
            $soma = $n1 + $n2;
            $subtração = $n1 - $n2;
            $multiplicação = $n1 * $n2;
            $divisão = $n1 / $n2;


            echo "<p> $n1 + $n2 = $soma </p>";
            echo "<p> $n1 - $n2 = $subtração </p>";
            echo "<p> $n1 * $n2 = $multiplicação </p>";
            echo "<p> $n1 / $n2 = $divisão </p>";



    ?>



</body>
</html>