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
        // Codigo para cadastro no BD
        if( isset( $_POST["txtDescricao"] ) )
        {
            //echo("Cadastrando categoria...");
            //Incluir o arquivo de conexao com o BD
            require_once("conexao.php"); 
            //Receber os valores do formulario
            $descricao = $_POST["txtDescricao"];

            //Criar o comando SQL para insercao
            // $sql = "INSERT INTO categoria (descricao) 
            //         VALUES ('$descricao')";

            $sql = "INSERT INTO categoria (descricao) 
                    VALUES (?)";

            //Executar o comando SQL
            //mysqli_query($conexao, $sql);

            $comandoPreparado = $conexao->prepare($sql);
            $comandoPreparado->bind_param("s", $descricao);
            $comandoPreparado->execute();

            // Evitar o multi_query pois permite a execucao de sql injetado
            //mysqli_multi_query($conexao, $sql);
            
            echo("<script>alert('Categoria cadastrada com sucesso!');</script>");
        }
        
    ?>
</body>
</html>