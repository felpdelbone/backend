<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    
    <title>exclusivedrive.com</title>
</head>
<body>
    <header>
        <div class="interface">
            <div class="logo"> 
                <a href="">
                    <img src="./exclusive drive.png" alt="logo"
                    width="160px" />
                    
                </a>
            </div> <!--logo-->
            <nav class="menu-desktop ">
            <form action="logoff.php" method="POST">
        <a class="logoff-button" href="entrar.php">Sair</a>
        </form>
                <ul>
                    <li><a href="">inicio</a></li>
                    <li><a href="">Especialidades</a></li>
                    <li><a href="">Sobre</a></li>
                </ul>
            </nav>
            <div class="btn-contato">
                <a href="#">
                    <button>Contato</button>
                </a>
            </div><!--btn-contato-->
        </div> <!--interface-->
    </header>
    
    <main>
        <section class="topo-do-site"> 
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>SEJA BEM VINDO AO NOSSO WEBSITE<span>.</span></h1>
                        <p>Seja bem vindo (a) ao exclusive drive sua loja de carros de luxos.</p>
                        <div class="btn-contato">
                            <a href="#">
                                <button>Entre em contato</button>
                            </a>
                            </div><!--topo-do-site-->
                        </div>
                        <div class="img-topo-site"> 
                            <img src="./WhatsApp-Image-2020-08-28-at-09.25.22-1.png" alt="cr7">
                        </div><!--img-topo-site-->
                </div> <!--flex-->
            </div> <!--interface-->
            <h2>Formulário de Contato</h2>
            <div class="forms">
                <form action="/enviar-formulario" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
        
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>
        
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section><!--topo-do-site-->
        </main>
</body>
</html>