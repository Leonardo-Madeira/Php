<?php
    $pdo = new PDO('mysql:host=localhost;dbname=aula01','root','');

    $sql = $pdo->prepare("SELECT * FROM `posts` WHERE categoria_id = ?");
    $sql->execute(array($_GET['categoria_id']));

    $info = $sql->fetchAll();

    foreach ($info as $key => $value) {
        echo "Titulo: ".$value['titulo'];
        echo '<br />';
        echo "Notícia: ".$value['conteudo'];
        echo '<hr />';
    }

    // Para funcionar voce deve escrever no final da url o seguinte:
    // http://localhost/php/fundamentos/DB/5.0%20selectInnerJoin.php?categoria_id=1
    // http://localhost/php/fundamentos/DB/5.0%20selectInnerJoin.php?categoria_id=2

    // Obs que no final da url tem que colocar: ?categoria_id=1 ou ?categoria_id=2


?>