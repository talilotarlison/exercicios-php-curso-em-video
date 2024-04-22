<?php

/*https://www.php.net/manual/pt_BR/control-structures.while.php*/

/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

/* example 2 uso no html*/


$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;


/* example 3 */

$a = 0;
$b = 30; 

while ($a < $b && $b > $a) {
    echo $a++ . PHP_EOL;/* quabrar linha no terminal*/
    echo $b-- . PHP_EOL;/* the printed value would be
                   $i before the increment
                   (post-increment) */
}
?>