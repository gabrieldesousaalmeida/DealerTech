<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>	
        <title>Contatos</title>

        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
        
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
        <link href="css/unemstyle.css" rel="stylesheet">	
        <link href="css/contatostyle.css" rel="stylesheet">
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
        .cent{
        margin-top: 150px;
        }
        @media screen and (min-width: 1305px) {
            .cent{
            margin-top: 210px;
            }
        }
        </style>
    </head>	
    <body>	
    <div class="menu">
        <ul class=>
            <li> <a href="#" style="color: rgba(117, 2, 2, 0);"> </a></li> <!--Programação Orientada a Gambiarra-->
            <li> <a href="http://localhost/DealerTech/index.php" title="Página Inicial"> <i class="fas fa-home"> </i> Home </a></li>
            <li> <a href="http://localhost/DealerTech/comprar.php" title="Compre o seu carro de luxo"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
            <li> <a href="http://localhost/DealerTech/carros.php" title="Conheça os veículos de luxo"> <i class="fas fa-car"></i> Carros </a></li>
            <li> <a href="http://localhost/DealerTech/contatos.php" style="background: #fff; color:rgb(117, 2, 2); border-radius: 3px;" title="Entre em Contato Conosco"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
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
         <center>
         <div class="cent"style="background: rgba(255, 255, 255, 0); height: 350px; width: 900px;border-radius: 15px;">
         <h2 style="font-size: 50px;"> Fale Conosco: </h2>
         <p class="botao">
            <a href="https://wa.me/5585981544074?text=Ol%C3%A1%20empresa%20Saga%20Veiculos%20De%20Luxo!" title=""> <i class="fab fa-whatsapp"></i>  WhatsApp: <br> <br> (88) 9619-2654 </a>
         </p> <br> <br> <br>
         <p class="botao2">
            <a href="https://sagaveiculosdeluxo@gmail.com" title=""> <i class="far fa-envelope"></i> E-mail: <br> <br> sagaveiculosdeluxo@gmail.com </a>
         </p> <br> <br> <br>
         <p class="botao3">
            <a href="tel:+5585981544074" title=""> <i class="fas fa-phone-alt"></i> Telefone: <br> <br> (88) 8109-5962 </a>
         </p>
        </div>
        </center>

            
        
        

    </body>	
</html>