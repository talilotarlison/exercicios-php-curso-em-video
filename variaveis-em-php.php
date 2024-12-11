
<?php
#Usando GLOBALS
$idade = 30; // Variável global

function mostrarIdade() {
echo $GLOBALS['idade']; // Acessa a variável global usando o array GLOBALS
}

mostrarIdade(); // Saída: 30


#Múltiplas variáveis globais**:

$cidade = "São Paulo";
$estado = "SP";

function mostrarLocalizacao() {
global $cidade, $estado; // Declara múltiplas variáveis globais
echo "$cidade, $estado";
}

mostrarLocalizacao(); // Saída: São Paulo, SP
#*Usando variáveis globais com arrays**:

$pessoa = array(
"nome" => "Maria",
"idade" => 25
);

function mostrarPessoa() {
global $pessoa; // Acessa a variável global que é um array
echo "Nome: " . $pessoa['nome'] . ", Idade: " . $pessoa['idade'];
}

mostrarPessoa(); // Saída: Nome: Maria, Idade: 25
