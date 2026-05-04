<?php
    // Codigo para excluir no BD
    if( isset($_GET["i"]) )
    {
        $idRecebido = $_GET["i"];
        require_once("conexao.php");
        $sql = "DELETE FROM categoria WHERE id=$idRecebido";
        mysqli_query($conexao,$sql);
    }
    header("Location:categoriaCON.php");
?>