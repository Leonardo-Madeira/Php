<?php

    $n1 = 10;
    $n2 = 2;

    echo $n1 + $n2;
    echo $n1 - $n2;
    echo $n1 * $n2;
    echo $n1 / $n2;
    echo $n1 ? $n2;
    echo $n1 ** $n2;

/*************************** */
//Teorema de Pitagoras:

// a² = b²+c²
$a = null;
$b = 21;
$c = 28;

$a = ($b*$b) + ($c*$c);
$a = sqrt($a); //or > $a = $a**0.5

echo $a;

//Aplicar 10% de desconto em um produto:
//Um carro custa 85.000 reais, um cliente quer pagar a vista e se o cliente pagar a vista em dinheiro o carro terá 10% de desconto. Faça um programa que mostre duas varia
//veis com o valor do carro com desconto e outra com apenas o valor do desconto:

$valorDoCarroComDesc;
$valorDoDesconto;

$carro = 85000;
$valorDoDesconto = ($carro*0.10);
$valorDoCarroComDesc = $carro-$valorDoDesconto;

echo "Valor do Desconto: $$valorDoDesconto reais <br />";
echo "Valor do Carro com Desconto: $$valorDoCarroComDesc reais";






?>