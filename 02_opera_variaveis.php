<?php
// RECEBE OS DOIS NÚMEROS VIA URL(método get) E REALIZA AS OPERAÇÕES BÁSICAS
// Exemplo de URL: http://localhost/php-basicos/php-basicos(alunos)/2_opera_variaveis.php?numero1=10&numero2=5
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

// Verifica se os valores foram fornecidos(ISSET)

if (isset($numero1) && isset($numero2)) {
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    echo "Soma: $soma <br>";
    echo "Subtração: $subtracao <br>";
    echo "Multiplicação: $multiplicacao <br>";
    echo "Divisão: $divisao <br>";
} else {
    echo "Por favor, forneça os valores 'numero1' e 'numero2' na URL.";
}
?>