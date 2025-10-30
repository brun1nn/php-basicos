<?php
// Página de perfil (15d_perfil.php)
session_start();
// Verifica se o usuário está logado
if (!isset($_SESSION['nome']) || !isset($_SESSION['cor_fundo'])) {
    header("Location: 15d_login.php");
    exit();
}
$nome = $_SESSION['nome'];
$cor_fundo = $_SESSION['cor_fundo'];
    echo "<style>body { background-color: $cor_fundo; }</style>";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 - Perfil</title>
</head>
<body>
    <h2>Este é o seu perfil temporário com fundo personalizado, <?php echo "$nome"?></h2>
</body>
</html>