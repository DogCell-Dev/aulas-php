<?php
    session_start();
    if( !isset($_SESSION["usuarioLogado"]) )
    {
        header("Location:autenticar.php");
    }
    else
    {
        $usuario = $_SESSION["usuarioLogado"];
        $perfil  = $_SESSION["perfilAcesso"];
        echo("<h2>Usuario: $usuario</h2>");
        echo("<a href='sair.php'>Sair</a>");
    }
?>