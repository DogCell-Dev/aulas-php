<?php
// index.php

// Carrega as classes necessárias
require_once 'controllers/CategoriaController.php';

// Cria uma instância do controlador
$categoriaController = new CategoriaController();

// Verifica a ação solicitada pelo usuário
$action = $_GET['action'] ?? 'index';

// Chama o método apropriado do controlador com base na ação
switch ($action) {
    case 'index':
        $categoriaController->index();
        break;
    case 'adicionar':
        $categoriaController->adicionar();
        break;
    case 'editar':
        $categoriaController->editar();
        break;
    case 'confirmaExcluir':
        $categoriaController->confirmaExcluir();
        break;
    case 'excluir':
        $categoriaController->excluir();
        break;
    default:
        echo "404 - Página não encontrada";
        break;
}
?>