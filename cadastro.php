<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="http://localhost/DealerTech/css/style.css">
    <script type="text/javascript" src="http://localhost/DealerTech/js/validform.js"></script>
  </head>
  <body>
    <div class="container">
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
                <div class="social-media">
                    <ul class="list-social-media">
                        <a href="#" class="link-social-media">
                         <li class="item-social-media" style="transition: 0.25s;"> <i class="fab fa-facebook-f"> </i></li>
                        </a>
                        <a href="https://www.google.com.br/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjzuPK6-a_wAhUbpJUCHedUB8YQFjABegQIAxAD&url=https%3A%2F%2Fwww.google.com%2Faccounts%2FLogin%3Fhl%3Dpt-br&usg=AOvVaw0P3mx0_gxPK-FstnzSM72F" class="link-social-media">
                         <li class="item-social-media" style="transition: 0.25s;"> <i class="fab fa-google-plus-g"></i></li>
                        </a>
                    </ul>
                </div> <!-- FIM: social-media-->
                <p class="description" style="color: #95a5a6;"> por favor, informe os seguintes dados
                <br>
                <?php 
                    if(isset($_SESSION['loginErro'])){
				    echo $_SESSION['loginErro'];
				    unset($_SESSION['loginErro']);
			        }
                    ?>
                </p>    
                <form class="form" name="dados" method="POST" action="http://localhost/DealerTech/php/salva_mensagem.php"> 
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-envelope"></i>
                        <input type="email" name="email" placeholder=" Email" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" placeholder=" Senha" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;">
                    </label>
                    <label for=""class="label-input icon-modify">
                        <i class="fas fa-users-cog"></i>
                        <select name="niveis_acesso_id" style="color: #7f8c8d;; font-family: 'Times New Roman', Times, serif;border: 0px solid #bdc3c7;outline:none;background:transparent;">
                            <option value="cliente"selected> Cliente </option>
                            <option value="admin">Admin</option>
                          </select>
                    </label>
                    <button class="btn2" style="transition: 0.25s;" onclick="return ValidForm1()"> Inscreva-se </button>
                </form>
            </div> <!-- FIM: second colum-->
        </div> <!-- FIM: second content-->
      </div>
  </body>
  <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>

</html>