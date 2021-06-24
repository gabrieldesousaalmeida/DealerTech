<?php
session_start();
include_once("php/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>	
        <title>Comprar</title>

        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/unemstyle2.css" rel="stylesheet">	
    </head>	
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
    h2{
        text-align: center;
        color:red;
        text-shadow: -1px -1px white, 1px 1px #333;
    } 
    .botao  {
        margin:0px;
        padding:0px;
    }
    .botao a {  
        font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
        padding:0px;
        text-decoration: none;
        text-align:center;	
        color:#fff;
        background: red url('botao_link.gif')
        no-repeat center center;	
        width: 450px;  
        height: 38px;	
        display:block;
        border-radius: 5px;
        border-width: 2px;
        border-style:solid;
        border-color: red;
        font-size: 25px;
        text-transform: uppercase;
	}
    .botao a:hover { 
        background: #800000 url('botao_hover.gif') no-repeat 
        center center;
        color:red;
        transition: 0.2s;
    }
    .sair1{
        margin-left: 28%;
    }
    .cent{
        margin-top: 150px;
    }
    @media screen and (min-width: 1305px) {
        .cent{
        margin-top: 210px;
        }
    }
    </style>
    <body>	
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="box-shadow: gray 0px 3px 9px; background-color: white;;">
            <div class="container px-4 px-lg-5">
                 <img src="imagens/logored.png" style="height: 60px;"/>
                <a class="navbar-brand" href="#page-top" style="color:red;">Saga Veículos de Luxo</a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/comprar.php"><i class="fas fa-caret-right"></i> Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/carros.php">Carros</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/contatos.php">Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/sobre.php">Sobre Nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
         <center>
         <div class="cent"style="background: #fff; height: 350px; width: 900px;border-radius: 15px; margin-top: 200px; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
         <h2 style="font-size: 50px;"> Selecione uma das opções: </h2>
         <p class="botao">
            <a href="php/comprar/carnovo.php" title="Meu Link"> </i> Carros Novos</a>
         </p> <br> <br>
         <p class="botao">
            <a href="php/comprar/carusado_semi.php" title="Meu Link">  Carros Semi-novos ou Usados</a>
         </p> <br> <br>
         <p class="botao">
            <a href="buscaavançada.php" title="Meu Link">  Busca Avançada</a>
         </p>
        </div>
        </center>

            
        
        

    </body>	
</html>