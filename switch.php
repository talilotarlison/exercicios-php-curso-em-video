<?php
// ex 1
  $diaSemana = 33;
  switch ($diaSemana) {
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
          echo "Vai trabaçhar";
          break;
      case 7:
      case 8:
          echo "Vai descançar";
          break;
    default:
        echo "Invalido";
  }
  
  
  // ex2
 $i = 2;
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i é menor que 3 mas não é negativo";
        break;
    case 3:
        echo "i é 3";
}

// ex3
$ii = 3;
switch ($ii) {
    case 0:
        echo "i é igual a 0";
        break;
    case 1:
        echo "i é igual a 1";
        break;
    case 2:
        echo "i é igual a 2";
        break;
    default:
       echo "i não é igual a 0, 1 ou 2";
}
  
  
?>
