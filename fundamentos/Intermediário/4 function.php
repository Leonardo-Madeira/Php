<?php
function sobreNome($nome){
  return "$nome Madeira";
}

function printarNome($nome){
  echo "<h1>$nome</h1>";
}

printarNome('Madeira');
echo sobreNome('Leonardo');
