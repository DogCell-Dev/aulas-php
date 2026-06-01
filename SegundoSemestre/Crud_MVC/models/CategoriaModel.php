<?php
class CategoriaModel {
    private $db; // Objeto de conexão com o banco de dados

    private $codigoCategoria;
    private $descricao;

    public function __set($propriedade, $valor) {
        $this->$propriedade = $valor;
    }
    
    public function __get($propriedade) {
        return $this->$propriedade;
    }

    public function __construct() {
        require_once 'config/config.php';
        // Inicialize a conexão com o banco de dados ou utilize uma classe de conexão existente
         $this->db = conectar();
    }

    public function getAll() {
        $consulta = "SELECT codcategoria,nomecategoria FROM categoria order by codcategoria";
        $result = $this->db->query($consulta);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($codigoCategoria) {
        $consulta = "SELECT codcategoria,nomecategoria FROM categoria WHERE codcategoria = :codigo";
        $parametros = array(':codigo' => $codigoCategoria);
        $comandoPreparado = $this->db->prepare($consulta);
        $comandoPreparado->execute($parametros);
        return $comandoPreparado->fetch(PDO::FETCH_ASSOC);
    }

    public function adicionar($descricao) {
        $consulta = "INSERT INTO categoria (nomecategoria) VALUES (:descricao)";
        $parametros = array(':descricao' => $descricao);
        $comandoPreparado = $this->db->prepare($consulta);
        $comandoPreparado->execute($parametros);
    }

    public function atualizar($codigoCategoria, $descricao) {
        $consulta = "UPDATE Categoria SET nomecategoria = :descricao WHERE codcategoria = :codigo";
        $parametros = array(':codigo' => $codigoCategoria, ':descricao' => $descricao);
        $comandoPreparado = $this->db->prepare($consulta);
        $comandoPreparado->execute($parametros);
    }

    public function excluir($codigoCategoria) {
        $consulta = "DELETE FROM Categoria WHERE codcategoria = :codigo";
        $parametros = array(':codigo' => $codigoCategoria);
        $comandoPreparado = $this->db->prepare($consulta);
        $comandoPreparado->execute($parametros);
    }
}
?>