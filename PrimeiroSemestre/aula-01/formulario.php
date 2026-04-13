<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <hr>
    <form action="recebe.php" method="POST">
        <label for="txtNome">Digite seu nome: </label>
        <input type="text" id="txtNome" name=txtNome />
        <br />
        <label for="ncartao">Digite N°cartão</label>
        <input type="number" id="ncartao" name="ncartao">
        <br />
        <label for="cmbAnoNasc">Selecione seu ano de nascimento: </label>
        <select id="cmbAnoNasc" name="cmbAnoNasc">
            <option value="2026">2026</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>

        <?php
            for($ct = 2026; $ct >= 1900; $ct-- )
            {
                echo("<option value='$ct'>$ct</option>");
            } 
        ?>
        </select>
        <br />
        <input type="submit" value="Cadastrar">
        &nbsp;
        <input type="reset" value="Limpar">
        
    </form>
    
</body>
</html>