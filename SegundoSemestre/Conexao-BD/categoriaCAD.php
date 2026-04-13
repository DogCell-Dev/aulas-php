<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
</head>
<body>
    <h1>Cadastro de Categoria:</h1>
    <hr>
    <form action="categoriaCAD.php" method="POST">
        <label for="txtId">Id:</label>
        <input type="text" name="txtId" id="txtId" value="(Automatico)" readonly/>
        <br />
        <label for="txtDescricao">Descricao:</label>
        <input type="text" name="txtDescricao" id="txtDescricao"/>
        <br />
        <input type="submit" value="Cadastrar Categoria" />
        <input type="reset" value="Limpar" />
    </form>
    <?php
        if(isset($_POST["txtDescricao"])){
            //echo "Categoria cadastrada com sucesso"; 
            //Icluir o arquivo de conexao com o BD
            require_once("conexao.php"); 

            //Recebe os valores do formulario
            $descricao = $_POST["txtDescricao"];

            //Cria o comando SQL para Inserção 
            $sql = "INSERT INTO categoria (descricao)
                    VALUES ('$descricao')";

            //Executa o comando SQL
            mysqli_query($conexao, $sql);
            echo ("<script>alert('categoria cadastrada com sucesso')</script>");
        }
    ?>
</body>
</html>