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
        
        <link href="css/unemstyle.css" rel="stylesheet">	
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
        font: bold 12px/24px 'Times New Roman', Times, serif;	
        padding:0px;
        text-decoration: none;
        text-align:center;	
        color:#fff;
        background: red url('botao_link.gif')
        no-repeat center center;	
        width: 370px;  
        height: 28px;	
        display:block;
        border-radius: 5px;
        border-width: 2px;
        border-style:solid;
        border-color: red;
        font-size: 25px;
	}
    .botao a:hover { 
        background: #fff url('botao_hover.gif') no-repeat 
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
    <div class="menu">
        <ul class=>
            <li> <a href="#" style="color: rgba(117, 2, 2, 0);"> </a></li> <!--Programação Orientada a Gambiarra-->
            <li> <a href="http://localhost/DealerTech/index.php" title="Página Inicial"> <i class="fas fa-home"> </i> Home </a></li>
            <li> <a href="http://localhost/DealerTech/comprar.php" style="background: #fff; color:rgb(117, 2, 2); border-radius: 3px;" title="Compre o seu carro de luxo"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
            <li> <a href="http://localhost/DealerTech/carros.php" title="Conheça os veículos de luxo"> <i class="fas fa-car"></i> Carros </a></li>
            <li> <a href="http://localhost/DealerTech/contatos.php" title="Entre em Contato Conosco"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
            <li> <a href="http://localhost/DealerTech/sobre.php" title="Conheça a Empresa Saga Veículos de Luxo"> <i class="fas fa-clipboard"></i> Sobre Nós </a></li>
			<?php
            if(isset($_SESSION['usuarioNiveisAcessoId'])){
                $tipo = $_SESSION['usuarioNiveisAcessoId'];
            }else{
                $tipo="";
            }
			if($tipo=="cliente"){
			?>		
				<li id="centro2" class="sair1"><a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-sign-out-alt"></i></a></li>	
			<?php
			}else if($tipo=="admin"){
			?>	
				<li id="centro2" class="oa"> <a href="http://localhost/DealerTech/admin/admin.php" title="Opções Administrativas" style="font-size: 22px; margin-top: 0px;"> <i class="fas fa-tools"></i> </a> </li>
                <li id="centro2" class="sair"><a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-sign-out-alt"></i></a></li>	
			<?php	
			}else{
			?>
				<li id="centro2" class="oa"> <a href="http://localhost/DealerTech/login.php" title="Fazer Login" style="font-size: 22px; margin-top: 0px;"> <i class="fas fa-user-edit"></i></a></li>
                <li id="centro2" class="sair"><a href="http://localhost/DealerTech/cadastro.php" title="Fazer Cadastro" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-cog"></i></a></li>	
			<?php
			}
			?>
		</ul>
    </div>
         <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
         <center>
         <div class="cent"style="background: #fff; height: 350px; width: 900px;border-radius: 15px; margin-top: 0px">
         <h2 style="font-size: 50px;"> Selecione uma das opções: </h2>
         <p class="botao">
            <a href="php/comprar/carnovo.php" title="Meu Link"> <i class="fas fa-car-side"></i> Carros Novos</a>
         </p> <br> <br>
         <p class="botao">
            <a href="php/comprar/carusado_semi.php" title="Meu Link"> <i class="fas fa-car-crash"></i> Carros Semi-novos ou Usados</a>
         </p> <br> <br>
         <p class="botao">
            <a href="buscaavançada.php" title="Meu Link"> <i class="fas fa-pencil-alt"></i> Busca Avançada</a>
         </p>
        </div>
        </center>

            
        
        

    </body>	
</html>