<?php
// Função para a tabuada de um número
function tabuada($numero) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
}

// Chama a função 
$numero = 2; 
echo "Tabuada $numero<br>"; 
tabuada($numero);
?>
