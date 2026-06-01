<!DOCTYPE html>
<html>
<head>
    <title>Lista de Categorias</title>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> -->
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
</head>
<body border="1">
    <h1>Lista de Categorias</h1>
    <a href="index.php?action=adicionar">Adicionar Categoria</a>

    <table border="1">
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?php echo $categoria['codcategoria']; ?></td>
            <td><?php echo $categoria['nomecategoria']; ?></td>
            <td>
                <a href="index.php?action=editar&id=<?php echo $categoria['codcategoria']; ?>">Editar</a>
                <a href="index.php?action=confirmaExcluir&id=<?php echo $categoria['codcategoria']; ?>">Excluir</a>
            </td>
            <div id="foi"></div>
        </tr>
        <?php endforeach; ?>
        <script>
            var $nome = prompt("Digite seu nome")
            if ($nome == null){
                $nome = prompt("O nome é obrigatório cadela!")
            }else{
                alert(`Obrigado ${$nome}`)
            }
            

        </script>
    </table>
</body>
</html>