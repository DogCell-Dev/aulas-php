<?php
    // Codigo para excluir no BD
    if( isset($_GET["i"]) )
    {
        require_once("verificasessao.php");

        $idRecebido = $_GET["i"];
        require_once("conexao.php");
        $sql = "DELETE FROM categoria WHERE id=$idRecebido";

        if($perfil == "A")
        {
            mysqli_query($conexao,$sql);
            header("Location:categoriaCON.php");
        }
        else if($perfil == "U")
        {
            echo("<script>
            alert('Usuario sem permissão para excluir categoria!');
            window.location.href='categoriaCON.php';
            </script>");
        }
    }
    else
    {
        header("Location:categoriaCON.php");
    }
?>