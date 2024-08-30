<?php
// sequencia dos numeros 
$numero = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
//função para fazer a trooca e a lista
echo '<pre>';
print_r ($numero);
//exibe os numeros que vao ser trocados 
echo $numero[0];
echo "<br>";
echo $numero[4];
echo "<br>";
echo $numero[9];
echo "<br>";
//faz a troca dos numeros
$numero[0] = 100;
$numero[4] = 500;
$numero[9] = 1000;
//ira exibir a lista atualizada
echo '<hr>';
echo 'segue a lista atualizada a baixo <br>';
print_r ($numero);
//exibe os numeros trocados
echo  $numero[0] ;
echo "<br>";
echo  $numero[4] ;
echo "<br>";
echo  $numero[9] ;
echo '</pre>';

?>