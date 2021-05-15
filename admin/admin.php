<?php
session_start();
$tipo = $_SESSION['usuarioNiveisAcessoId'];
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>	
        <title>Opções Administrativas</title>
        
        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">

        <link href="http://localhost/DealerTech/css/unemstyle.css" rel="stylesheet">	
        <link href="http://localhost/DealerTech/css/admin.css" rel="stylesheet">
        <style>
            #centro{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }
        #centro2{
            display: inline-block;
        }
        .oa{
            margin-left: 24%;
        }
        .sair{
            margin-left: 0%;
        }
        .sair1{
            margin-left: 28%;
        }
        </style>
    </head>	
    <body>	
        <div class="menu">
            <ul class=>
                <li> <a href="#" style="color: rgba(117, 2, 2, 0);"> </a></li> <!--Programação Orientada a Gambiarra-->
                <li> <a href="http://localhost/DealerTech/index.php" style="background: #fff; color:rgb(117, 2, 2); border-radius: 3px;" title="Página Inicial"> <i class="fas fa-home"> </i> Home </a></li>
                <li> <a href="http://localhost/DealerTech/comprar.php" title="Compre o seu carro de luxo"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
                <li> <a href="http://localhost/DealerTech/carros.php" title="Conheça os veículos de luxo"> <i class="fas fa-car"></i> Carros </a></li>
                <li> <a href="http://localhost/DealerTech/contatos.php" title="Entre em Contato Conosco"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
                <li> <a href="http://localhost/DealerTech/sobre.php" title="Conheça a Empresa Saga Veículos de Luxo"> <i class="fas fa-clipboard"></i> Sobre Nós </a></li>
                <li id="centro2" class="sair1"><a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
        </div>
         <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
         <center>
         <br> <br> <br> <br> <br> <br> <h2 style="font-size: 50px;"> Por favor, Selecione uma das opções: </h2>
         <div style="background: rgba(255, 255, 255, 0); height: 350px; width: 900px;border-radius: 15px; display: flex;margin-left: -350px;">
         <p class="botao">
            <a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title=""> <i class="fas fa-wrench" style="font-size: 50px;"></i><i class="fas fa-truck-pickup"style="font-size: 50px;"></i> <br> <br> Gerenciar Veículos </a>
         </p> <br> <br> <br>
         <p class="botao2">
            <a href="http://localhost/DealerTech/admin/gerenciar_clientes.php" title=""> <i class="fas fa-wrench" style="font-size: 50px;"></i><i class="fas fa-user-edit" style="font-size: 50px;"></i> <br> <br> Gerenciar Clientes </a>
         </p> <br> <br> <br>
         <p class="botao">
            <a href="http://localhost/DealerTech/admin/gerenciar_promoções.php" title=""> <i class="fas fa-wrench"style="font-size: 50px;"><i class="fas fa-money-bill"style="font-size: 50px;"></i></i> <br> <br> Gerenciar Promoções </a>
         </p>
         <p class="botao2">
            <a href="http://localhost/DealerTech/admin/estoque.php" title=""> <i class="fas fa-box-open"style="font-size: 50px;"> <i class="fas fa-pencil-alt"style="font-size: 50px;"></i></i> <br> <br> Estoque </a>
         </p>
         <p class="botao">
            <a href="http://localhost/DealerTech/admin/relat_vendas.php" title=""> <i class="fas fa-clipboard-list"style="font-size: 50px;"></i> <i class="fas fa-search-dollar"style="font-size: 50px;"></i><br> <br> Controle de Vendas </a>
         </p>
         <p class="botao2">
            <a href="http://localhost/DealerTech/admin/relat_reservas.php" title=""> <i class="fas fa-clipboard-list"style="font-size: 50px;"> </i> <i class="fas fa-pencil-alt"style="font-size: 50px;"> </i><br> <br> Controle de Reservas</a>
         </p>
        </div>
        </center>

            
        
        

    </body>	
</html>