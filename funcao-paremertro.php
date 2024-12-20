<?php
//  utilizar as instruções include, require, include_once, require_once para incluir arquivos
// https://www.php.net/manual/pt_BR/function.func-get-arg.php  
  
  function soma(...$arr){
    print_r($arr);
  }
  
	soma(1,2,3,4);
	
	 function soma2( array $arr): void{
    var_dump( $arr);
  }
  
	soma2([1,2,3,4]);
	
	  function soma3(){
	    $arrTotal =func_get_args();
	    $arr = func_num_args();
      print_r($arr);
       print_r($arrTotal);
  }
  
	soma3(1,2,3,4);
	
?>
