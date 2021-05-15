<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
	$tipo = $_SESSION['usuarioNiveisAcessoId'];
}else{
	$tipo = "deslogado";
}
include_once("php/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>	
        <title>Sobre nós</title>

        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
        
        <link href="css/unemstyle.css" rel="stylesheet">
        <link href="css/stylesobre.css" rel="stylesheet">	
    </head>	
    <style>
    h3{
        color: gray;
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        display: flex;
        padding-left: 25px;
    }
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
    <body>	
    <div class="menu">
        <ul class=>
            <li> <a href="#" style="color: rgba(117, 2, 2, 0);"> </a></li> <!--Programação Orientada a Gambiarra-->
            <li> <a href="http://localhost/DealerTech/index.php" title="Página Inicial"> <i class="fas fa-home"> </i> Home </a></li>
            <li> <a href="http://localhost/DealerTech/comprar.php" title="Compre o seu carro de luxo"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
            <li> <a href="http://localhost/DealerTech/carros.php" title="Conheça os veículos de luxo"> <i class="fas fa-car"></i> Carros </a></li>
            <li> <a href="http://localhost/DealerTech/contatos.php" title="Entre em Contato Conosco"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
            <li> <a href="http://localhost/DealerTech/sobre.php" style="background: #fff; color:rgb(117, 2, 2); border-radius: 3px;" title="Conheça a Empresa Saga Veículos de Luxo"> <i class="fas fa-clipboard"></i> Sobre Nós </a></li>
			<?php
			if($tipo=="cliente"){
			?>		
				<li id="centro2" class="sair1"><a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-sign-out-alt"></i></a></li>	
			<?php
			}else if($tipo=="admin"){
			?>	
				<li id="centro2" class="oa"> <a href="http://localhost/DealerTech/admin/admin.php" title="Opções Administrativas" style="font-size: 22px; margin-top: 0px;"> <i class="fas fa-tools"></i> </a></li>
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
         <br> <br> <br> 

         <h3>
            
            <br> <br> <br> <br> 
            Seja bem vindo a Saga Veículos de Luxo. <br>
            Nosso objetivo é fazer com que você <br>
            ache o melhor carro que se encaixa com <br>
            o seu perfil, nós fazemos isso através <br>
            de comparações e filtrações para lhe ajudar<br>
            a conseguir o melhor preço e modelo para você. <br>
            Use, manipule, analize o nosso site e carros, <br>
            Assim você poderá ter uma noção melhor do benefícios. <br>
            Meu nome é Ariclésio, e sou empresário da SVL.


         
        
        
         <ul class="slider">
            <li>
                  <input type="radio" id="slide1" name="slide" checked>
                  <label for="slide1"> <i class="fas fa-arrow-circle-left" style="color: #fff;"></i>  </label>
                  <img src="Imagens/felipe.jfif" style="border-radius: 10px;" />
            </li>
            <li>
                  <input type="radio" id="slide2" name="slide">
                  <label for="slide2"> <i class="fas fa-arrows-alt-h" style="color: #fff;"></i> </label>
                  <img src="Imagens/info2.jpg" style="border-radius: 10px;"/>
            </li>
            <li>
                  <input type="radio" id="slide3" name="slide">
                  <label for="slide3"> <i class="fas fa-arrow-circle-right" style="color: #fff; "></i> </label>
                  <img src="Imagens/info1.jpg" style="border-radius: 10px;"/>
            </li>
        </ul>
            
    
        </h3>
        
        <!--
        <h10>
            Você deseja comprar seu carro novo e não sabe por onde começar? Então você está no site certo.
            O Ariclésio tem anos de experiência nesse mercado, e com certeza ajudará muito você para conseguir
            seu carro dos sonhos, 
        </h10>
    -->
        

    </body>	
</html>