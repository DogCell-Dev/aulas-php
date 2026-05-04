<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticar</title>
</head>
<body>
    <center>
        <h1>Autenticar Usuario:</h1>
        <hr>
        <form action="autenticar.php" method="post">
            <input name="txtUsuario" type="text" placeholder="Usuario" />
            <br />
            <input name="txtSenha" type="password" placeholder="Senha"/>
            <br />
            <input type="submit" value="Autenticar" />
        </form>
    </center>
    <?php
        if( isset($_POST["txtUsuario"]) )
        {
            require_once("conexao.php");
            $usuario = $_POST["txtUsuario"];
            $senha   = $_POST["txtSenha"];
            $sql = "SELECT usuario, perfilacesso FROM usuario
                    WHERE usuario='$usuario' AND senha=sha1('$senha') ";
            $resultado = mysqli_query($conexao,$sql);
            if( mysqli_num_rows($resultado) > 0 )
            {
                $linha = mysqli_fetch_assoc($resultado);
                session_start();
                $_SESSION["usuarioLogado"] = $linha["usuario"];
                $_SESSION["perfilAcesso"]  = $linha["perfilacesso"];

                header("Location:index.php");
            }
            else
            {
                echo("<script>alert('Usuario ou Senha Invalidos !')</script>");
            }
        }

    ?>
</body>
</html>