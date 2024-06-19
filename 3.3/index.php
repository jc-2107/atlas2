
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style02.css">
    <title>Lista de Usuários</title>
</head>
<body>   

	<header>
		<h1>Lista de Leitores</h1>

		<div class="text">
            <div class="sub-text"></div>
        </div>
	</header>


    <div class="center-text">

    <h2>Adicionar Novo Leitor</h2>
    <form action="adicionar_user.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Adicionar</button>
    </form>

   
    </div>
    

    <h1>Lista de Leitor</h1>
    <ul>
        <?php

            require_once 'Model/Aluno.php';

            $aluno = Aluno::listarTodos();

            foreach ($aluno as $aluno) {
                echo "<li>{$aluno->getNome()}</li>";
            }
        ?>
    </ul>
 
    <style>
		body {
			background-color: #bba083; /* Pink color code */
            font-family:Garamond:;
		}
	</style>    

</body>
</html>





<!--require_once __DIR__ . '/DAO/conexao.php';
require_once __DIR__ . '/Model/Aluno.php';

use Model\Aluno;
$aluno = new Aluno();



// Criando um objeto Aluno


// Atribuindo valores aos atributos
$aluno->nome = "João";










$aluno->idade = 15;
$aluno->curso = "Informática";

// Chamando métodos do objeto
$aluno->estudar(); // Exibe "João está estudando!"
echo '<br>';
$aluno->fazerProva(); // Exibe "João está fazendo prova!"
echo '<br>';
//$aluno->maiorDeIdade();
        -->