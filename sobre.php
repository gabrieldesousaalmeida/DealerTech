<?php
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
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#800000;">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/index.php"> <i class="fas fa-home"> </i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/comprar.php"> <i class="fas fa-dollar-sign"> </i> Comprar</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/carros.php"> <i class="fas fa-car"></i> Carros</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/contatos.php"> <i class="fas fa-phone-alt"></i> Contatos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/sobre.php"> <i class="fas fa-clipboard"></i> Sobre Nós</a>
                </li>
                <li class="nav-item">
                </li>
                <?php
                if(isset($_SESSION['usuarioNiveisAcessoId'])){
                $tipo = $_SESSION['usuarioNiveisAcessoId'];
                }else{
                    $tipo="";
                }
                if($tipo=="cliente"){
                ?>		
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px;"> <i class="fas fa-sign-out-alt"></i></a>
                    </li>	
                <?php
                }else if($tipo=="admin"){
                ?>	
                    <li class="nav-item active"> 
                        <a class="nav-link" href="http://localhost/DealerTech/admin/admin.php" title="Opções Administrativas" style="font-size: 25px;"> <i class="fas fa-tools"></i> </a> 
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px;"><i class="fas fa-sign-out-alt"></i></a>
                    </li>	
                <?php	
                }else{
                ?>
                    <li class="nav-item active"> 
                        <a class="nav-link" href="http://localhost/DealerTech/login.php" title="Fazer Login" style="font-size: 25px;"> <i class="fas fa-user-edit"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/cadastro.php" title="Fazer Cadastro" style="font-size: 25px;"><i class="fas fa-cog"></i></a>
                    </li>	
                <?php
                }
                ?>
              </ul>
              <form class="form-inline my-2 my-lg-0">
              </form>
            </div>
        </nav>
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
        
        <!--Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
    </body>	
</html>