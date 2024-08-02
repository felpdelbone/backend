<?php  
$nome = 'felipe';
$cidade  = 'cerquilho';
$ce = 428 ; 
$curso = 'desenvolvimento de sistema' ; 
$media = 8.5 ; 

echo 'Olá seja bem vindo ao SESI-SP <br>';

echo "$nome <br>";
echo "$cidade <br>";
echo "$ce <br>";
echo "$curso <br>";
echo "$media <br>";

echo "olá $nome, seja bem vindo(a) ao SESI $ce da $cidade, sua media em $curso é $media" ;
 ?>

echo "# backend" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/felpdelbone/backend.git
git push -u origin main