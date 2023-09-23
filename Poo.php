<?php

class Pessoa {
 public $nome;
 public $idade;
 public $curso;
 
public function __construct($nome, $idade, $curso){
  
  $this->nome = $nome;
  $this->idade = $idade;
  $this->curso = $curso;
}
  function get_dados(){
  echo  $this-> nome;
  echo "\n";
  echo $this -> idade;
    
  }
  
}



$talilo = new Pessoa("Talilo", 29, "ads");


	echo $talilo->get_dados();
	
	
?>
