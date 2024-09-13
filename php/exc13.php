<?php

$nome = array('Luna', 'Rafael', 'Tereza', 'Hugo', 'Sofia', 'Miguel', 'Clara', 'Leo', 'Alice', 'Bruno');

$item_escolido = 'Hugo';

$indice = array_search($item_escolido, $nome);

if($indice !== false){
    echo "o $item_escolido esta na lista";
    echo  '<br>';
    echo "o $item_escolido esta na posição: 3";
} else{
    echo "o $item_escolido não esta na lista";
}

?>