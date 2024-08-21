<?php
// Definindo o número máximo como uma constante
define('numero_max', 20);


$contador = 1;


do {
  
    echo $contador . "\n";
    
    $contador += 2;
} while ($contador <= numero_max);
?>
