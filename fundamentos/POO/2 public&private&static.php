<?php

    //Public funciona em qualquer lugar!
    //Private apenas dentro da classe!

    class Exemplo{
        private $var1;
        public $var2;
        public static $var3 = 'var3: Estatico <br />';

        public static function metodoStatic(){
            echo "Function Static: Metodo estatico <br />";
        }
}
    //include('2 public&private&static.classe.php'); //Instancia do obj
    $ex = new Exemplo();
    $ex->var2 = 'var1: Olá <br />';
    echo $ex->var2;
    //$exemplo->var1 = 'Olá'; // Dá erro pq a variavel é privada.
    
    //********************** */
    $ex2 = new Exemplo();
    $ex2->var2 = 'var2: Leonardo <br />';
    echo $ex2->var2;
    //Note que foi criando duas variaveis(exemplo e exemplo2) que recebetem
    //var1 e var2 em suas variaveis. Podemos criar VARIAS variaveis e instanciar
    //elas com o objeto Exemplo.

    //*********************** */

    echo Exemplo::$var3;
    Exemplo::metodoStatic();
?>