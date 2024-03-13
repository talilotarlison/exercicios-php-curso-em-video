<?php
// https://www.w3schools.com/php/php_oop_constructor.asp
// https://www.devmedia.com.br/como-criar-minha-primeira-classe-em-php/38895

class Produto {

   public $codigo;
   public $nome;
   
 function __construct($codigo, $nome) {
      $this->codigo = $codigo;
      $this->nome = $nome;
  }
  
   public function getCodigo()
   {
       return $this->codigo;
   }
   public function setCodigo($codigo)
   {
       $this->codigo = $codigo;
   }
   public function getNome()
   {
       return $this->nome;
   }
   public function setNome($nome)
   {
       $this->nome = $nome;
   }


}


$carro = new Produto(12 , 'Fiat');
var_dump($carro);
echo $carro->getNome();

?>
