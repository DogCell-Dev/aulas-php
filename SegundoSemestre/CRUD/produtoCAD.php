<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body style="text-align: center;">
    <?php
        require_once("verificasessao.php");
        require_once("conexao.php");
        $sqlCategorias = "SELECT id, descricao FROM categoria";
        $resultCategorias = mysqli_query($conexao, $sqlCategorias);

        if( isset($_POST['txtDescricao']) )
        {
            $descricao      = $_POST['txtDescricao'];
            $quantidade     = $_POST['txtQuantidade'];
            $valorUnitario  = $_POST['txtValorUnitario'];
            $idCategoria    = $_POST['txtIdCategoria'];

            $sqlInsert = "INSERT INTO produto (descricao      , 
                                               quantidade     , 
                                               valor_unitario , 
                                               id_categoria) 
                            VALUES ('$descricao'    , 
                                     $quantidade    , 
                                     $valorUnitario , 
                                     $idCategoria)";
            mysqli_query($conexao, $sqlInsert);
            header("location: produtoCON.php");
        }
    ?>
    <h1>Cadastro de Produto</h1>
    <form action="produtoCAD.php" method="post" style="border: 1px solid black">
        <input type="text" name="txtId" 
            placeholder="ID do Produto (Automático)" readonly /><br><br>

        <input type="text" name="txtDescricao" maxlength="50" required
            placeholder="Descrição do Produto" /><br><br>
            
        <input type="number" step="1" name="txtQuantidade" min="0"
            placeholder="Quantidade do Produto" /><br><br> 
        
        <input type="number" step="0.01" name="txtValorUnitario" min="0"
            placeholder="Valor Unitário do Produto" /><br><br>

        <select name="txtIdCategoria" required>
            <option value="">Selecione a Categoria</option>
            <?php
                while($linha = mysqli_fetch_assoc($resultCategorias))
                {
                    $idCategoria        = $linha['id'];
                    $descricaoCategoria = $linha['descricao'];
                    echo("<option value='$idCategoria'>");
                        echo($descricaoCategoria);
                    echo("</option>");
                }
            ?>
        </select><br><br>

        <input type="submit" value="Cadastrar Produto" />
    </form>
</body>
</html>