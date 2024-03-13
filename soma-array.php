<?php
// Defina um array de transações (positivas para entradas, negativas para despesas)
$transacoes = array(-100, -50, -200, -30, -50);

// Calcule o saldo total
$saldo_total = array_sum($transacoes);

// Exiba o saldo final
echo "Saldo final: $saldo_total";
?>
