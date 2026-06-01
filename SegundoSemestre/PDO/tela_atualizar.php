<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Atualizacao de Aluno</h1>
    <hr>
    <?php
       // Codigo para buscar os dados no BD e preencher a tela
       require_once("conexao.php");

       $sql = "SELECT id, nome, email, idade  FROM aluno WHERE id=:i";

       $comandoPreparado = $pdo->prepare($sql);
       $comandoPreparado->execute([ 'i' => $_GET ["id"] ]);

       if($comandoPreparado->rowCount == 0 )
        {
            echo("<script>
                    alert('aluno não encontrado !')
                    windon.location.href='consultar.php';
                </script> ");
        }
        $aluno = $comandoPreparado->fech()

    ?>
    <form action="proc_atualizar.php" method="post">
        <label for="txtId">ID:</label>
        <input type="text" name="txtId" readonly 
            value="<?php echo("id"); // Preencher o ID ?>" />
        <br />
        <label for="txtNome">Nome:</label>
        <input type="text" name="txtNome" max-lenght="100" required 
            value="<?php echo("nome"); // Preencher o NOME ?>" />
        <br/>
        <label for="txtEmail">E-mail:</label>
        <input type="email" name="txtEmail" max-lenght="100" required 
            value="<?php echo("email"); // Preencher o E-Mail ?>" />
        <br />
        <label for="txtIdade">Idade:</label>
        <input type="number" name="txtIdade" step="1" min="0" required 
            value="<?php echo("idade"); // Preencher a IDADE ?>" />
        <br /> <br />
        <input type="submit" value="Atualizar Aluno"></input>
    </form> 
</body>
</html>