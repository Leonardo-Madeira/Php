<?php
    $pdo = new PDO('mysql:host=localhost;dbname=aula01','root','');

    $sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");
    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC deixa a array mais organizada e objetivo, voce pode removela se quiser.

    echo "<pre>";
    print_r($info);
    echo "</pre>";
   
    

?>