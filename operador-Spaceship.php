<?php

  //https://www.php.net/manual/pt_BR/language.operators.comparison.php
  // https://www.php.net/

  //https://www.php.net/manual/pt_BR/language.operators.php
  //https://www.php.net/manual/pt_BR/language.operators.comparison.php

  /* Spaceship (nave espacial) em php --->
  Um int menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b.

  */
  // teste 1
  $resu = 10 <=> 11; 
	echo $resu;
	
	// teste 2
  $resu2 = 10 <=> 10; 
	echo $resu2;
	
		// teste 3
  $resu3 = 11 <=> 10; 
	echo $resu3;
	
	// Integers
  echo 1 <=> 1; // 0
  echo 1 <=> 2; // -1
  echo 2 <=> 1; // 1
  
  // Floats
  echo 1.5 <=> 1.5; // 0
  echo 1.5 <=> 2.5; // -1
  echo 2.5 <=> 1.5; // 1
  
  // Strings
  echo "a" <=> "a"; // 0
  echo "a" <=> "b"; // -1
  echo "b" <=> "a"; // 1
  
  echo "a" <=> "aa"; // -1
  echo "zz" <=> "aa"; // 1
  
  // Arrays
  echo [] <=> []; // 0
  echo [1, 2, 3] <=> [1, 2, 3]; // 0
  echo [1, 2, 3] <=> []; // 1
  echo [1, 2, 3] <=> [1, 2, 1]; // 1
  echo [1, 2, 3] <=> [1, 2, 4]; // -1
  
  // Objects
  $a = (object) ["a" => "b"];
  $b = (object) ["a" => "b"];
  echo $a <=> $b; // 0
  
  $a = (object) ["a" => "b"];
  $b = (object) ["a" => "c"];
  echo $a <=> $b; // -1
  
  $a = (object) ["a" => "c"];
  $b = (object) ["a" => "b"];
  echo $a <=> $b; // 1
  
  // valores e tipos precisam coincidir
  $a = (object) ["a" => "b"];
  $b = (object) ["b" => "b"];
  echo $a <=> $b; // 1


?>