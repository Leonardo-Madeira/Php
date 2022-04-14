<?php

    session_start();
   
    if(isset($_SESSION['nome'])){
        echo "Nome: ".$_SESSION['nome']."<br />"; //Printa o que tem dentro da session Nome
    }
    if(isset($_SESSION['idade'])){
        echo "idade: ".$_SESSION['idade']; //Printa o que tem dentro da session Nome
    }
    //Uma forma de destruir uma sessão, está forma destroi apenas UMA sessão específica 
    unset($_SESSION['nome']); //comente essa linha que será printado o nome que está no cookie
    //essa linha remove o que tem dentro da session nome.
    //Obs que ele destruiu apenas a sessão Nome e não a sessão idade.

    //Para destruir TODAS as sessões
    session_destroy(); //Diferente o unset, o session destroy ele remove todas as sessoes existentes.
   
?>