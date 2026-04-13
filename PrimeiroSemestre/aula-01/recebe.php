<?php 
// RECEBENDO VALORES!
    $nomerecebido= $_POST ["txtNome"];
    $anorecebido= $_POST ["cmbAnoNasc"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Nome Recebido: <?php echo($nomerecebido) ?>
        <br />
        Idade Recebido: <?php echo($anorecebido) ?>     
        <br />

    <?php 
    $anoAtual = 2026;
    $idade = $anoAtual - $anorecebido;
    echo("Sua idade é: " .$idade. " anos " );

    if($idade >= 18)
    {
        echo("Adulto burro");
    }
    else
    {
        echo("Criança maldita");
    }
    ?>
    </h1>
</body>
</html>