<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produto</title>
</head>
<body>
    <?php 
        require_once("verificasessao.php"); 
        require_once("conexao.php");
        $sql = "SELECT
                    produto.id             ,
                    produto.descricao      ,
                    produto.quantidade     ,
                    produto.valor_unitario ,
                    categoria.descricao AS categoria
                FROM
                    produto INNER JOIN categoria
                    ON produto.id_categoria = categoria.id
                ORDER BY produto.id";
        $resultado = mysqli_query($conexao, $sql);
    ?>
    <h1>Consulta de Produtos</h1>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor Unitário</th>
            <th>Categoria</th>
            <th colspan="2">Ações</th>
        </tr>
        <?php
            while($linha = mysqli_fetch_assoc($resultado))
            {
                $id             = $linha['id'];
                $descricao      = $linha['descricao'];
                $quantidade     = $linha['quantidade'];
                $valorUnitario  = $linha['valor_unitario'];
                $categoria      = $linha['categoria'];

                echo("<tr>");
                    echo("<td>$id</td>");
                    echo("<td>$descricao</td>");
                    echo("<td>$quantidade</td>");
                    echo("<td>$valorUnitario</td>");
                    echo("<td>$categoria</td>");
                    echo("<td><a href='#'>Alterar</a></td>");
                    echo("<td><a href='#'>Excluir</a></td>");
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>