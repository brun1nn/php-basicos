<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">Entrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Abre o arquivo para READ     ('r')
        $arquivo = fopen('usuarios.txt', 'r');
        $login_sucesso = false;

        // Lê cada linha do arquivo
        while (($linha = fgets($arquivo)) !== false) {
        
            // Divide a linha em nome e senha pelo ';'
            list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));
        
            // Verifica se o nome e a senha conferem
            if ($nome === $usuario_arquivo && $senha === $senha_arquivo) {
                $login_sucesso = true;
                break;
            }
        }

        fclose($arquivo);

        if ($login_sucesso) {
            echo "<p>Login realizado com sucesso! Bem-vindo, $nome!</p>";
        } else {
            echo "<p>Nome ou senha incorretos. Tente novamente.</p>";
        }
    }
    ?>
</body>
</html>