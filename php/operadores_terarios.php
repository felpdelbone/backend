<?php
// //declaração das variaves 
// $nome = "felipe";
// $mensagem = ($nome == "felipe") ? "Seja bem vindo Felipe" : "Seja bem vindo Visitante";
// $idade = 15;
// $resultado = ($idade >= 18) ? "<br/>Maior de idade" : "<br/>Menor de idade";
// //Exibe as variaveis 
// echo $mensagem;
// echo $resultado;

$is_logged_id = true;

$mensagem = $is_logged_id ? 'Bem-Vindo de volta':'Por facor, faça login.';
echo $mensagem;

?>