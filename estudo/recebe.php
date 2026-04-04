<?php 

$Nome = $_POST['txtnome']; 

if ($Nome != null){
    echo "Olá, $Nome!";
} elseif ($Nome == null) {
    echo "Digite seu nome!";
    header("location:envia.php");
}
?>