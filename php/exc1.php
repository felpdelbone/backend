<?php

$semestre1 = 2;
$semestre2 = 10;
$media = ( $semestre1 + $semestre2 ) / 2;

echo "1 Semestre: " . $semestre1 . '<br>';
echo "2 Semestre: " . $semestre2 . '<br>';

if ($media >= 7){
    echo 'Você foi aprovado';
}else{
    echo 'Você foi reprovado';
}

?> 
    