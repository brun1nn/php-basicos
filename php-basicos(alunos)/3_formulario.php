<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    
    <form method="post" action="">
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    //Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Recebe os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        //Exibe os dados recebidos
        echo "<h2>Dados Recebidos:</h2>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Telefone: $telefone <br>";
        }
    ?>
</body>
</html>