<?php
 /**
  * Retorna -1 caso não encontre ou a posição
  * caso encontre.
  * Link:
  * https://pt.wikipedia.org/wiki/Busca_linear
  */
 function buscaSequencial($elementoProcurado, array $vetor) {
     $tamanhoVetor = count($vetor);
     for ($i = 0; $i < $tamanhoVetor; $i++) {
         if ($vetor[$i] == $elementoProcurado) {
             return $i;
         }
     }

     return -1;
 }

$a = array(1, 2, 3, 4, 5, 6);

print "<br /> buscaSequencial(4, [1, 2, 3, 4, 5, 6]); return: "; var_dump(buscaSequencial(4, $a));
print "<br /> buscaSequencial(6, [1, 2, 3, 4, 5, 6]); return: "; var_dump(buscaSequencial(6, $a));
print "<br /> buscaSequencial(1, [1, 2, 3, 4, 5, 6]); return: "; var_dump(buscaSequencial(1, $a));
print "<br /> buscaSequencial(8, [1, 2, 3, 4, 5, 6]); return: "; var_dump(buscaSequencial(8, $a));

?>
