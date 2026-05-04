<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Categorias</title>
</head>
<body>
    <?php require_once("verificasessao.php"); ?>
    <h1>Consulta de Categorias:</h1>
    <hr>
    <form action="categoriaCON.php" method="GET">
        <label for="txtFiltro">Filtrar:</label>
        <input type="text" name="txtFiltro" id="txtFiltro" />
        <input type="submit" value="Filtrar" />
    </form>
    <hr>
    <table border="1">
        <tr> <th>ID</th> <th>Descricao</th> <th colspan="2">Excluir/Editar</th> </tr>
        <?php
            // Codigo para listar os registros do BD
            require_once("conexao.php");
            $sql = "SELECT id, descricao FROM categoria";

            if( isset($_GET["txtFiltro"]) )
            {
                $busca = $_GET["txtFiltro"];
                $sql = $sql . " " . "WHERE descricao like '%$busca%' ";
            }

            $resultado = mysqli_query($conexao, $sql);
            while( $linha = mysqli_fetch_assoc($resultado) )
            {
                $id         = $linha["id"];
                $descricao  = $linha["descricao"];
                echo("<tr>");
                    echo("<td>$id</td>");
                    echo("<td>$descricao</td>");
                    if($perfil=='A')
                    echo("<td> <a href='categoriaEXC.php?i=$id' 
                        onclick=\"return confirm('Deseja realmente excluir $descricao ?')\" > Excluir </a> </td>");
                    else
                        echo("<td>RESTRITO</td>");
                    echo("<td> <a href='categoriaEDT.php?i=$id'> Editar </a> </td>");
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>