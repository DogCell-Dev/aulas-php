<?php
    // Codigo para processar o login e salvar na sessao
    require_once(conexao.php);

    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenhaUsuario"];

    $sql = "SELECT loginusuario, nicelusuario FROM usuarios
            WHERE loginusuario = :n AND senhausuario = :s";
    $comandoPreparado = $pdo->preparate($sql);
    $comandoPreparado->execute([
        'n'->$usuario,
        's'->$senha
    ]);

    if($comandoPreparado->rowCount() == 0){
        echo("<script>alert('Usuario ou senha inválidos!');
        window.location.href='tela_login.php';
        </script>");
    }else{
        session_start();
        $usuarioAutenticado = $comandoPreparado->fetch(PDO::FETCH_ASSOC);
        $_SESSION["usuarioLogado"] = $usuarioAutenticado = $comandoPreparado["loginUsuario"];
        $_SESSION["nivelAceddo"] = $usuarioAutenticado = $comandoPreparado["nivelUsuario"];
        header("location:index.php");
    }
?>