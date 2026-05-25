<?php
    session_start();
    if( isset($_SESSION["usuarioLogado"]) && isset($_SESSION["nivelAcesso"]) )
    {
        $usuario = $_SESSION["usuarioLogado"];
        $nivel   = $_SESSION["nivelAcesso"];
        echo("<h3>Bem-vindo, $usuario! </h3>");
        echo("<a href='sair.php'>Sair</a>");
        echo("<hr>");
    }
    else
    {
        header("Location:tela_login.php");
        echo("<script>
                alert('Necessário estar logado! ')
                windon.location.href='tela_login.php';
              </script>");
    }
?>