<?php

// Declaração das variáveis
$salario = 4000;
$horas_extras = 2;

// Inicialização do salário total com o salário base
$salario_total = $salario; 

// Aplicando as variáveis e fazendo a verificação
if ($salario < 2000 && $horas_extras >= 10) {
    $adicional = $salario * 0.20; 
    $salario_total += $adicional;
    echo "O seu salário esse mês foi de R$ " .$salario_total. "<br>";
    echo "Parabéns, você teve 20% a mais do seu salário.";
} else {
    $adicional = $salario * 0.10;
    $salario_total += $adicional;
    echo "O seu salário esse mês foi de R$ " .$salario_total. "<br>";
    echo "Parabéns, você teve 10% a mais do seu salário.";
}
?>
