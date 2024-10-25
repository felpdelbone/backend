<?php

echo "<pre>";
print_r ($_POST);
echo "</pre>";
echo "<hr>";

$titulo =str_replace('|','-', $_POST['titulo']);
$categoria =str_replace('|','-', $_POST['categoria']);
$descricao = str_replace('|','-',$_POST['descricao']);
$texto = $titulo. '|' .$categoria.  '|' .$descricao.PHP_EOL;

echo $texto;

$arquivo= fopen('registro.txt','a');

fwrite($arquivo,$texto);

fclose($arquivo); 


?>