<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome</label>
        <input type="text" name="nome" required>
        <label for="senha">Senha</label>
        <input type="password" name="senha" required>

        <button type="submit">Cadastrar</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Recebe os dados do formulário
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            //Salva os dados em um arquivo texto
            $arquivo = fopen('usuarios.txt', 'a');
            //Cria uma linha com o nome e a senha separados por ";"
            $linha = $nome . ';' . $senha . "\n";
            //Escreve a linha no arquivo
            fwrite($arquivo, $linha);
            //Fecha o arquivo
            fclose($arquivo);
            echo "Usuário cadastrado com sucesso!";
        }
    ?>
</body>
</html>