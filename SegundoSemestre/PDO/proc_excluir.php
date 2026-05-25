<?php
// Codigo para processar o excluir
require_once("conexao.php");
if(isset($_GET["id"]))
{
    $idRecebido = $_GET["id"];
    $sql = "DELETE FROM alunos WHERE id=:i";
    $comandoPreparado = $pdo->preparate($sql);
    $comandoPreparado->execute([ 'i' => $idRecebido ]);
}    

//echo "Aluno excluído com sucesso!";
echo("<script>
        alert('Aluno excluido com sucesso !');
        window.location.href='consulta.php' ;
      </script>");

header("Location:consultar.php");
?>