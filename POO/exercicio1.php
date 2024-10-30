<?php 
class Aluno {
    // Atributos
    public $nome = "Ingrid";
    public $idade = 16;
    public $curso = "Desenvolvimento de Sistemas";

    // Método para resumir o cadastro
    function resumirCadFunc(){
        return "$this->nome tem $this->idade anos e faz o curso $this->curso";
    }

    // Método para modificar o curso
    function modificarCurso($novoCurso) {
        $this->curso = $novoCurso;
    }
    
    // Método para exibir o curso modificado
    function exibirCurso() {
        return "Curso modificado para: $this->curso";
    }
}

$x = new Aluno();
echo $x->resumirCadFunc();
echo '<hr>';

// Modifica o curso e exibe a modificação
$x->modificarCurso('Multimídia');
echo $x->exibirCurso();
echo '<hr>';
