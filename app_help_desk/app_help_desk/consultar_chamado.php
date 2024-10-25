<?php require_once("login.php");?>

<?php 
$chamados = array();

$arquivo = fopen('registro.txt', 'r');

while (!feof($arquivo)){
$registro = fgets($arquivo);
$chamados[]= $registro;
}
echo '<pre>';
print_r($chamados);
echo'</pre>';
 
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <div style="text-align: right;">
      <form action="logoff.php" method="POST">
          <a class="logout-button" href="entrar.php">Sair</a>
      </form>
  </div>
  <style>
      .logout-button {
          background-color: red;
          color: white;
          border: none;
          padding: 10px 20px;
          cursor: pointer;
          font-size: 16px;
      }
      .logout-button:hover {
          background-color: darkred;
      }
  </style>

    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
           
            <div class="card-body">
             <?php
            foreach($chamados as $chamado){
             
             $chamados_dados = explode('#', $chamado);

             echo '<pre>';
             print_r($chamados_dados);
             echo '</pre>';
            }
             ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>