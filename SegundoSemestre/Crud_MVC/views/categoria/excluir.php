<!DOCTYPE html>
<html>
<head>
    <title>Excluir Categoria</title>
</head>
<body>
    <h1>Excluir Categoria</h1>
    <p>Tem certeza de que deseja excluir a categoria "<?php echo $categoria['nomecategoria']; ?>"?</p>
    <form method="post" action="index.php?action=excluir&id=<?php echo $categoria['codcategoria']; ?>">
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>