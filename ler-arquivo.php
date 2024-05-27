<?php

//Ler o arquivo
$linhas = explode("\n", file_get_contents("./arquivo.txt"));

//Ler somente o conteudo da linha [0] do array ou seja linha 1 do texto
//Para linha "2" e so colocar [1] assim.
$linha_n = $linhas[0];

// Abre o arquivo e coloca o ponteiro no final
$arquivo = fopen('arquivo.txt','r+');
if ($arquivo) {
while(true) {
$linha = fgets($arquivo);
if ($linha==null) break;


// Busca o conteudo que vai ser alterado
if(preg_match("/$linha_n/", $linha)) {
$string .= str_replace("$linha_n", "Diego", $linha);
} else {
// Vai colocando tudo numa nova string
$string.= $linha;
}
}
// Move o ponteiro para o inicio pois o ftruncate() nao fara isso
rewind($arquivo);

// Apagar todo o conteudo
ftruncate($arquivo, 0);

// reescreve o conteudo do arquivo
if (!fwrite($arquivo, $string)) die('Não foi possível atualizar o arquivo.');
echo 'Arquivo atualizado com sucesso';
fclose($arquivo);
}

?>
