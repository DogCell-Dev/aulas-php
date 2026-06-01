<?php

require_once 'models/CategoriaModel.php';

class CategoriaController {
    private $categoriaModel;

    public function __construct() {
        $this->categoriaModel = new CategoriaModel();
    }

    public function index() {
        // Obtém todas as categorias do modelo
        $categorias = $this->categoriaModel->getAll();

        // Inclui a view para exibir as categorias
        include 'views/categoria/index.php';
    }

    public function adicionar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // Obtém os dados do formulário
            $descricao = $_POST['nomecategoria'];

            // Chama o método do modelo para adicionar a categoria
            $this->categoriaModel->adicionar($descricao);

            // Redireciona para a página inicial de categorias
            header('Location: index.php?action=index');
            exit;
        } else {
            // Inclui a view para exibir o formulário de adição de categoria
            include 'views/categoria/adicionar.php';
        }
    }

    public function editar() {
        // Obtém o ID da categoria a ser editada
        $codigoCategoria = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtém os dados do formulário
            $descricao = $_POST['nomecategoria'];

            // Chama o método do modelo para atualizar a categoria
            $this->categoriaModel->atualizar($codigoCategoria, $descricao);

            // Redireciona para a página inicial de categorias
            header('Location: index.php?action=index');
            exit;
        } else {
            // Obtém os detalhes da categoria do modelo
            $categoria = $this->categoriaModel->getById($codigoCategoria);

            // Verifica se a categoria foi encontrada
            if (!$categoria) {
                echo "Categoria não encontrada";
                return;
            }

            // Inclui a view para exibir o formulário de edição de categoria
            include 'views/categoria/editar.php';
        }
    }


    public function confirmaExcluir() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $id = $_GET['id'];

            $categoria = $this->categoriaModel->getById($id);
            include 'views/categoria/excluir.php';
            exit;
        } else {

            header('Location: index.php?action=index');
        }
    }

    public function excluir() {
        // Obtém o ID da categoria a ser excluída
        $codigoCategoria = $_GET['id'];

        // Chama o método do modelo para excluir a categoria
        $this->categoriaModel->excluir($codigoCategoria);

        // Redireciona para a página inicial de categorias
        header('Location: index.php?action=index');
        exit;
    }
}
?>