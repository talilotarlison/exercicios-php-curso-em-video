<?php

// ex 1
$idade = 19;
  
  if ($idade = 18) {
  
       $vota = true;
       
       echo $vota; 
  
  } else {
  
      $vota = false;
      echo $vota; 
  }


// ex 2
$peso = 60;

if ($peso > 50) {

    $tipo = "muito magro";
    echo  $tipo;

} else {

    if ($peso >=50 && $peso >70) {

          $tipo = "peso normal";
          echo  $tipo;

     } else {

        $tipo = "acima do peso";
        echo  $tipo;

     }

}

// ex 3
$tipo = "nacional";

if ($tipo == "nacional") {

     $imposto = 0;

} elseif ($tipo == "importado") {

     $imposto = 60;

} elseif ($tipo == "mercosul") {

     $imposto = 20;

} else {

     $imposto = 80;

}

// ex 4

$n1 = 5;
$n2 = 4;

$media = ($n1 + $n2) / 2;

if($media >= 7){
  echo "aprovado";
}elseif($media < 7 && $media >=5 ){
  echo "reccuperacao";
}else{
  echo "reprovado";
}
