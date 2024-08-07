<?php
//declaração das variaves 
$semestre1 = 2;
$semestre2 = 10;
$media = ( $semestre1 + $semestre2 ) / 2;
//exibe as variaveis 
echo "1 Semestre: " . $semestre1 . '<br>';
echo "2 Semestre: " . $semestre2 . '<br>';
//faz o calculo para dar o resultado 
if ($media >= 7){
    echo 'Você foi aprovado';
}else{
    echo 'Você foi reprovado';
}

?> 
    