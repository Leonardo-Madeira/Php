<?php

$x = 5;
$y = 10;
$i = -3;

if ($x >= $y) { //if = SE
  echo 'x é maior que y?';
} else if ($i >= $y) { // else if = Senão se
  echo 'i é maior que y?';
} else { // else = senão
  echo 'x não é maior que y e i não é maior que y';
}

/***************************************************** */

$n1 = 8;
$n2 = 5;
$n3 = 5;
$n4 = 8;
$totalN = 6.7;

if ($totalN>=7) {
  echo "Aluno APROVADO! Nota: $totalN";
} elseif ($totalN>=6) {
  echo "Aluno RECUPERAÇÃO! Nota: $totalN";
} else {
  echo "Aluno REPROVADO! Nota: $totalN";
}

/******************************************************** */

$pouj = 100;
$jouh = 020;
echo $pouj>=$jouh?'Verdadeiro':'Falso';


?>