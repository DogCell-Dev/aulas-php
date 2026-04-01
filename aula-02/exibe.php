<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe</title>
</head>
<body>
    <h1>Exibindo Dados</h1>
    <hr>

        <?php
            session_start();

                $nome = "Nenhum nome foi definido";
                $idade = "Nenhuma idade definida";

            if(isset($_SESSION["N"]))
            {
                $nome = $_SESSION["N"]; 
                $idade = $_SESSION["I"];
            }

        ?>

    <h2>
        Nome: <?php echo($nome);?>
    </h2>

    <h2>
        Idade: <?php echo($idade);?>
    </h2>

    <a href="sair.php">Sair/logout</a>
    
</body>
</html>