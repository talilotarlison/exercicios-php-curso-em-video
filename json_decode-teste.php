<?php
// https://pt.stackoverflow.com/questions/235598/como-ler-e-interpretar-um-arquivo-json-com-php
// URL do arquivo JSON
$url = 'https://exemplo.com/arquivo.json';

// Obtém o conteúdo do arquivo JSON
$json = file_get_contents($url);

// Decodifica o JSON para um array associativo
$data = json_decode($json, true);

// Exibe os dados
print_r($data);
?>
