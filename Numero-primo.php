<?php

$num = 9;

$divisor =0;

for($i=1 ; $i <=$num ; $i++){
  
  if($num%$i===0){
    
    $divisor++;
  }

}
if ($divisor===2){


	echo "numeor $num é primo";
	
	}else{
	  
	  echo "numero $num nao e primo";
	}
?> 
