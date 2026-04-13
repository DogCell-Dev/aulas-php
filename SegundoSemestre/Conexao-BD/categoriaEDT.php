<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Editar</title>
</head>
<body>
     <?php
        

        //Comando para consultar no BD o ID recebido para preencher a tela
        

        //Comando para atualizar os registros no BD
       
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