<?php
// Página de login (15d_login.php)
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cor_fundo = $_POST['cor_fundo'];

    // Verifica as credenciais
    if (!empty($nome) && !empty($cor_fundo)) {
        $_SESSION['nome'] = $nome; // Salva o nome do usuário na sessão
        $_SESSION['cor_fundo'] = $cor_fundo; // Salva a cor de fundo na sessão
        header("Location: 15d_perfil.php");
        exit();
    } else {
        $erro = "Por favor, preencha todos os campos.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 - Login</title>
</head>
<body>
    <h2>Crie seu próprio perfil temporário aqui!</h2>
    <form action="" method="post">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <select name="cor_fundo" required>
            <h2>Escolha uma cor de fundo:</h2>
            <option value="lightyellow">Amarelo claro</option>
            <option value="lightgreen">Verde claro</option>
            <option value="white">Branco</option>
            <option value="black">Preto</ootion>
        </select>

        <button type="submit">Próximo</button>

        
    </form>
</body>
</html>

