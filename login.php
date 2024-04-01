<?php

session_start(); //Inicia uma sessão

//Verificar se houve uma ação dentro da página entrar.php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))  {
        //Não está vazios os campos

        //conectar ao banco de dados
        include_once('conectar.php');

        //Criar as variaveis de armazenamento
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //Verificar a tabaela do banco de dados

        $sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' and senha_cliente = '$senha' ";

        $verificar = $conexao -> query($sql); 

        //Verificar se  o registro é valido

        if(mysqli_num_rows($verificar) < 1)  { 

            //Destruir as váriaveis e zeros os input
            unset($_SESSION['email_cliente']);
            unset($_SESSION['senha_cliente']);
            header('Location:entrar.php');
       
        }    
        else {
            //Criar as variaveis da sessão
            $_SESSION['email_cliente'] = $email;
            $_SESSION['senha_cliente'] = $senha;
            header('Location:usuario.php');
        }



    } 
    else {
        // o campo está vazio
        header('Location:entrar.php');
}
        


?>