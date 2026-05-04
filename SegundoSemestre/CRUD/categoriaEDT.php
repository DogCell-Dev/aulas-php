<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Editar</title>
</head>
<body>
     <?php
        require_once("conexao.php");
        $idBanco = "0";
        $descricaoBanco = "Categoria Invalida !";
        //Comando para consultar no BD o ID recebido para preencher a tela
        if( isset($_GET["i"]) )
        {
            $idRecebido = $_GET["i"];
            $sql = "SELECT id, descricao FROM categoria WHERE id=$idRecebido";
            $resultado = mysqli_query($conexao,$sql);
            if( mysqli_num_rows($resultado) > 0 )
            {
                $linha = mysqli_fetch_assoc($resultado);
                $idBanco        = $linha["id"];
                $descricaoBanco = $linha["descricao"];
            }
        }
        
        //Comando para atualizar os registros no BD
        if( isset($_POST["txtDescricao"]) )
        {
            $id         = $_POST["txtId"];
            $descricao  = $_POST["txtDescricao"];
            $sql = "UPDATE categoria 
                    SET 
                        descricao='$descricao' 
                    WHERE id=$id";
            mysqli_query($conexao,$sql);
            header("Location:categoriaCON.php");
        }
    ?>
    <h1>Editar Categoria:</h1>
    <hr>
    <form action="categoriaEDT.php" method="POST">
        <label for="txtId">Id:</label>
        <input type="text" name="txtId" id="txtId" value="<?php echo($idBanco);?>" readonly/>
        <br />
        <label for="txtDescricao">Descricao:</label>
        <input type="text" name="txtDescricao" id="txtDescricao" value="<?php echo($descricaoBanco);?>"/>
        <br />
        <input type="submit" value="Salvar Categoria" />
        <input type="reset" value="Limpar" />
    </form>
   
</body>
</html>