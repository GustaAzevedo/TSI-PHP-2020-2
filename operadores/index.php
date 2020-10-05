<?php

echo "Olá mundo!";
/*
*
* comentário em bloco
*/
$saldo = 34.5;

//ASPAS DUPLAS ACEITAM STRING ESPECIAIS
echo "<br><br><br> seu saldo $saldo ";

//ASPAS SIMPLES NÃO ACEITAM STRINGS ESPECIAIS, APENAS STRING PURA
echo '<br><br><br> seu saldo $saldo ';

$saldo = $saldo - 10; // Operado de subtração

echo "<br><br><br> seu saldo $saldo ";

$saldo -= 10; 

echo "<br><br><br> seu saldo $saldo ";

$saldo *= 1000;

echo "<br><br><br> seu saldo $saldo ";