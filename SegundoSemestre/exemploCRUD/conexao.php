<?php
    $servidor = "localhost:3306";
    $usuario = "root";
    $senha = "";
    $banco = "bdcrud";

    $conexao = mysqli_connect( $servidor , $usuario , $senha, $banco );

    if(!$conexao)
    {
        die("Erro na conexão com banco");
    }
?>
