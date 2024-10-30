<?php 
class Livro {
    // Atributos
    public $titulo = "A vida é curta demais pra viver o mínimo das coisas";
    public $autor = "Iandê Albuquerque";
    public $anoPublicacao = 2024;

    
    public function resumirCadFunc(){
        return " o livro $this->titulo foi publicado em $this->anoPublicacao, pelo o autor $this->autor";
    }

    // Método para exibir detalhes do livro
    public function exibirDetalhes() {
        return "Título: {$this->titulo}, Autor: {$this->autor}, Ano de Publicação: {$this->anoPublicacao}";
    }

    // Método para alterar o ano de publicação
    public function alterarAnoPublicacao($novoAno) {
        $this->anoPublicacao = $novoAno;
    }
}


$y = new Livro();
echo $y->resumirCadFunc(); 
echo '<hr>';

$y->ModificarNumAno(2025);
echo $y->exibirAno(); 
echo '<hr>'
?>

