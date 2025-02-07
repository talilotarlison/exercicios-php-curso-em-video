<?php

  	$usuario = [
  	  "id" => 42,
  	  "nome" => "joao", 
  	  "idade" => 23
  	];
  	//typecasting
    $user = (Object)$usuario;
    var_dump($user->id);
