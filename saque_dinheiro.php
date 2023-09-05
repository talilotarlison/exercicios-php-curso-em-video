<?php
// Enter your code here, enjoy!
$saque = 1020;
$resto = 0;

$sem = (int)($saque / 100);
$resto = $saque % 100;



$cinquenta = (int)($resto/50);
$resto = $resto% 50;

$vinte = (int)($resto/20);
$resto = $resto% 20;

$dez = (int)($resto/10);
$resto = $resto% 10;

$cinco = (int)($resto/5);
$resto = $resto% 5;

$dois = (int)($resto/2);
$resto = $resto% 2;

$um = (int)($resto/1);
$resto = $resto% 1;



echo "sedas de 100 $sem <br>
sedas de cinqueta $cinquenta <br>
sedas de 20 $vinte <br>
sedas de dez $dez <br>
sedas das de cinco $cinco <br>
sedas de dois $dois <br>
sedas de um $um <br>
";
//https://pt.m.wikipedia.org/wiki/Programação_procedural
