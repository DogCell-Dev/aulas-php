<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <hr>
    <form action="proc_cadastrar.php" method="post">
        <label for="txtNome">Digite o nome:</label>
        <input type="text" name="txtNome" max-lenght="100" required />
        <br/>
        <label for="txtEmail">Digite o e-mail:</label>
        <input type="email" name="txtEmail" max-lenght="100" required />
        <br />
        <label for="txtIdade">Digite a idade:</label>
        <input type="number" name="txtIdade" step="1" min="0" required />
        <br /> <br />
        <input type="submit" value="Cadastrar Aluno"></input>
        &nbsp;
        <input type="reset" value="Cancelar"></input>
    </form> 
</body>
</html>