<?php

    define('HOST','localhost');
    define('DB','testes');
    define('USER','root');
    define('PASS','');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'Erro ao conectar';
    }

    $sql = $pdo->prepare("SELECT * FROM clientes WHERE date BETWEEN '2022-04-11' AND '2022-04-20'");
    //Lembrando que o BETWEEN ele é otimo para manipular datas como está acima


    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($info);
    echo "</pre>";


?>