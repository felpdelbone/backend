<?php

//declarando a variavel
$corescolhida = 'amarelho';

switch($corescolhida){
    case "amarelho":
        echo "Você escolheu a cor amarelho";
        break;
    case "verde":
        echo "Você escolheu a cor verde";
        break;
    case "azul":
        echo "Você escolheu a cor azul.";
        break;
    default:
        echo "Cor Não indentificada.";
        break;
}


?>