<?php

class Conexao {
    private static $db;

    public static function conectar() {
        if (!self::$db) {
            $host = 'localhost';
            $dbname = 'biblioteca';
            $usuario = 'root';  
            $senha = 'root';

            try {
                self::$db = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro ao conectar ao banco de dados: " . $e->getMessage());
            }
        }

        return self::$db;
    }
}

?>
