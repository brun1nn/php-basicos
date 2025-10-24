




















<!-- Passar id via URL -->
<!-- http://localhost/php-basicos/13_exclusao.php?id=5-->




















<?php
//Conecta com o banco de dados
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

//Verifica se o ID foi passado via URL para exclusão
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deleta o registro do cliente com o ID especificado
    $sql = "DELETE FROM clientes WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente excluido com sucesso!";
    } else {
        echo "Erro ao excluir cliente: " . $conn->error . "</p>";
    }
}

// Fecha a conexão
$conn->close();
?>