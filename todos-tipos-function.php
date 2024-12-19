<?php
// exemplo 1
  $n1 = 3;
  $n2 = 4;
  
  $r= $n1 + $n2;

	echo $r >= 7 ? "aprovado": "reprovado";
	
	//  exemplo 2
	echo PHP_EOL;
	
	$status = null;
	
	if($r>=7){
	  $status = "aprovado de novo";
	}else{
	   $status = "reprovado  de novo";
	}
	
	echo $status;
	
		//  exemplo 3
	echo PHP_EOL;
	
	function calcular(float $status):string{
  	  if($status>=7){
  	    return "nota A";
  	 }else{
  	    return "nota b";
  	  }
	
	}
	
	$media = 8;
	$statusFunction = calcular($media);
	echo 	$statusFunction;
	
		//  exemplo 4
			echo PHP_EOL;
	
		$resu = fn(float $n1, float $n2): float=>$n1 + $n2;
		
	
	printf($resu(2,3));
		//  exemplo 5
		
		echo PHP_EOL;
		$greet = function($name) {
    printf("Hello %s\r\n", $name);
      };
      
      $greet('World'); // Saída: Hello World
      $greet('PHP');   // Saída: Hello PHP
		
				//  exemplo 7
		
		echo PHP_EOL;
		
	
      $message = 'hello';
      
      $example = function () use ($message) {
          var_dump($message);
      };
      
      $example(); // Saída: string(5) "hello"

						//  exemplo 8
		
		echo PHP_EOL;
		
		$resutado = function( float $ne1, float $ne2):float {
		  $resu = $ne1 + $ne2;
		  return $resu;
		};
		
	
	echo $resutado(2 , 3);
	
			//  exemplo 9
			echo PHP_EOL;
	
		$resu1 = fn(float $n1, float $n2) : float => $n1 + $n2;
		
	
		
	printf($resu1(2,8));
	
	
	
?>
