function fn(&$x) {
    $x *= 5;
}

$y = 2;

fn($y);

echo $y; // Imprime 10

//https://pt.stackoverflow.com/questions/90347/É-possível-passar-variáveis-por-referência-no-javascript
