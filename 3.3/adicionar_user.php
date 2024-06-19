<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome"])) {
        require_once 'Model/Aluno.php'; 

        $nome = $_POST["nome"];
        Aluno::adicionar($nome);

        header("Location: index.php"); // Redireciona para a página principal
        exit();
    }
}

?>
