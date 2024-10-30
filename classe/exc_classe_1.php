<?php 

class Aluno {
    private $nome;
    private $idade;
    private $curso;
    // Construtor para inicializar os atributos
    public function __construct($nome, $idade, $curso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
    }
    // Método para exibir detalhes do aluno
    public function mostrarInfos() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Curso: " . $this->curso . "<br>";
    }
     // Método para alterar o curso
    public function alterarCurso($novoCurso) {
        $this->curso = $novoCurso;
    }
}

// Criação do aluno
$aluno = new Aluno("Felipe", 17, "Desenvolvimento de Sistemas");
// Exibir informações iniciais
echo "Informações Iniciais:<br>";
$aluno->mostrarInfos();

// Alterar o curso do aluno
$aluno->alterarCurso("Análise e Desenvolvimento de Sistemas");

// Exibir informações após a alteração do curso
echo "<br>Informações Após Alteração do Curso:<br>";
$aluno->mostrarInfos();

?>
