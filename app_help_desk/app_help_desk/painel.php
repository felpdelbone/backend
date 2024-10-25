<?php
require_once("login.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
      .logout-button {
          background-color: red; 
          color: white;
          border: none;
          padding: 10px 20px;
          cursor: pointer;
          font-size: 16px;
          margin-left: 10px; /* Espaço entre os botões */
      }
      .logout-button:hover {
          background-color: red; 
      }
      .botao-contato {
          background-color: black;
          color: white;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          border-radius: 5px;
          font-size: 16px;
      }
      .botao-contato:hover {
          background-color: gray;
      }
      .navbar-buttons {
          display: flex;
          justify-content: flex-end;
          align-items: center;

          
      }
      #feedback a {
      color: gray;
      text-decoration: none;
      display: inline-block;
      transition: .2s;
    }

#feedback a:hover {
  color: #fff;
  transform: scale(1.05);
}

#feedback nav ul {
  list-style-type: none;
}

#feedback nav ul li {
  display: inline-block;
  padding: 0 40px;
}
    </style>
  </head>

  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    <header id="feedback">
                 <ul>
                    <li><a href="index.php">Feedback</a></li>
                </ul>
    </header>

      <div class="navbar-buttons">
        <a href="index.php"></a>
        <a href="https://wa.me/5511999999999" class="botao-contato" target="_blank">
          Entrar em Contato
        </a>
        <form action="logout.php" method="POST">
        <a class="logout-button" href="entrar.php">Sair</a>
        </form>
      </div>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
