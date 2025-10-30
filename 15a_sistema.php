<?php
// Página de login (15a_sistema.php)
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

// Verifica as credenciais (exemplo simples, em um caso real use um banco de dados)
    if ($usuario == 'admin' && $senha == '123') {
        $_SESSION['usuario'] = $usuario; // Salva o nome do usuário na sessão
        header("Location: 15b_restrita.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" require><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" require><br>

        <button type="submit">Entrar</button>
    </form>
    <?php
    if (isset($erro)) {
        echo "<p style='color:red;'>$erro</p>";
    }
    ?>  
</body>
</html>