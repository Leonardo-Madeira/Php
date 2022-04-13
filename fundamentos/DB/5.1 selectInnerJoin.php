<?php
    $pdo = new PDO('mysql:host=localhost;dbname=aula01','root','');

    $sql = $pdo->prepare("SELECT * FROM posts"); //estou pegando tudo o que tem dentro de posts
    $sql->execute(); //Executa o que foi invocado no db

    $info = $sql->fetchAll(); //Pega todas as informações que conseguiu no db

  

    //ForEach é a melhor forma de Organizar e printar todas as inf do teu db
    foreach ($info as $key => $value) {
        echo "Titulo: ".$value['titulo'];
        echo '<br />';
        echo "Notícia: ".$value['conteudo'];
        echo '<hr />';
    }

    //for //Podemos printar desta forma também, mas o que eu recomendo é o forEach.
    /*
    for ($i=0; $i < count($info); $i++) { 
        echo "Titulo: ".$info[$i]['titulo'];
        echo '<br />';
        echo "Notícia: ".$info[$i]['conteudo'];
        echo '<hr />';
    }
    */

    /* Posso fazer desta forma tambem, mas não é profissional e nem organizado.
    echo '<pre>';
    print_r($info);
    echo '</pre>';
    */

?>