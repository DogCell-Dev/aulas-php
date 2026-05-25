<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticar</title>
</head>
<body>
    <h1>Autenticar Usuario</h1>
    <hr>
    <form action="proc_login.php" method="post">
        <label for="txtNomeUsuario">Digite o seu login:</label>
        <br />
        <input type="text" name="txtNomeUsuario" />
        <br />
        <label for="txtSenhaUsuario">Digite sua senha:</label>
        <br />
        <input type="password" name="txtSenhaUsuario" />
        <br /><br />
        <input type="submit" value="Autenticar" />
    </form>
    <hr>
</body>
</html>