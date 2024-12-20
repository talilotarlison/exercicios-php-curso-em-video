<?php

// parmetro por referencia
  function soma(&$x){
    echo $x += 2;
  }
  $t =5;
  
  soma($t);
  
	echo $t;
	
	// parmetro por valor
  function soma1($x){
    echo $x += 2;
  }
  $t1 =5;
  
  soma1($t1);
  
	echo $t1;
?>
