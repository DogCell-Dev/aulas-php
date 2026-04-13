<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <h1>
        <?php // Abertura de bloco PHP
            echo("Ola Mundo !");

            // Fechamento de bloco PHP
        ?>  
    </h1>

        <?php
            echo("<h2>Minha primeira pagina PHP!</h2>");
            //PHP é uma linguagem fracamente tipada
            //Para identigicar uma variavel utilizamos caractere $
            $nome = "Piter";
            echo("Seja bem vindo <b>" .$nome. "</b>");
            echo("<br />");
            echo('Seja bem vindo <b>' .$nome. '</b>'); 
            echo("<br />");
            $n1 = 5;
            $n2 = 29;
            $soma =  $n1 + $n2;
            echo("A soma de N1 mais N2 é: <b>" .$soma. "</b>");
        ?>



</body>
</html>