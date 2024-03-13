<?php

  $nota1 = 6;
  $nota2 = 6;
  $nota3 = 6;

function calMediaNotas($n1,$n2,$n3){
  $media = ($n1 + $n2 + $n3)/3;
  return  number_format($media, 2, '.', '');
}

echo calMediaNotas($nota1,$nota2,$nota3);


$notas = [
  "nota1"=> 5,
  "nota2"=> 5,
  "nota3"=> 8,
  "nota4"=> 5,
  "nota5"=> 8
  ];

$car = array("type" => "Fiat", "model" => "500", "color" => "white");

echo print_r($notas["nota1"]);


function calMediaNotasDinamica($arr){
  $media =	array_sum($arr)/sizeof($arr);
  return number_format($media, 2, '.', '');
}

echo 'Sua media final é: '.calMediaNotasDinamica($notas);


?>
