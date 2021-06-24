<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/DealerTech/css/style.css">
    <script type="text/javascript" src="http://localhost/DealerTech/js/validform.js"></script>
  </head>
  <body style="background: lavender; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;margin-left: 12%;">
    <div class="container" style="margin-top: 10%;">
        <!--PARTE: second-content-->
        <div class="content second-content" style="display: flex;"> 
             <!--coluna 1-->
             <div class="first-column">
                <h2 class="title" style="color: #fff;"> Olá, Amigo!</h2>
                <p class="description"> Você já possui um cadastro? </p>
                <p class="description"> então click no botão abaixo </p>
                <a href="http://localhost/DealerTech/login.php"> <button class="btn" style="transition: 0.25s;"> login </button> </a>
            </div> 
            <!--coluna 2-->
            <div class="second-culumn"> 
                <h2 class="title" style="color: red;"> Cadastro </h2>
                
                <p class="description" style="color: #95a5a6; margin-top:10px;"> por favor, informe os seguintes dados
                <br>
                </p>    
                <form class="form" name="dados" method="POST" action="http://localhost/DealerTech/php/salva_mensagem.php"> 
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-envelope"></i>
                        <input type="email" name="email" placeholder=" Email" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" placeholder=" Senha" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
                    </label>
                    
                    <button class="btn2" style="transition: 0.25s;" onclick="return ValidForm1()"> Inscreva-se </button>
                </form>

                <!-- Modal -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <?php
                $red="a";
                if(isset($_SESSION['redirecionar'])){
                    $red = $_SESSION['redirecionar'];
                }else{
                    $red="";
                }
			    if($red == "red"){ ?>
				<script>
					$(document).ready(function(){
						$('#meuModal').modal('show');
					});
				</script>
			    <?php 
                } 
                unset(
                    $_SESSION['redirecionar']
                );
                ?>
                <div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Confirmação do Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php 
                        if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn2" data-dismiss="modal">Fechar</button>
                    </div>
                    </div>
                </div>
                </div>
            </div> <!-- FIM: second colum-->
        </div> <!-- FIM: second content-->
      </div>
  </body>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>

</html>