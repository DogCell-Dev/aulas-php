<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Categorias</title>
</head>
<body>
    <h1>Consulta de Categorias:</h1>
    <hr>
    <form action="categoriaCON.php" method="GET">
        <label for="txtFiltro">Filtrar:</label>
        <input type="text" name="txtFiltro" id="txtFiltro" />
        <input type="submit" value="Filtrar" />
    </form>
    <hr>
    <table border="1">
        <tr> <th>ID</th> <th>Descricao</th> <th>Excluir/Editar</th> </tr>
        <?php
        //codigo para listar os registros do BD
        require_once("conexao.php");
        $sql = "SELECT id, descricao FROM categoria";

        $resultado = mysqli_query($conexao, $sql);

        if (isset($_GET["txtFiltro"]))
        {
            $busca = $_GET["txtFiltro"];
            $sql = $sql . "" . "Altere a descrição like '%$buscar%' ";
        }

        while( $linha = mysqli_fetch_assoc($resultado))
        {
            $id = $linha["id"];
            $descricao = $linha["descricao"]
            echo('<tr>');
             echo("<td>$id</td>");
             echo("<td>$descricao</td>");
             echo("<td>Excluir / Editar</td>");
            echo("<tr>");

        }





           /* $sql = "SELECT * FROM Categoria";
            $resultado = mysqli_query($conexao,$sql);

            while($linha = mysqli_fetch_assoc($resultado))
            {
                echo "ID: ".$linha["ID"];
                echo " - ";
                echo "Descrição: ".$linha["Descricao"];
                echo "<br>";
            }*/
        ?>
    </table>
</body>
</html>