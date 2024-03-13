<?php
// https://www.devmedia.com.br/comandos-basicos-em-sql-insert-update-delete-e-select/37170
// https://www.w3schools.com/php/php_oop_constructor.asp
// https://www.php.net/manual/en/function.var-dump.php
class Dados {
  public $name;
  public $idade;
  public $cpf;

  function __construct($name,$idade,$cpf) {
    $this->name = $name;
    $this->idade = $idade;
    $this->cpf = $cpf;
  }
  
  function getNome(){
    return $this -> name;
  }
  
  function setNome($name){
    return $this -> name = $name;
  }
  
  function inseirDados() {
    $query = "INSERT INTO EMPREGADOS(id, nome, idade, cpf) VALUES(". 1 . "," . $this->name .",". $this->idade .",". $this->cpf .");";
    return $query;
  }
}


$user = new Dados('Talilo', 26 , 546169);
echo var_dump($user);
// echo $user -> inseirDados();
echo $user -> getNome();
echo $user -> setNome('Joao de Deus');
echo $user -> getNome();


class Atulizar extends Dados{
    public $id;


  function __construct($name,$idade,$cpf,$id) {
     parent::__construct($name,$idade,$cpf);
     $this->id = $id;
    
  }
  

}

$userAt = new Atulizar('Talilo', 26 , 546169, 9);

echo var_dump($userAt);
