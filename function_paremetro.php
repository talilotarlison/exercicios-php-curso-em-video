<?php
#https://infojrufba.github.io/guias/mvc/
# https://www.devmedia.com.br/php-pdo-como-se-conectar-ao-banco-de-dados/37211
# https://pt.stackoverflow.com/questions/114824/como-e-para-que-usar-mvc-no-php
function build($id, $titulo) {
    // validamos nosso modelo

    return [
        'id' => $id,
        'titulo' => $titulo
    ];
}

$teste = build(55, 'joao');
var_dump($teste['id']);

?>
