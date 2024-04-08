<?php

// Pega query da url por metodo GET:
$id = $_GET['id'];
var_dump($id);

// Pega query da url por metodo POST não vai exposto na url:
$id = $_POST['id'];
var_dump($id);


// PEga url do servidor
echo 'Path: ' . $_SERVER['PATH_INFO'] . '<br>';
// Extraindo PATH_INFO
$paths = explode('/', $_SERVER['PATH_INFO']);
echo '<pre>';
print_r($paths);
echo '</pre>';
?>

// https://www.php.net/manual/pt_BR/function.htmlspecialchars.php
// Mostra as tags no echo na pagina html
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);

echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
