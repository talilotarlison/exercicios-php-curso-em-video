<?php

//https://pt.stackoverflow.com/questions/241110/como-calcular-o-fatorial-de-um-numero
//https://pt.wikipedia.org/wiki/Fatorial

    $i = 5;
    $calc = 1;
    while ($i > 1){
        $calc = $calc * $i;
        $i--;
    }

    echo $calc;
?>  
