<?php 

$cadastro = [];

$cadastro ['Usuario'] = ['João', 'Maria', 'Pedro'];

$cadastro ['Senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r ($cadastro);
echo '</pre>';
$cadastro ['Usuario'] [1] = 'Ana';

$cadastro ['Senha'] [1] = 'efgh';

echo '<hr>';

echo '<pre>';

echo 'Os seguintes items foram modificados:';
echo "<br>";
echo  $cadastro['Usuario'] [1];
echo "<br>";
echo  $cadastro['Senha'] [1];
echo "<br>";
echo 'Segue a baixo a tabela atualizada:';
echo "<br>";
print_r ($cadastro);

echo '</pre>';

?>