<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Veículos</title>
    <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="http://localhost/DealerTech/Imagens/favicon/site.webmanifest">
    <link rel="stylesheet" href="http://localhost/DealerTech/css/cv.css">
    <script type="text/javascript" src="http://localhost/DealerTech/js/validform.js"></script>
  </head>
  <body>
    <div class="container">
        <!--PARTE: second-content-->
        <div class="content second-content" style="display: flex;"> 
             <!--coluna 1-->
             <div class="first-column">
                <h2 class="title" style="color: #fff;"> Olá, Administrador!</h2>
                <p class="description"> Você entrou na página errada? </p>
                <p class="description"> click aqui para ir para as opções administrativas  </p>
                <a href="http://localhost/DealerTech/login.php"> <button class="btn" style="transition: 0.25s;"> Opções Adm </button> </a>
            </div> 
            <!--coluna 2-->
            <div class="second-culumn"> 
                <h2 class="title" style="color: red;"> Cadastrar Veículos </h2>
                
                <p class="description" style="color: #95a5a6;"> por favor, informe os seguintes dados:
                <br>
                <?php 
                    if(isset($_SESSION['loginErro'])){
				    echo $_SESSION['loginErro'];
				    unset($_SESSION['loginErro']);
			        }
                    ?>
                </p>    
                <form class="form" name="dados" method="POST" action="http://localhost/DealerTech/php/cadastro_veiculo/salva_mensagem.php"> 
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-credit-card"></i>
                        <input type="text" name="marca" placeholder="Marca" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-car-side"></i>
                        <input type="text" name="modelo" placeholder="Modelo" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-sort-numeric-down"></i>
                        <input type="text" name="chassi" placeholder="Chassi" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-building"></i>
                        <input type="text" name="fabricante" placeholder="Fabricante" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-calendar-alt"></i>
                        <input type="date" name="ano" placeholder="Data" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-edit"></i>
                        <input type="text" name="cor" placeholder="Cor" style="box-shadow: 0 0 0 0;outline: 0;color:rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    
                    <button type="submit"class="btn2" style="transition: 0.25s;" onclick="return cad_vei()"> Cadastrar</button>
                </form>
            </div> <!-- FIM: second colum-->
        </div> <!-- FIM: second content-->
      </div>
  </body>
  <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>

</html>