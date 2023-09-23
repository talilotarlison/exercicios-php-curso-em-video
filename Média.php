<?php

// acima de 7  : aprovado
// entre 5 e 7 : recuperação
// menor wue 5 reprovando

$aluno = "maria";
$n1 = 5;
$n2 = 4;

$media = ($n1 + $n2)/ 2;

if ($media >=7){
  
  $situacao = "aprovado";
  
}elseif($media >= 5 && $media < 7){
  
  $situacao= "recuperação";
  
}else{
  
  $situacao = "reprovado";
  
}

	echo "Aluno $aluno $situacao";
	
?>
