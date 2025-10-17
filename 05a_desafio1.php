<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="ano">Idade:</label>
        <input type="type" name="ano" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Recebe os dados do formulário
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        //Calcula a idade
        $idade = date("Y") - $ano;
        //Valida a idade
        if ($idade <= 17 ) {
            echo "Acesso negado. {$nome}!";
        }
        else {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            //Salva os dados em um arquivo texto
            $arquivo = fopen('log_acessos.txt', 'a');
            //Cria uma linha com o nome e a idade separados por ";"
            $linha = $nome . ';' . $ano . "\n";
            //Escreve a linha no arquivo
            fwrite($arquivo, $linha);
            //Fecha o arquivo
            fclose($arquivo);
            echo "Idade cadastrada com sucesso!";
        }
    } 
    ?>
</body>
</html>