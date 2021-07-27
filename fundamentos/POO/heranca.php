<?php

class Aplicacao{
  public function runApp(){
    echo 'rodando!';
  }
}

class Cliente extends Aplicacao{
  public static function nomeCliente(){
    echo 'Leonardo Madeira';
  }
}

$cliente = new Cliente();
$cliente->runApp();
