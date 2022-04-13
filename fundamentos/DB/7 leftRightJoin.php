<?php
    $pdo = new PDO('mysql:host=localhost;dbname=aula02','root','');

    $sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");
    //"SELECT * FROM `clientes` INNER JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`" // Retorna todos clientes e seus cargos
    //"SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`" // Retorna todos os clientes com cargos e sem cargos preenchido
    //"SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`" // Retorna todos os Cargos com os clientes que tem cargo e não retorna quem nao tem cargo
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo ': '.$value['nome_cargo'];
        echo '<br />';
    }

?>