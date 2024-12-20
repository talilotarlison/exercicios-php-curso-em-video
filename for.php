<?php
// teste 2
$idade= array("Carlos"=>"27", "João"=>"33", "Paulo"=>"14", "Paulinho"=>"5", "Max"=>"8");
                echo "<br>";
                foreach($idade as $x => $x_valor){
                    echo "Nome :". $x . ", Idade: ". $x_valor . ".";
                    echo "<br>";
                }
// teste 1
   $cad = array(   array("Arroz","2 unidades", "13 reais"),
                                array("Feijão","4 unidades", "4 reais"),
                                array("Pão","10 unidades", "1 real"),
                                array("Leite","3 unidades", "5 reais")                
                );

                for ($linha = 0; $linha < 4; $linha++){
                    echo "<p><strong>Item número $linha da lista</strong></p>";
                    echo "<ul>";
                    for ($coluna = 0; $coluna < 3; $coluna++){
                        echo "<li>" .$cad[$linha][$coluna]."</li>";
                    }
                    echo "</ul>";
                }
