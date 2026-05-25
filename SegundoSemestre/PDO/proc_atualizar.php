<?php
// Codigo para processar o atualizar
require_once(conexao.php);

$id = $_POST["txtId"];
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$idade = $_POST["txtIdade"];

$sql = "SET
            nome = :nome ,
            email = :email ,
            idade = :idade
        WHERE
            id = :id";
$comandoPreparado = $pdo->preparate($sql);
$comandoPreparado->execute([
    'nome'->$nome,
    'email'->$email,
    'idade'->$idade,
    'id->'->$id
]);
//echo "Aluno atualizado com sucesso!";
header("Location:consultar.php");
?>