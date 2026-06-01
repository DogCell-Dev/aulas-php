<?php
// Configurações de conexão com o banco de dados
define('DB_HOST', 'localhost:3307');
define('DB_NAME', 'bdcrud');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Função para estabelecer a conexão com o banco de dados
function conectar()
{
    $conexao = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
        DB_USER,
        DB_PASSWORD
    );

    // Configuração adicional, se necessário
    //ativar recursos de exibição de erros SQL
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conexao;
}
?>