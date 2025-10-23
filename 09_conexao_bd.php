<?php
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "exercicio";
// TRY-CATCH para tratar erros de conexão (como if e else)
try {
    // Criar conexão com o banco(conn)
    $conn = new mysqli ($servername, $username, $password, $dbname);
    
    // Verificar conexão com o banco(condição)
    if ($conn->connect_error) {
        throw new Exception("Falha na conexão: " . $conn->connect_error);
    }
    
    echo "Conexão realizada com sucesso!";

} catch (Exception $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
}

?>
<!-- Para criar o BD -->
<!-- CREATE DATABASE exercicio; -->

<!-- Para criar a Tabela -->
<!-- CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
); -->


