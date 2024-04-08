<?php

#As arrow functions foram introduzidas no PHP 7.4 como uma sintaxe mais concisa para funções anônimas. 
#Elas são implementadas usando a classe Closure. A forma básica de uma arrow function é:
#fn (argument_list) => expr;

$saudacao = fn($nome) => "Olá, $nome!";
echo $saudacao("João"); // Saída: Olá, João!

$dobrarNumero = fn($num) => $num * 2;
echo $dobrarNumero(7); // Saída: 14


$quadrado = fn($x) => $x * $x;
echo $quadrado(4); // Saída: 16


$calcularAreaRetangulo = fn($dimensoes) => $dimensoes['largura'] * $dimensoes['altura'];
echo $calcularAreaRetangulo(['largura' => 6, 'altura' => 4]); // Saída: 24

?>