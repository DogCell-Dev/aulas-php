<?php
    //Codigo para buscar os registros no banco
    require_once("conexao.php");
    $sql = "SELECT id, nome, email, idade FROM alunos";
    $resultado = $pdo->query($sql); //retorna uma matriz de rsultado do banco de dados sql

    //Quebrar uma matriz em uma lista de vetores
    $alunos = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Alunos</title>
</head>
<body>
    <h1>Consultar Alunos</h1>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>IDADE</th>
            <th colspan="2">EXCLUIR / ATUALIZAR</th>
        </tr>
        <?php
            // Codigo para listar os registros do Banco
            foreach($alunos as $a){
            echo("<tr>");
                echo("<td>{$a['id']}</td>");
                echo("<td>{$a['nome']}</td>");
                echo("<td>{$a['email']}</td>");
                echo("<td>{$a['idade']}</td>");
                echo("<td><a href='proc_excluir.php?id={$a['id']}' onClick = 'return confirm(\"Deseja realmente excluir{$a['nome']}\")' >Excluir</a></td>");
                echo("<td><a href='tela_atualizar.php?id={$a['id']}'>Atualizar</a></td>");
                
            echo("</tr>");
            }
        ?>
    </table>
</body>
</html>