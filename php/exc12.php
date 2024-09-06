<?php

$cadastro = [];

$cadastro ['nome'] = ['felipe', 'pedro', 'guilherme', 'miguel', 'peblo'];

$cadastro ['email'] = ['felipe@gmail.com', 'pedro@gmail.com', 'guilherme@gmail.com', 'miguel@gmail.com', 'pablo@gmail.com'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo $cadastro ['nome'] [2];
echo '<br>';
echo $cadastro ['email'] [3];

echo '<hr>';

$cadastro['nome'] [1] = 'senai';

$cadastro['email'] [0] = 'aluno@senai.br';

echo '<pre>';
print_r($cadastro);
echo '</pre>';



?>