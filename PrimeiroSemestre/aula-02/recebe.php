<?php

    if(isset ($_POST["txtNome"]))
    {
        $nomeRecebido = $_POST["txtNome"];
        $IdadeRecebida = $_POST["txtIdade"];

        session_start();

        $_SESSION["N"] = $nomeRecebido;
        $_SESSION["I"] = $IdadeRecebida;

        header("location:exibe.php");
    }

    else
    {
        header("location:envia.php");
    }
    


?>