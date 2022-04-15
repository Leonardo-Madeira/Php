<?php
    session_start();
    setcookie('nome','Leonardo',time()+(60*60*24),'/');

    echo $_COOKIE['nome'];

    //Não tem como destruir um cookie, mas existe um macete que é so deixar o tempo negativo. ex:
    //setcookie('nome','Leonardo',time()-(60*60*24),'/');



?>