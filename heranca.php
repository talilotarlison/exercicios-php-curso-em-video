<?php
#https://pt.stackoverflow.com/questions/296706/como-acessar-atributos-da-classe-pai-em-php
    class Pessoa {
        function __construct($nome, $sexo, $idade) {
            $this->nome = $nome;
            $this->sexo = $sexo;
            $this->idade = $idade;
        }
        function getNome() {
            return $this->nome;
        }
        private $nome;
        private $sexo;
        private $idade;
    }
    class Amigo extends Pessoa {
        function __construct($nome, $sexo, $idade, $diaDoAniversario) {
            parent::__construct($nome, $sexo, $idade);
            $this->diaDoAniversario = $diaDoAniversario;
        }
        private $diaDoAniversario;
    }

    $joao = new Amigo("Jonis", "masc", 20, 30);
    echo "Nome: $joao->nome";  // Notice: Undefined property: Amigo::$nome
    echo "Nome: $joao->getNome()"; // Undefined property: Amigo::$getNome

?>
