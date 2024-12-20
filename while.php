<?php
  $inicio = 1;
  $fim = 100;
  $salto = 5;
  
  if($inicio< $fim ){
    $i= $inicio;
    
    while( $i <= $fim ){
      echo $i;
      $i +=  $salto;
      echo PHP_EOL ;
    }
  }else{
      $i= $inicio;
    
    while( $fim <= $i ){
      echo $i;
      $i -=  $salto;
      echo PHP_EOL ;
    }
  }
	echo "Fim!";

// ex fatorial	
    $fatorial = 5;
	  $i =  $fatorial ;
    $calc = 1;
    while ($i > 1){
        $calc *= $i;
        $i--;
    }

    echo $calc;
    
    // ex 3
    
    $i = 0;
      do {
          echo $i;
      } while ($i > 0);
?>
