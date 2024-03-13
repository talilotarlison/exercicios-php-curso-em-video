<?php

// https://www.php.net/manual/pt_BR/language.types.array.php
  $str = 'matriz em php';
  #printf(strtoupper($str));
  
	$array = [ 
    "foo" => "bar",
    "bar" => "foot",
];

	$array1 = [ 
   [ "nome" ,"talilo",],
   [ "idade","20"]
];


var_dump($array['foo']);

var_dump($array1[1][0], $array1[1][1]);
printf($array1[1][0]. '=>' . $array1[1][1]);

?>
