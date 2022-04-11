<?php

  //Primeira forma de criar uma array
  $nomes = array('Léo','João','Maria');
  $nomes[] = 'Joe'; // Adiciona Joe dentro da array e fica no indice 3
  $nomes[0] = 'João'; // João substituie Léo e fica no indice 0 e 1


  //Segunda forma de criar uma array
  $array = ['A', 'B', 'C', 'D']; // esta é a melhor forma de declarar uma array.
  //echo $array[0]; //A


  //Terceira forma de criar uma array
  // O elemento esta dentro do indice nome2, não precisa ser sempre numeros os indices como por exemplo os de cima que começa com o numero 0
  $user['nome2'] = 'Leonardo';
  $user['idade'] = 25;
  $user['cidade'] = 'Florianópolis';

  echo $user['nome2'];
  echo '<br />';
  echo $user['idade'];
  echo '<br />';
  echo $user['cidade'];
  echo '<br />'; 
