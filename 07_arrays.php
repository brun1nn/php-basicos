<?php

$produtos = [
    ["nome" => "Camiseta", "preco" => 50.00,  "quantidade" => 10],
    ["nome" => "Calça", "preco" => 100.00, "quantidade" => 5  ],
    ["nome" => "Tênis", "preco" => 150.00, "quantidade" => 7  ],
    ["nome" => "Boné", "preco" => 30.00,  "quantidade" => 20 ],
    ["nome" => "Jaqueta", "preco" => 200.00, "quantidade" => 3  ],
    ["nome" => "Meias", "preco" => 15.00,  "quantidade" => 25 ]
];

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";

foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . $produto['nome'] . "</td>";
    echo "<td>R$" . number_format($produto["preco"], 2, ',', '.') . "</td>";
    echo "<td>" . $produto["quantidade"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>