<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envia</title>
</head>
<body>
    <form action="recebe.php" method="POST">
        <label for="txtNome">Digite seu nome:</label>
        <input type="text" id="textNome" name="txtNome"/>
        <br/>
        <label for="txtIdade">Digite sua Idade:</label>
        <input type="text" id="txtIdade" name="txtIdade" />
        <br/>
        <input type="Submit" value="Enviar Dados">
    </form>

    
</body>
</html>