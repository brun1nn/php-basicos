<?php
// Página de logout (15d_logout.php)
session_start();
session_destroy(); // Destroi a sessão do usuário
header("Location: 15d_login.php");
exit();
?>