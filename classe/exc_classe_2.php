<?php 

class Livro {
    private $titulo;
    private $autor;
    private $anoPublicado;

    // Construtor para inicializar os atributos
    public function __construct($titulo, $autor, $anoPublicado) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicado = $anoPublicado;
    }

    // Método para exibir detalhes do livro
    public function exibirDetalhes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano de Publicação: " . $this->anoPublicado . "<br>";
    }

    // Método para alterar o ano de publicação
    public function alterarAnoPublicacao($novoAno) {
        $this->anoPublicado = $novoAno;
    }
}

// Exemplo de uso da classe Livro
$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);

// Exibir detalhes iniciais do livro
echo "Detalhes Iniciais do Livro:<br>";
$livro->exibirDetalhes();

// Alterar o ano de publicação do livro
$livro->alterarAnoPublicacao(2023);

// Exibir detalhes após a alteração do ano de publicação
echo "<br>Detalhes Após Alteração do Ano de Publicação:<br>";
$livro->exibirDetalhes();

?>
