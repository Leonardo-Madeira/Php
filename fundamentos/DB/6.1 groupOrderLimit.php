<?php
    $pdo = new PDO('mysql:host=localhost;dbname=aula02','root','');

    $sql = $pdo->prepare("SELECT * FROM `clientes`");
    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo ':'.$value['cargo'];
        echo '<br />';
    }
    /*
    echo "<pre>";
    print_r($info);
    echo "</pre>";
   */
?>