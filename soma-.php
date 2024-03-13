<?php

function soma(){
  // criar um array com todos os argumentos passado
  $a = func_get_args();
  // número do total de argumentos
  $b = func_num_args();
  
  $c = 0;
  
  for($i=0 ; $i <$b ; $i ++){
    
    $c += $a[$i];
    
  }
  return $c;
}


$resu = soma(5,8,9,3);

	echo "soma e $resu";
	
?>
