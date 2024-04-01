<?php

    //criar uma sessão
    session_start();

    //destruir as variaveis
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);

    //agora vamos direcionar o cliente para outra página

    header('Location:index.html');

?>