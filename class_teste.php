<?php
// https://www.devmedia.com.br/comandos-basicos-em-sql-insert-update-delete-e-select/37170
// https://www.w3schools.com/php/php_oop_constructor.asp
// https://www.php.net/manual/en/function.var-dump.php

class Dados {

  function setNome($name){
    return $name;
  }

}
	echo Dados::setNome('joao');
	
	$nome = new Dados;
	echo $nome->setNome('Talilo');
?>
