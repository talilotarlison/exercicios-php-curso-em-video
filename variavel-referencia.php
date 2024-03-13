<?php

 // variavel referênciada
 
$a = 5;
$b = &$a;
$b += 7;

	echo "valor de  b : $b \nvalor de a : $a\n";
	
// variável de variável	
	
	$nome = "talilo";
	$$nome = "joao";
	
	echo "$nome \n";
	
	echo "$talilo";
	
	
?>
