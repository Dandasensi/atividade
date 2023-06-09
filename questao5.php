<?php
$inicio = 10; // Valor inicial do intervalo
$fim = 500; // Valor final do intervalo
$soma = 0; // Variável para armazenar a soma

for ($i = $inicio; $i <= $fim; $i++) {
    if ($i % 2 == 0) { // Verifica se o número é par
        $soma += $i; // Incrementa o número par na soma
    }
}

// Apresenta a soma dos números pares
echo "A soma dos números pares entre $inicio e $fim é: $soma\n";
?>
