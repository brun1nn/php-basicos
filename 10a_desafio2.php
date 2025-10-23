<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <form action="" method="post">
        <label for="produto">Nome do produto:</label>
        <input type="text" id="produto" name="produto" required><br>
        
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" id="preco" name="preco" required><br>

        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];

        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if (!empty($produto) && $preco > 0) {
            echo "<p style='color: green;'>Produto e preço cadastrados com sucesso!</p>";

            $sql = "INSERT INTO produtos (produto, preco) VALUES ('$produto', '$preco')";

            if ($conn-> query($sql) === TRUE) {
                echo "<p style='color: green;'>Conexão com o servidor bem sucedida!</p>";

            } else {
                echo "<p style='color: red'> Falha na conexão: p>";
            }

        $conn->close();

        } else {
            echo "<p style='color: red;'>Preencha os campos corretamente. Lembre-se, o preço deve ser acima de R$00,00.</p>";
        }
    }
    ?>
</body>
</html>