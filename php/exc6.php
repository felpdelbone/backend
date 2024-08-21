<?php
// Solicita ao usuário que insira um número positivo
echo "Insira um número positivo: <br><br>";
$numero = 10; // Corrigido: Adicionado ponto e vírgula

// Verifica se o número é positivo
if ($numero > 0) {
    $i = 0; // Inicializa o contador

    // Loop para imprimir números pares
    while ($i <= $numero) {
        echo $i . "\n";
        $i += 2; // Incrementa de 2 em 2
    }
} else {
    echo "Por favor, insira um número positivo.";
}
?>
>
