<?php   // public static
class Nome
{

  public static $nomeCompleto = 'Leonardo Madeira';

  public static function printNome()
  {
    echo 'Leonardo';
  }
}

//Instanciar a class.
Nome::printNome();
Nome::$nomeCompleto; // desta forma, a variavel statica não é instanciada e nao contem erro
echo self::$nomeCompleto;
