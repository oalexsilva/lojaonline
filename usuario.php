<!--Configurações do PHP-->
<?php

    //iniciar uma sessão
    session_start();

    if((!isset($_SESSION['email_cliente']) == true) and (!isset($_SESSION['senha_cliente'])==true)) {

        //destruir as variaveis se digitou errado no login
        unset($_SESSION['email_cliente']);
        unset($_SESSION['senha_cliente']);
        header('Location:entrar.php');
    }
    else {
        //criar uma variavel de acesso
        $logado = $_SESSION['email_cliente'];
    }


?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slide.css">
    <link rel="stylesheet" href="assets/css/mediaquery.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-------------------INICIO DO MENU-------------------------------------->
    <header id="header">
        <div class="logo">
            <a href="index.html">
                <img src="assets/img/logo/al modas.png" alt="">
            </a>
        </div>

        <nav id="nav" class="fixed-menu">
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu"
                aria-expanded="false">
                <span id="hamburguer"></span>
            </button>
            <ul class="menuitens" id="menu" role="menu">
                <li><a href="index.html" title="">Inicio</a></li>
                <li><a href="produtos.html" title="">Produtos</a></li>
                <li><a href="empresas.html" title="">Empresa</a></li>
                <li><a href="cadastro.php" title="">Cadastrar</a></li>
                <li><a href="entrar.php" title="">Entrar</a></li>
                <li><a href="contato.php" title="">Contato</a></li>
            </ul>
        </nav>
    </header>
    <!-------------------FIM DO MENU-------------------------------------->

     <!-------------------Inicio Sessão do Usuario-------------------------------------->
    <section class="barra_top">
        <div class="barra">
            <h1>Área do Usuário</h1>
        </div>

        <div class="barra">
            <a href="sair.php">SAIR</a>
        </div>
</section>

    <section class="usuario">
        <?php
            echo "<h2>Olá, $logado</h2>";
        ?>
        <p>Seja Bem-vindo ao Al Modas</p>
    </section>
    <!-------------------Fim Sessão do Usuario-------------------------------------->


    <!----------------------------------INICIO RODAPÉ----------------------------------------------->
    <footer class="rodape"><!--Inicio do Footer-->
        <div class="rodape-linha"><!--Inicio do rodape-linha-->
            <div class="rodape-col"><!--Inicio do rodape-col 1-->
                <figure><!--Inicio do figure-->
                    <img src="assets/img/logo/al modas.png" alt="">
                </figure><!--Fim do figure-->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus illo aspernatur veritatis reprehenderit ab</p>
                <span> <i class="bx bx-phone"></i> (16) 9999-9999</span><!--span-->
                <span> <i class="bx bx-location-plus"></i>  Rua Paulo Donizete Pereira nº 1331</span><!--span-->
                <span> <i class="bx bxs-envelope"></i> contato@almodas.com.br</span><!--span-->
            </div><!--Fim do rodape-col 1-->
            <div class="rodape-col"><!--Inicio rodape-col 2-->
                <h5>Informações</h5><!--h5-->
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Sobre Nós</a><!--a-->
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Blog</a><!--a-->
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Vídeos</a><!--a-->
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Política de Privacidade</a><!--a-->
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Termos de Serviços</a><!--a-->
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Nossos Planos</a><!--a-->
            </div><!--Fim rodape-col 2-->
            <div class="rodape-col"><!--Inicio rodape-col 3-->
                <h5>Suporte</h5><!--h5-->
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Perguntas</a>
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Revendas</a>
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Acessórios</a>
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Minha Conta</a>
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Anunciar</a>
                <a href="" title=""> <i class="bx bx-chevron-right"></i> Fale Conosco</a>
            </div><!--Fim rodape-col 3-->
            <div class="rodape-col"><!--Inicio rodape-col 4-->
                <h5>Suporte</h5><!--h5-->
                <p>Boletim Informativo</p><!--p-->
                <p class="texto">Receba novidades do nosso classificados de veículos</p><!--p-->
                <form action="" method="post"><!--Inicio form-->
                    <input type="text" name="email" placeholder="Seu melhor e-mail"><!--input-->
                    <button type="submit"> Quero me cadastrar</button><!--button-->
                </form><!--Inicio form-->
            </div><!--Fim rodape-col 4-->
        </div><!--Fim do rodape-linha-->
        <div class="rodape-direitos"><!--Incio do rodape-direitos-->
            <p>&copy; Desde 2010 <span>ALVEICULOS</span> Todos os direitos reservados</p><!--p-->
            <div class="rodape-redes"><!--Incio do rodape-redes-->
                <i class="bx bxl-youtube"></i><!--redes sociais-->
                <i class="bx bxl-instagram"></i><!--redes sociais-->
                <i class="bx bxl-facebook"></i><!--redes sociais-->
                <i class="bx bxl-tiktok"></i><!--redes sociais-->
            </div><!--Fim do rodape-redes-->
        </div><!--Fim do rodape-direitos-->
     </footer><!--Fim do Footer--> 
    <!----------------------------------FIM RODAPÉ----------------------------------------------->







    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/cycle.js"></script>





    <!--Código PHP---->
    <?php
    
    if(isset($_POST['submit'])) {

        include_once('conectar.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES('$nome', '$email', '$senha', '$sexo')");
    }
    ?>
     <!--Código PHP---->
</body>

</html>