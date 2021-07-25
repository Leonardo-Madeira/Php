<?php
class Objeto //objeto criado
{

  public $nome = 'Jose'; //variavel


  function __construct() // Método construtor
  {
    echo 'Conteúdo do Objeto:';
  }

  // public deixa os valores publicos é o mesmo do THIS em JS
  public function printNome()
  { //função
    return 'Joao';
  }
}

//instanciar um objeto(invocar o obj)

$nomeObjeto = new Objeto(); // o objeto entra na variavel nomeObjeto

echo '<br>';

echo $nomeObjeto->printNome(); // variavel do objeto esta instanciando a função que esta no obj

echo '<br>';

echo $nomeObjeto->nome; // variavel do objeto esta instanciando a variavel que esta no obj