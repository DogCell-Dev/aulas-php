<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Categoria</title>
</head>
<body>
    <h1>Adicionar Categoria</h1>
    <form method="post" action="index.php?action=adicionar">
        <label for="codcategoria">Código:</label>
        <input type="text" id="codcategoria" name="codcategoria" value="(Automatico)" readonly>
        <br>
        <label for="nomecategoria">Descrição:</label>
        <input type="text" id="nomecategoria" name="nomecategoria" required>
        <br>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>