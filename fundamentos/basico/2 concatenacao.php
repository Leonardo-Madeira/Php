<?php

$cliente = 'Pedro';
$idade = 45;
$n1 = '<br>'; // posso fazer desta forma tbm

echo 'ex1: Olá, ', $cliente, '. Tudo bem com você? Estou vendo que você tem ', $idade, ' anos. <br><br>'; // essa é uma forma não tao interessante.
echo 'ex1.1: Olá, '.$cliente.'. Tudo bem com você? Estou vendo que você tem '.$idade.' anos. <br><br>'; // essa é a segunda forma não tao interessante.

echo "ex2: Olá, $cliente! Tudo bem com você? Estou vendo que você tem $idade anos."; // essa é a forma mais interessante e simples :)
