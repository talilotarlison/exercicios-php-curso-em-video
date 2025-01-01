<?php
$soma = fn(int $v1,int $v2)=>  $v1 + $v2;

function aumento(int $v1, $callback){
  $v2 = 10;
  return  $callback($v1, $v2);
}
	echo aumento(30,$soma);
	
	echo aumento(10,fn(int $v1,int $v2)=>  $v1 * $v2);
?>
