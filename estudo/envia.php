<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envia Dados</title>
</head>
<body>
    <form action="recebe.php" method="POST">
        <label for="txtnome">Nome:</label>
        <input type="text" id="txtnome" name="txtnome"/>
        <br/>
        <label for="txtsobrenome">Sobre Nome:</label>
        <input type="text" id="txtsobrenome" name="txtsobrenome"/>
        <br/>
        <label for="DataNascimento">Data de Nascimento:</label>
        <input type="date" id="DataNascimento" name="DataNascimento"/> 
        <br/>
        <input type="submit" value="Enviar"/>
        <input type="reset" value="Limpar"/>  

    </form>

</body>
</html>