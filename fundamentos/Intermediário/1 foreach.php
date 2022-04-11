<?php

$clientes = ['cliente1', 'cliente2', 'cliente3', 'cliente4', 'cliente5'];

foreach ($clientes as $key => $value) {
  
  echo  "$key => $value <hr>";

    //key é a quantidade de variaveis que estão dentro da array clientes, que no caso são 5.
    
    //value é o valor(elemento) do array, que no caso é o nome dos clientes.
}

// OU
echo 'OU <br>';

$total = count($clientes);
for ($i = 0; $i < $total; $i++) {
  echo "<br> $clientes[$i]";
}
