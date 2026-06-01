<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <form method="post" action="index.php?action=editar&id=<?php echo $categoria['codcategoria']; ?>">
        <label for="nomecategoria">Descrição:</label>
        <input type="text" id="nomecategoria" name="nomecategoria" value="<?php echo $categoria['nomecategoria']; ?>" required>
        <br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>