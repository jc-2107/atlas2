<?php

require_once 'DAO/conexao.php';

class Aluno {
    private $nome;
    
    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public static function listarTodos() {
        $db = Conexao::conectar();
        $query = $db->query("SELECT * FROM biblioteca.usuario");
        $usuarios = array();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $usuarios[] = new Aluno($row['nome']);
        }

        return $usuarios;
    }

    public static function adicionar($nome) {
        $db = Conexao::conectar();
        $stmt = $db->prepare("INSERT INTO biblioteca.usuario (nome) VALUES (:nome)");
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
    }
}

?>

<!--Classe Aluno representando um aluno da escola
class Aluno {
    // Atributos (características do aluno)
    public $nome;


    // Métodos (ações que o aluno pode realizar)
    public function estudar() {
        echo "$this->nome está estudando!";
    }
    
    /*public function maiorDeIdade(){


        if ($this->idade >= 18) {
            echo "$this->nome é maior de idade";
          }
          else{
            echo "$this->nome nao é maior de idade";
          }
        
    }
*/
-->