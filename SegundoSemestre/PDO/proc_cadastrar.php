<?php
// Codigo para processar o cadastrar no bd
if(isset($_POST["txtNome"])){
    require_once("conexao.php");

    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $idade = $_POST["txtIdade"];

    $sql = "INSERT INTO alunos(nome, email, idade) VALUES(:n, :e, :idade)";

    $comandoPreparado = $pdo->prepare($sql);

    $comandoPreparado-> execute([
        'n' => $nome,
        'e' => $email,
        'idade' => $idade    
    ]);

}

//echo "Aluno inserido com sucesso!";
header("Location:consultar.php");
?>